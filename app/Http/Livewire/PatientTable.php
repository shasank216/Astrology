<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PatientTable extends LivewireTableComponent
{
    protected $model = Patient::class;
    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'patients.components.add_button';
    protected $listeners = ['refresh' => '$refresh','resetPage'];

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
        return Patient::with(['user', 'appointments'])->withCount('appointments');
    }

    public function columns(): array
    {
        return [
            Column::make(__('messages.patient.name'), 'user.first_name')->view('patients.components.name')
                ->sortable()
                ->searchable(
                    function (Builder $query, $direction) {
                        return $query->whereHas('user', function (Builder $q) use ($direction) {
                            $q->whereRaw("TRIM(CONCAT(first_name,' ',last_name,' ')) like '%{$direction}%'");
                        });
                    }
                ),
            Column::make(__('messages.patient.name'), 'user.email')
                ->hideIf('user.email')
                ->searchable(),
            Column::make(__('messages.doctor_dashboard.total_appointments'), 'id')
                ->view('patients.components.total_appointments'),
            Column::make(__('messages.common.email_verified'), 'user.id')->view('patients.components.email_verified'),
            Column::make(__('messages.common.impersonate'),'user.first_name')->view('patients.components.impersonate'),
            Column::make(__('messages.patient.registered_on'), 'created_at')->view('patients.components.registered_on')
                ->sortable(),
            Column::make(__('messages.common.action'), 'user.id')->view('patients.components.action'),
        ];
    }
}
