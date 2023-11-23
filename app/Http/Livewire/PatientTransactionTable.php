<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PatientTransactionTable extends LivewireTableComponent
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
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('messages.appointment.date'), 'created_at')->view('transactions.patient_panel.components.date')
                ->sortable()->searchable(),
            Column::make(__('messages.appointment.payment_method'), 'type')->view('transactions.patient_panel.components.payment_method')
                ->sortable(),
            Column::make(__('messages.doctor_appointment.amount'), 'amount')->view('transactions.patient_panel.components.amount')
                ->sortable()->searchable(),
            Column::make(__('messages.common.action'),'id')->view('transactions.patient_panel.components.action'),
        ];
    }

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        return Transaction::where('user_id', '=', getLogInUserId())->select('transactions.*');
    }
}
