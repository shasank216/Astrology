<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TransactionTable extends LivewireTableComponent
{
    protected $model = Transaction::class;
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
            if ($column->isField('amount')) {
                return [
                    'class' => 'text-end',
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
        return Transaction::with(['user.patient'])->select('transactions.*');
    }

    public function columns(): array
    {
        return [
            Column::make(__('messages.appointment.patient'), 'user.first_name')->view('transactions.components.patient')
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
            Column::make(__('messages.appointment.date'), 'created_at')->view('transactions.components.date')
                ->sortable(),
            Column::make(__('messages.appointment.payment_method'), 'type')->view('transactions.components.payment_method'),
            Column::make(__('messages.doctor_appointment.amount'), 'amount')->view('transactions.components.amount')
                ->sortable()->searchable(),
            Column::make(__('messages.common.action'), 'id')->view('transactions.components.action'),
        ];
    }
}
