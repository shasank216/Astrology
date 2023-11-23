<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class AppointmentTable extends LivewireTableComponent
{
    protected $model = Appointment::class;
    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'appointments.components.add_button';
    public bool $showFilterOnHeader = true;
    public array $FilterComponent = ['appointments.components.filter',Appointment::PAYMENT_TYPE_ALL, Appointment::STATUS];
    protected $listeners = [
        'refresh' => '$refresh', 'resetPage','changeStatusFilter', 'changePaymentTypeFilter', 'changeDateFilter',  'changePaymentStatusFilter',
    ];
    public string $paymentTypeFilter = '';
    public string $paymentStatusFilter = '';
    public string $dateFilter = '';
    public $statusFilter = Appointment::BOOKED;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setDefaultSort('created_at', 'desc')
            ->setQueryStringStatus(false);

        $this->setThAttributes(function (Column $column) {
            if ($column->isField('id')) {
                return [
                    'class' => 'text-center',
                ];
            }

            return [];
        });
    }

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        $query = Appointment::with([
            'doctor.user', 'patient.user', 'services', 'transaction', 'doctor.reviews', 'doctor.user.media',
        ]);

        $query->when($this->statusFilter != '' && $this->statusFilter != Appointment::ALL_STATUS,
            function (Builder $q) {
                if ($this->statusFilter != Appointment::ALL) {
                    $q->where('appointments.status', '=', $this->statusFilter);
                }
            });

        $query->when($this->paymentTypeFilter != '' && $this->paymentTypeFilter != Appointment::ALL_PAYMENT,
            function (Builder $q) {
                $q->where('payment_type', '=', $this->paymentTypeFilter);
            });

        $query->when($this->paymentStatusFilter != '',
            function (Builder $q) {
                if ($this->paymentStatusFilter != Appointment::ALL_PAYMENT) {
                    if ($this->paymentStatusFilter == Appointment::PENDING) {
                        $q->has('transaction', '=', null);
                    } elseif ($this->paymentStatusFilter == Appointment::PAID) {
                        $q->has('transaction', '!=', null);
                    }
                }
            });

        if ($this->dateFilter != '' && $this->dateFilter != getWeekDate()) {
            $timeEntryDate = explode(' - ', $this->dateFilter);
            $startDate = Carbon::parse($timeEntryDate[0])->format('Y-m-d');
            $endDate = Carbon::parse($timeEntryDate[1])->format('Y-m-d');
            $query->whereBetween('date', [$startDate, $endDate]);
        } else {
            $timeEntryDate = explode(' - ', getWeekDate());
            $startDate = Carbon::parse($timeEntryDate[0])->format('Y-m-d');
            $endDate = Carbon::parse($timeEntryDate[1])->format('Y-m-d');
            $query->whereBetween('date', [$startDate, $endDate]);
        }

        if (getLoginUser()->hasRole('patient')) {
            $query->where('patient_id', getLoginUser()->patient->id);
        }

        return $query->select('appointments.*');
    }

    /**
     * @param $status
     */
    public function changeStatusFilter($status)
    {
        $this->statusFilter = $status;
        $this->setBuilder($this->builder());
    }

    /**
     * @param $type
     */
    public function changePaymentTypeFilter($type)
    {
        $this->paymentTypeFilter = $type;
        $this->setBuilder($this->builder());
    }

    /**
     * @param $type
     */
    public function changePaymentStatusFilter($type)
    {
        $this->paymentTypeFilter = $type;
        $this->setBuilder($this->builder());
    }

    /**
     * @param $date
     */
    public function changeDateFilter($date)
    {
        $this->dateFilter = $date;
        $this->setBuilder($this->builder());
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [

            Column::make(__('messages.visit.doctor'), 'doctor.doctorUser.first_name')
                ->view('appointments.components.doctor_name')
                ->sortable()
                ->searchable(
                    function (Builder $query, $direction) {
                        return $query->whereHas('doctor.doctorUser', function (Builder $q) use ($direction) {
                            $q->whereRaw("TRIM(CONCAT(first_name,' ',last_name,' ')) like '%{$direction}%'");
                        });
                    }
                ),
            Column::make(__('messages.visit.doctor'), 'doctor.doctorUser.email')
                ->hideIf('doctor.doctorUser.email')
                ->searchable(),
            Column::make(__('messages.appointment.patient'), 'patient.patientUser.first_name')
                ->view('appointments.components.patient_name')
                ->sortable()
                ->searchable(),
            Column::make(__('messages.appointment.patient'), 'patient.patientUser.last_name')
                ->hideIf('patient.patientUser.last_name')
                ->searchable(),
            Column::make(__('messages.appointment.patient'), 'patient.patientUser.email')
                ->hideIf('patient.patientUser.email')
                ->searchable(),
            Column::make(__('messages.appointment.appointment_at'),
                'date')->view('appointments.components.appointment_at')
                ->sortable()->searchable(),
            Column::make(__('messages.appointment.payment'), 'id')
                ->format(function ($value, $row) {
                    return view('appointments.components.payment')
                        ->with([
                            'row'     => $row,
                            'paid'    => Appointment::PAID,
                            'pending' => Appointment::PENDING,
                        ]);
                }),
            Column::make(__('messages.appointment.status'), 'id')
                ->format(function ($value, $row) {
                    return view('appointments.components.status')
                        ->with([
                            'row'      => $row,
                            'all'     => Appointment::ALL,
                            'book'     => Appointment::BOOKED,
                            'checkIn'  => Appointment::CHECK_IN,
                            'checkOut' => Appointment::CHECK_OUT,
                            'cancel'   => Appointment::CANCELLED,
                        ]);
                }),
            Column::make(__('messages.common.action'), 'id')->view('appointments.components.action'),
        ];
    }
}
