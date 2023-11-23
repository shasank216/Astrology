<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CountriesTable extends LivewireTableComponent
{
    protected $model = Country::class;
    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'countries.components.add_button';
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
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('messages.common.name'), 'name')->view('countries.components.name')
                ->searchable()
                ->sortable(),
            Column::make(__('messages.country.short_code'), 'short_code')->view('countries.components.short_code')
                ->sortable()
                ->searchable(),
            Column::make(__('messages.common.action'), 'id')->view('countries.components.action'),
        ];
    }

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        return Country::query();
    }
}
