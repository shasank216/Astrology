<?php

namespace App\Repositories;

use App\Models\Faq;

/**
 * Class FaqRepository
 *
 * @version September 21, 2021, 12:51 pm UTC
 */
class FaqRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [

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
        return Faq::class;
    }
}
