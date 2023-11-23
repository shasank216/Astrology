<?php

namespace App\Repositories;

use App\Models\DoctorHoliday;

/**
 * Class CityRepository
 *
 * @version July 31, 2021, 7:41 am UTC
 */
class HolidayRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'doctor_id',
        'date',
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
        return DoctorHoliday::class;
    }

    /**
     * @param $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($input)
    {
        $doctor_holiday = DoctorHoliday::where('doctor_id', $input['doctor_id'])->where('date',
            $input['date'])->exists();

        if (! $doctor_holiday) {
            DoctorHoliday::create($input);

            return true;
        } else {
            return false;
        }
    }
}
