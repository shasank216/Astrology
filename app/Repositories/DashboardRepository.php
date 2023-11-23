<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class CityRepository
 *
 * @version July 31, 2021, 7:41 am UTC
 */
class DashboardRepository
{
    //admin
    /**
     * @return array
     */
    public function getData()
    {
        $data['patients'] = Patient::with(['user', 'appointments'])
            ->withCount('appointments')
            ->whereRaw('Date(created_at) = CURDATE()')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        $data['totalDoctorCount'] = User::toBase()->whereType(User::DOCTOR)->where('status', User::ACTIVE)->count();
        $data['totalPatientCount'] = User::toBase()->whereType(User::PATIENT)->count();
        $data['todayAppointmentCount'] = Appointment::toBase()->where('date', Carbon::now()->format('Y-m-d'))->whereStatus(Appointment::BOOKED)->count();
        $data['totalRegisteredPatientCount'] = User::toBase()->whereType(User::PATIENT)->whereRaw('Date(created_at) = CURDATE()')->count();
        $data['servicesArr'] = Service::toBase()->whereStatus(true)->pluck('name', 'id')->toArray();
        $data['serviceCategoriesArr'] = ServiceCategory::toBase()->pluck('name', 'id')->toArray();
        $data['doctorArr'] = Doctor::with('user')->get()->pluck('user.full_name', 'id')->toArray();

        return $data;
    }

    //Doctor
    /**
     * @return mixed
     */
    public function getDoctorData()
    {
        $doctorId = getLogInUser()->doctor->id;
        $todayDate = Carbon::now()->format('Y-m-d');
        $appointments['records'] = Appointment::with(['patient.user'])
            ->where('doctor_id', $doctorId)
            ->whereStatus(Appointment::BOOKED)
            ->whereDate('date', Carbon::today())
            ->orderBy('date', 'ASC')
            ->paginate(5);
        $appointments['totalAppointmentCount'] = Appointment::whereDoctorId($doctorId)->whereNotIn('status',
            [Appointment::CANCELLED])->count();
        $appointments['todayAppointmentCount'] = Appointment::whereDoctorId($doctorId)->where('date', '=',
            $todayDate)->whereNotIn('status', [Appointment::CANCELLED])->count();
        $appointments['upcomingAppointmentCount'] = Appointment::whereDoctorId($doctorId)->where('date', '>',
            $todayDate)->whereStatus(Appointment::BOOKED)->count();

        return $appointments;
    }

    //admin
    /**
     * @param $input
     * @return array
     */
    public function patientData($input)
    {
        if (isset($input['day'])) {
            $data = Patient::with(['user', 'appointments'])
                ->withCount('appointments')
                ->whereRaw('Date(created_at) = CURDATE()')
                ->orderBy('created_at', 'DESC')
                ->paginate(5);

            return $data;
        }

        if (isset($input['week'])) {
            $now = Carbon::now();
            $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
            $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');
            $data = Patient::with(['user', 'appointments'])
                ->withCount('appointments')
                ->whereBetween('created_at', [$weekStartDate, $weekEndDate])
                ->orderBy('created_at', 'DESC')
                ->paginate(5);

            return $data;
        }

        if (isset($input['month'])) {
            $data = Patient::with(['user', 'appointments'])
                ->withCount('appointments')
                ->whereMonth('created_at', Carbon::now()->month)
                ->orderBy('created_at', 'DESC')
                ->paginate(5);

            return $data;
        }
    }

    //doctor
    /**
     * @param $input
     * @return mixed
     */
    public function doctorAppointment($input)
    {
        $doctorId = getLogInUser()->doctor->id;

        if (isset($input['day'])) {
            $data = Appointment::with(['patient.user', 'user', 'services'])
                ->where('doctor_id', $doctorId)
                ->whereStatus(Appointment::BOOKED)
                ->whereDate('date', Carbon::today())
                ->orderBy('date', 'ASC')
                ->paginate(10);

            return $data;
        }

        if (isset($input['week'])) {
            $now = Carbon::now();
            $weekStartDate = $now->startOfWeek()->format('Y-m-d');
            $weekEndDate = $now->endOfWeek()->format('Y-m-d');
            $data = Appointment::with(['patient.user', 'user', 'services'])
                ->where('doctor_id', $doctorId)
                ->whereStatus(Appointment::BOOKED)
                ->whereBetween('date', [$weekStartDate, $weekEndDate])
                ->orderBy('date', 'ASC')
                ->paginate(10);

            return $data;
        }

        if (isset($input['month'])) {
            $data = Appointment::with(['patient.user', 'user', 'services'])
                ->where('doctor_id', $doctorId)
                ->whereStatus(Appointment::BOOKED)
                ->whereMonth('date', Carbon::now()->month)
                ->orderBy('date', 'ASC')
                ->paginate(10);

            return $data;
        }
    }

    /**
     * @return array
     */
    public function getPatientData()
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $patientId = getLogInUser()->patient->id;

        $todayCompleted = Appointment::wherePatientId($patientId)->where('date', '=',
            $todayDate)->whereStatus(Appointment::CHECK_OUT)->count();
        $data['todayAppointmentCount'] = Appointment::wherePatientId($patientId)->where('date', '=',
            $todayDate)->count();
        $data['upcomingAppointmentCount'] = Appointment::wherePatientId($patientId)->where('date', '>',
            $todayDate)->whereNotIn('status', [Appointment::CANCELLED])->count();
        $data['pastCompletedAppointmentCount'] = Appointment::wherePatientId($patientId)->where('date', '<',
            $todayDate)->count();
        $data['completedAppointmentCount'] = $data['pastCompletedAppointmentCount'] + $todayCompleted;
        $data['todayAppointment'] = Appointment::with(['patient.user', 'doctor.user', 'services'])
            ->wherePatientId($patientId)
            ->whereStatus(Appointment::BOOKED)
            ->where('date', '=', $todayDate)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        $data['upcomingAppointment'] = Appointment::with(['patient.user', 'doctor.user', 'services'])
            ->wherePatientId($patientId)
            ->whereStatus(Appointment::BOOKED)
            ->where('date', '>', $todayDate)
            ->orderBy('date', 'ASC')
            ->paginate(10);

        return $data;
    }

    /**
     * @param $input
     * @return array
     */
    public function getAppointmentChartData($input): array
    {
        $appointments = Appointment::with('services')->whereYear('created_at', Carbon::now()->year)
            ->select(DB::raw('MONTH(created_at) as month,appointments.*'))->get();
        $months = [
            1 => __('messages.months.jan'),
            2 => __('messages.months.feb'),
            3 => __('messages.months.mar'),
            4 => __('messages.months.apr'),
            5 => __('messages.months.may'),
            6 => __('messages.months.jun'),
            7 => __('messages.months.jul'),
            8 => __('messages.months.aug'),
            9 => __('messages.months.sep'),
            10 => __('messages.months.oct'),
            11 => __('messages.months.nov'),
            12 => __('messages.months.dec'),
        ];

        $monthWiseRecords = [];

        $serviceId = ! empty($input['serviceId']) ? $input['serviceId'] : '';
        $doctorId = ! empty($input['dashboardDoctorId']) ? $input['dashboardDoctorId'] : '';
        $serviceCategoryId = ! empty($input['serviceCategoryId']) ? $input['serviceCategoryId'] : '';

        foreach ($months as $month => $monthName) {
            $monthWiseRecords[$monthName] = $appointments->where('month', $month)
                ->where('status', Appointment::CHECK_OUT)
                ->when($serviceId, function ($query, $serviceId) {
                    return $query->where('service_id', $serviceId);
                })
                ->when($doctorId, function ($query, $doctorId) {
                    return $query->where('doctor_id', $doctorId);
                })
                ->when($serviceCategoryId, function ($query, $serviceCategoryId) {
                    return $query->where('services.category_id', $serviceCategoryId);
                })
                ->sum('payable_amount');
        }

        return $monthWiseRecords;
    }
}
