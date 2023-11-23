<?php

namespace App\Http\Livewire;

use App\Models\State;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class StateTable extends LivewireTableComponent
{
    protected $model = State::class;
    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'states.components.add_button';
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
            Column::make(__('messages.common.name'), 'name')->view('states.components.name')
                ->sortable()
                ->searchable(),
            Column::make(__('messages.state.country'), 'country_id')->view('states.components.country')
                ->sortable()
                ->searchable(),
            Column::make(__('messages.common.action'), 'id')->view('states.components.action'),
        ];
    }

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        return State::with('country')->select('states.*');
    }
}
