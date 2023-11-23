<?php

namespace App\Http\Livewire;

use App\Models\Visit;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class VisitTable extends LivewireTableComponent
{
    protected $model = Visit::class;
    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'visits.components.add_button';
    protected $listeners = ['refresh' => '$refresh', 'resetPage'];

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
        return Visit::with(['doctor.user', 'patient.user'])->select('visits.*');
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('messages.visit.doctor'), 'doctor.user.first_name')->view('visits.components.doctor')
                ->sortable()->searchable(
                    function (Builder $query, $direction) {
                        return $query->whereHas('doctor.user', function (Builder $q) use ($direction) {
                            $q->whereRaw("TRIM(CONCAT(first_name,' ',last_name,' ')) like '%{$direction}%'");
                        });
                    }
                ),
            Column::make(__('messages.visit.doctor'), 'doctor.doctorUser.email')
                ->hideIf('doctor.doctorUser.email')
                ->searchable(),
            Column::make(__('messages.visit.patient'), 'patient.patientUser.first_name')
                ->view('visits.components.patient')
                ->sortable()
                ->searchable(),
            Column::make(__('messages.visit.patient'), 'patient.patientUser.last_name')
                ->hideIf('patient.patientUser.last_name')
                ->searchable(),
            Column::make(__('messages.visit.patient'), 'patient.patientUser.email')
                ->hideIf('patient.patientUser.email')
                ->searchable(),
            Column::make(__('messages.visit.visit_date'), 'visit_date')->view('visits.components.visit_date')
                ->sortable(),
            Column::make(__('messages.common.action'), 'id')->view('visits.components.action'),
        ];
    }
}
