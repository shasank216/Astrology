<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;

class PatientAppointmentController extends AppBaseController
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $allPaymentStatus = getAllPaymentStatus();
        $paymentStatus = Arr::except($allPaymentStatus, [Appointment::MANUALLY]);
        $paymentGateway = getPaymentGateway();

        return view('patients.appointments.index', compact('paymentStatus', 'paymentGateway'));
    }
}
