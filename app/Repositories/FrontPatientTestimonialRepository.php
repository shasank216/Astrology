<?php

namespace App\Repositories;

use App\Models\FrontPatientTestimonial;
use Exception;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

/**
 * Class FrontPatientTestimonialRepository
 *
 * @version September 22, 2021, 11:20 am UTC
 */
class FrontPatientTestimonialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'designation',
        'short_description',
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
        return FrontPatientTestimonial::class;
    }

    /**
     * @param $input
     * @return bool
     */
    public function store($input)
    {
        try {
            DB::beginTransaction();

            $slider = FrontPatientTestimonial::create($input);

            if (isset($input['profile']) && ! empty($input['profile'])) {
                $slider->addMedia($input['profile'])->toMediaCollection(FrontPatientTestimonial::FRONT_PATIENT_PROFILE,
                    config('app.media_disc'));
            }

            DB::commit();

            return true;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    /**
     * @param  array  $input
     * @param  int  $id
     * @return bool
     */
    public function update($input, $id)
    {
        try {
            DB::beginTransaction();

            $slider = FrontPatientTestimonial::findOrFail($id);
            $slider->update($input);

            if (isset($input['profile']) && ! empty($input['profile'])) {
                $slider->clearMediaCollection(FrontPatientTestimonial::FRONT_PATIENT_PROFILE);
                $slider->media()->delete();
                $slider->addMedia($input['profile'])->toMediaCollection(FrontPatientTestimonial::FRONT_PATIENT_PROFILE,
                    config('app.media_disc'));
            }

            DB::commit();

            return true;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }
}
