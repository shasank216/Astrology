<?php

namespace App\Http\Controllers;

use App\DataTable\UserDataTable;
use App\Http\Requests\CreateQualificationRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateChangePasswordRequest;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\DoctorSession;
use App\Models\Specialization;
use App\Models\User;
use App\Models\Visit;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use DB;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laracasts\Flash\Flash;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Yajra\DataTables\DataTables;

class UserController extends AppBaseController
{
    /**
     * @var UserRepository
     */
    public $userRepo;

    /**
     * UserController constructor.
     *
     * @param  UserRepository  $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return Application|Factory|View
     *
     * @throws Exception
     */
    public function index(Request $request)
    {
        $years = [];
        $currentYear = Carbon::now()->format('Y');
        for ($year = 1960; $year <= $currentYear; $year++) {
            $years[$year] = $year;
        }

        $status = User::STATUS;

        return view('doctors.index', compact('years', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $specializations = Specialization::pluck('name', 'id')->toArray();
        $country = $this->userRepo->getCountries();
        $bloodGroup = Doctor::BLOOD_GROUP_ARRAY;

        return view('doctors.create', compact('specializations', 'country', 'bloodGroup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateUserRequest  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        $this->userRepo->store($input);

        Flash::success(__('messages.flash.doctor_create'));

        return redirect(route('doctors.index'));
    }

    /**
     * @param  Doctor  $doctor
     * @return Application|Factory|View|RedirectResponse
     *
     * @throws Exception
     */
    public function show(Doctor $doctor)
    {
        if (getLogInUser()->hasRole('patient')) {
            $doctorAppointment = Appointment::whereDoctorId($doctor->id)->wherePatientId(getLogInUser()->patient->id);
            if (! $doctorAppointment->exists()) {
                return redirect()->back();
            }
        }

        $doctorDetailData = $this->userRepo->doctorDetail($doctor);

        return view('doctors.show', compact('doctor', 'doctorDetailData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Doctor  $doctor
     * @return Application|Factory|View
     */
    public function edit(Doctor $doctor)
    {
        $user = $doctor->user()->first();
        $qualifications = $user->qualifications()->get();
        $data = $this->userRepo->getSpecializationsData($doctor);
        $bloodGroup = Doctor::BLOOD_GROUP_ARRAY;
        $countries = $this->userRepo->getCountries();
        $state = $cities = null;
        $years = [];
        $currentYear = Carbon::now()->format('Y');
        for ($year = 1960; $year <= $currentYear; $year++) {
            $years[$year] = $year;
        }
        if (isset($countryId)) {
            $state = getStates($data['countryId']->toArray());
        }
        if (isset($stateId)) {
            $cities = getCities($data['stateId']->toArray());
        }

        return view('doctors.edit',
            compact('user', 'qualifications', 'data', 'doctor', 'countries', 'state', 'cities', 'years', 'bloodGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequest  $request
     * @param  Doctor  $doctor
     * @return JsonResponse
     */
    public function update(UpdateUserRequest $request, Doctor $doctor)
    {
        $input = $request->all();
        $this->userRepo->update($input, $doctor);

        Flash::success(__('messages.flash.doctor_update'));

        return $this->sendSuccess(__('messages.flash.doctor_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Doctor  $doctor
     * @return JsonResponse
     */
    public function destroy(Doctor $doctor)
    {
        $existAppointment = Appointment::whereDoctorId($doctor->id)->exists();
        $existVisit = Visit::whereDoctorId($doctor->id)->exists();

        if ($existAppointment || $existVisit) {
            return $this->sendError(__('messages.flash.doctor_use'));
        }

        try {
            DB::beginTransaction();
            $doctor->user->delete();
            $doctor->user->media()->delete();
            $doctor->user->address()->delete();
            $doctor->user->doctor()->delete();
            DB::commit();

            return $this->sendSuccess(__('messages.flash.doctor_delete'));
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    /**
     * @return Application|Factory|View
     */
    public function editProfile()
    {
        $user = Auth::user();

        return view('profile.index', compact('user'));
    }

    /**
     * @param  UpdateUserProfileRequest  $request
     * @return Application
     */
    public function updateProfile(UpdateUserProfileRequest $request)
    {
        $this->userRepo->updateProfile($request->all());
        Flash::success(__('messages.flash.user_profile_update'));

        return redirect(route('profile.setting'));
    }

    /**
     * @param  UpdateChangePasswordRequest  $request
     * @return JsonResponse
     */
    public function changePassword(UpdateChangePasswordRequest $request)
    {
        $input = $request->all();

        try {
            /** @var User $user */
            $user = Auth::user();
            if (! Hash::check($input['current_password'], $user->password)) {
                return $this->sendError(__('messages.flash.current_invalid'));
            }
            $input['password'] = Hash::make($input['new_password']);
            $user->update($input);

            return $this->sendSuccess(__('messages.flash.password_update'));
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function getStates(Request $request)
    {
        $countryId = $request->data;
        $states = getStates($countryId);

        return $this->sendResponse($states, __('messages.flash.retrieve'));
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function getCity(Request $request)
    {
        $state = $request->state;
        $cities = getCities($state);

        return $this->sendResponse($cities, __('messages.flash.retrieve'));
    }

    /**
     * @param  Request  $request
     * @return mixed
     */
    public function sessionData(Request $request)
    {
        $doctorSession = DoctorSession::whereDoctorId($request->doctorId)->first();

        return $this->sendResponse($doctorSession, __('messages.flash.session_retrieve'));
    }

    /**
     * @param  CreateQualificationRequest  $request
     * @param  Doctor  $doctor
     * @return mixed
     */
    public function addQualification(CreateQualificationRequest $request, Doctor $doctor)
    {
        $this->userRepo->addQualification($request->all());

        return $this->sendSuccess(__('messages.flash.qualification_create'));
    }

    /**
     * @param  Doctor  $doctor
     * @param  Request  $request
     * @return Application|RedirectResponse|Redirector
     *
     * @throws Exception
     */
    public function doctorAppointment(Doctor $doctor, Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of((new UserDataTable())->getAppointment($request->only([
                'status', 'doctorId', 'filter_date',
            ])))->make(true);
        }

        return redirect(route('doctors.index'));
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function changeDoctorStatus(Request $request)
    {
        $doctor = User::findOrFail($request->id);
        $doctor->update(['status' => ! $doctor->status]);

        return $this->sendResponse($doctor, __('messages.flash.status_update'));
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function updateLanguage(Request $request): JsonResponse
    {
        $language = $request->get('language');

        $user = getLogInUser();
        $user->update(['language' => $language]);

        return $this->sendSuccess(__('messages.flash.language_update'));
    }

    /**
     * @param  int  $id
     *  @return RedirectResponse
     */
    public function impersonate($id)
    {
        $user = User::findOrFail($id);
        getLogInUser()->impersonate($user);
        if ($user->hasRole('doctor')) {
            return redirect()->route('doctors.dashboard');
        } elseif ($user->hasRole('patient')) {
            return redirect()->route('patients.dashboard');
        }

        return redirect()->route('admin.dashboard');
    }

    /**
     * @return RedirectResponse
     */
    public function impersonateLeave()
    {
        getLogInUser()->leaveImpersonation();

        return redirect()->route('admin.dashboard');
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function emailVerified(Request $request)
    {
        $user = User::findOrFail($request->id);
        if ($request->value) {
            $user->update([
                'email_verified_at' => Carbon::now(),
            ]);
        } else {
            $user->update([
                'email_verified_at' => null,
            ]);
        }

        return $this->sendResponse($user, __('messages.flash.verified_email'));
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function emailNotification(Request $request)
    {
        $input = $request->all();
        $user = getLogInUser();
        $user->update([
            'email_notification' => isset($input['email_notification']) ? $input['email_notification'] : 0,
        ]);

        return $this->sendResponse($user, __('messages.flash.email_notification'));
    }

    /**
     * @param $userId
     * @return JsonResponse
     */
    public function resendEmailVerification($userId)
    {
        $user = User::findOrFail($userId);
        if ($user->hasVerifiedEmail()) {
            return $this->sendError(__('messages.flash.user_already_verified'));
        }

        $user->sendEmailVerificationNotification();

        return $this->sendSuccess(__('messages.flash.notification_send'));
    }

    /**
     * @return JsonResponse
     */
    public function updateDarkMode(): JsonResponse
    {
        $user = Auth::user();
        $darkEnabled = $user->dark_mode == true;
        $user->update([
            'dark_mode' => ! $darkEnabled,
        ]);

        return $this->sendSuccess(__('messages.flash.theme_change'));
    }
}
