<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class DoctorPanelAppointmentTable extends LivewireTableComponent
{
    protected $model = Appointment::class;
    public bool $showFilterOnHeader = true;
    public array $FilterComponent = [
        'doctor_appointment.doctor_panel.components.filter', Appointment::PAYMENT_TYPE_ALL, Appointment::STATUS,
    ];
    protected $listeners = [
        'refresh' => '$refresh', 'changeStatusFilter', 'changePaymentTypeFilter', 'changeDateFilter', 'resetPage',
    ];

    public string $paymentTypeFilter = '';
    public string $paymentStatusFilter = '';
    public string $dateFilter = '';
    public int $statusFilter = Appointment::BOOKED;

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
        $query = Appointment::with(['patient.user', 'services', 'transaction'])->where('doctor_id',
            getLoginUser()->doctor->id)->select('appointments.*');

        $query->when($this->statusFilter != '' && $this->statusFilter != Appointment::ALL_STATUS,
            function (Builder $q) {
                if ($this->statusFilter != Appointment::ALL) {
                    $q->where('appointments.status', '=', $this->statusFilter);
                }
            });

        $query->when($this->paymentTypeFilter != '' && $this->paymentTypeFilter != Appointment::ALL_PAYMENT,
            function (Builder $q) {
                $q->where('appointments.payment_type', '=', $this->paymentTypeFilter);
            });

        if ($this->dateFilter != '' && $this->dateFilter != getWeekDate()) {
            $timeEntryDate = explode(' - ', $this->dateFilter);
            $startDate = Carbon::parse($timeEntryDate[0])->format('Y-m-d');
            $endDate = Carbon::parse($timeEntryDate[1])->format('Y-m-d');
            $query->whereBetween('appointments.date', [$startDate, $endDate]);
        } else {
            $timeEntryDate = explode(' - ', getWeekDate());
            $startDate = Carbon::parse($timeEntryDate[0])->format('Y-m-d');
            $endDate = Carbon::parse($timeEntryDate[1])->format('Y-m-d');
            $query->whereBetween('appointments.date', [$startDate, $endDate]);
        }

        return $query;
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
            Column::make(__('messages.appointment.patient'),
                'patient.user.first_name')->view('doctor_appointment.doctor_panel.components.patient')
                ->sortable()
                ->searchable(
                    function (Builder $query, $direction) {
                        return $query->whereHas('patient.user', function (Builder $q) use ($direction) {
                            $q->whereRaw("TRIM(CONCAT(first_name,' ',last_name,' ')) like '%{$direction}%'");
                        });
                    }
                ),
            Column::make(__('messages.patient.name'), 'patient.user.email')
                ->hideIf('patient.user.email')
                ->searchable(),
            Column::make(__('messages.appointment.appointment_at'),
                'date')->view('doctor_appointment.doctor_panel.components.appointment_at')
                ->sortable()->searchable(),
            Column::make(__('messages.appointment.service_charge'),
                'services.charges')->view('doctor_appointment.doctor_panel.components.service_charge')
                ->sortable()->searchable(),
            Column::make(__('messages.appointment.payment'), 'id')
                ->format(function ($value, $row) {
                    return view('doctor_appointment.doctor_panel.components.payment')
                        ->with([
                            'row'     => $row,
                            'paid'    => Appointment::PAID,
                            'pending' => Appointment::PENDING,
                        ]);
                }),
            Column::make(__('messages.appointment.status'), 'id')
                ->format(function ($value, $row) {
                    return view('doctor_appointment.doctor_panel.components.status')
                        ->with([
                            'row'      => $row,
                            'book'     => Appointment::BOOKED,
                            'checkIn'  => Appointment::CHECK_IN,
                            'checkOut' => Appointment::CHECK_OUT,
                            'cancel'   => Appointment::CANCELLED,
                        ]);
                }),
            Column::make(__('messages.common.action'), 'id')->view('doctor_appointment.doctor_panel.components.action'),
        ];
    }
}
