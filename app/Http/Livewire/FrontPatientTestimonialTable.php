<?php

namespace App\Http\Livewire;

use App\Models\FrontPatientTestimonial;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class FrontPatientTestimonialTable extends LivewireTableComponent
{
    protected $model = FrontPatientTestimonial::class;
    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'fronts.front_patient_testimonials.components.add_button';
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
        return FrontPatientTestimonial::with('media');
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('messages.common.name'), 'name')->view('fronts.front_patient_testimonials.components.name')
                ->sortable()->searchable(),
            Column::make(__('messages.front_patient_testimonial.short_description'),
                'short_description')->view('fronts.front_patient_testimonials.components.short_description')
                ->sortable()->searchable(),
            Column::make(__('messages.common.action'),
                'id')->view('fronts.front_patient_testimonials.components.action'),
        ];
    }
}
