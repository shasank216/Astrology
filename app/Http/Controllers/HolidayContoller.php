<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHolidayRequest;
use App\Models\Doctor;
use App\Models\DoctorHoliday;
use App\Models\User;
use App\Repositories\HolidayRepository;
use Flash;
use Illuminate\Http\Request;

class HolidayContoller extends AppBaseController
{
    /** @var HolidayRepository */
    private $holidayRepository;

    public function __construct(HolidayRepository $holidayRepo)
    {
        $this->holidayRepository = $holidayRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor_holiday.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = Doctor::with('user')->get()->where('user.status', User::ACTIVE)->pluck('user.full_name',
            'id');

        return view('doctor_holiday.create', compact('doctor'));
    }

    /**
     * @param  CreateHolidayRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector.
     */
    public function store(CreateHolidayRequest $request)
    {
        $input = $request->all();
        $holiday = $this->holidayRepository->store($input);

        if ($holiday) {
            Flash::success(__('messages.flash.doctor_holiday'));

            return redirect(route('holidays.index'));
        } else {
            Flash::error(__('messages.flash.holiday_already_is_exist'));

            return redirect(route('holidays.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkRecord = DoctorHoliday::destroy($id);

        return $this->sendSuccess(__('messages.flash.city_delete'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function holiday()
    {
        return view('holiday.index');
    }

    public function doctorCreate()
    {
        $doctor = Doctor::whereUserId(getLogInUserId())->first('id');
        $doctorId = $doctor['id'];

        return view('holiday.create', compact('doctorId'));
    }

    /**
     * @param  CreateHolidayRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector.
     */
    public function doctorStore(CreateHolidayRequest $request)
    {
        $input = $request->all();
        $holiday = $this->holidayRepository->store($input);

        if ($holiday) {
            Flash::success(__('messages.flash.doctor_holiday'));

            return redirect(route('doctors.holiday'));
        } else {
            Flash::error(__('messages.flash.holiday_already_is_exist'));

            return redirect(route('doctors.holiday-create'));
        }
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function doctorDestroy($id): mixed
    {
        $doctorHoliday = DoctorHoliday::whereId($id)->firstOrFail();
        if($doctorHoliday->doctor_id !== getLogInUser()->doctor->id){
            return $this->sendError('Seems, you are not allowed to access this record.');
        }
        $doctorHoliday->destroy($id);

        return $this->sendSuccess(__('messages.flash.city_delete'));
    }
}
