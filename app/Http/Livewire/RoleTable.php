<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class RoleTable extends LivewireTableComponent
{
    protected $model = Role::class;
    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'roles.components.add_button';
    protected $listeners = ['refresh' => '$refresh','resetPage'];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setDefaultSort('created_at', 'desc')
            ->setQueryStringStatus(false);
    }

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        return Role::with('permissions')->select('roles.*');
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('messages.common.name'), 'display_name')->view('roles.components.role')
                ->sortable()
                ->searchable(),
            Column::make(__('messages.role.permissions'), 'created_at')->view('roles.components.permission'),
            Column::make(__('messages.common.action'), 'id')->view('roles.components.action'),
        ];
    }
}
