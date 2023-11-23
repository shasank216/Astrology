<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ServiceCategoryTable extends LivewireTableComponent
{

    protected $model = ServiceCategory::class;
    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'service_categories.components.add_button';
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
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('messages.common.name'), 'name')->view('service_categories.components.category_name')
                ->sortable()->searchable(),
            Column::make(__('messages.web.total_services'), 'id')->view('service_categories.components.service_count'),
            Column::make(__('messages.common.action'),'id')->view('service_categories.components.action'),
        ];
    }

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        return ServiceCategory::with('services')->withCount('services');
    }
}
