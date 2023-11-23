<?php

namespace App\Repositories;

use App\Models\Transaction;

/**
 * Class RoleRepository
 *
 * @version August 5, 2021, 10:43 am UTC
 */
class TransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Transaction::class;
    }

    /**
     * @param $id
     * @return array
     */
    public function show($id)
    {
        $transaction['data'] = Transaction::with('user', 'appointment.doctor.user',
            'acceptedPaymentUser')->whereId($id)->first();

        return $transaction;
    }
}
