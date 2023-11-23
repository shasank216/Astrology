<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthorizePaymentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClinicScheduleController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorSessionController;
use App\Http\Controllers\Front\CMSController;
use App\Http\Controllers\Front\EnquiryController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\FrontPatientTestimonialController;
use App\Http\Controllers\Front\SliderController;
use App\Http\Controllers\Front\SubscribeController;
use App\Http\Controllers\GoogleCalendarController;
use App\Http\Controllers\HolidayContoller;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\PayTMController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Front\HoroscopeController;
// use App\Http\Controllers\Front\ApiController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('google-auth', [GoogleCalendarController::class, 'oauth'])->name('googleAuth');
Route::get('sync-google-calendar-list',
    [GoogleCalendarController::class, 'syncGoogleCalendarList'])->name('syncGoogleCalendarList');
Route::get('google/redirect', [GoogleCalendarController::class, 'redirect']);
Route::post('create-google-calendar-patient',
    [AppointmentController::class, 'createGoogleEventForPatient'])->name('createGoogleEventForPatient');
Route::post('create-google-calendar-doctor',
    [AppointmentController::class, 'createGoogleEventForDoctor'])->name('createGoogleEventForDoctor');

Route::get('/login', function () {
    return (! Auth::check()) ? view('auth.login') : Redirect::to(getDashboardURL());
})->name('login');

Route::get('/blogs', function() {
    return view('fronts.blogs');
});

Route::get('/blog_details', function()
{
    return view('fronts.blog_details');
});

Route::get('/horoscope_details', function() {
    return view('fronts.horoscope_details');
});

Route::middleware('setLanguage')->group(function () {
    Route::get('/', [FrontController::class, 'medical'])->name('medical');
    Route::get('/medical-about-us', [FrontController::class, 'medicalAboutUs'])->name('medicalAboutUs');
    Route::get('/medical-services', [FrontController::class, 'medicalServices'])->name('medicalServices');
    Route::get('/medical-appointment', [FrontController::class, 'medicalAppointment'])->name('medicalAppointment');
    Route::get('/medical-doctors', [FrontController::class, 'medicalDoctors'])->name('medicalDoctors');
    Route::get('/medical-contact', [FrontController::class, 'medicalContact'])->name('medicalContact');
    Route::get('/terms-conditions', [FrontController::class, 'termsCondition'])->name('terms.conditions');
    Route::get('/privacy-policy', [FrontController::class, 'privacyPolicy'])->name('privacy.policy');
    Route::get('/faqs', [FrontController::class, 'faq'])->name('front.faqs');
});
//Change language
Route::post('/change-language', [FrontController::class, 'changeLanguage'])->name('front.change.language');

//Dark Mode
Route::get('update-dark-mode', [UserController::class, 'updateDarkMode'])->name('update-dark-mode');

//Stripe route
Route::get('/medical-payment-success',
    [AppointmentController::class, 'paymentSuccess'])->name('medical-appointment-payment-success');
Route::get('/medical-payment-failed',
    [AppointmentController::class, 'handleFailedPayment'])->name('medical-appointment-failed-payment');

// Manually payment route
Route::get('/manually-payment', [AppointmentController::class, 'manuallyPayment'])->name('manually-payment');
Route::put('transaction-status', [TransactionController::class, 'changeTransactionStatus'])->name('transaction.status');

//Paystack Route
Route::get('paystack-onboard', [PaystackController::class, 'redirectToGateway'])->name('paystack.init');
Route::get('paystack-payment-success',
    [PaystackController::class, 'handleGatewayCallback'])->name('paystack.success');

// paypal routes
Route::get('/paypal-payment', function () {
    return view('payments.paypal.index');
})->name('paypal.index');

//RazorPay Route
Route::post('razorpay-onboard', [RazorpayController::class, 'onBoard'])->name('razorpay.init');
Route::post('razorpay-payment-success', [RazorpayController::class, 'paymentSuccess'])
    ->name('razorpay.success');
Route::post('razorpay-payment-failed', [RazorpayController::class, 'paymentFailed'])
    ->name('razorpay.failed');
Route::get('razorpay-payment-webhook', [RazorpayController::class, 'paymentSuccessWebHook'])
    ->name('razorpay.webhook');

Route::get('paypal-onboard', [PaypalController::class, 'onBoard'])->name('paypal.init');
Route::get('paypal-payment-success', [PaypalController::class, 'success'])->name('paypal.success');
Route::get('paypal-payment-failed', [PaypalController::class, 'failed'])->name('paypal.failed');

// Authorize Route
Route::get('authorize-onboard', [AuthorizePaymentController::class, 'onboard'])->name('authorize.init');
Route::post('authorize-do-payment', [AuthorizePaymentController::class, 'pay'])->name('authorize.onboard');
Route::get('authorize-payment-failed', [AuthorizePaymentController::class, 'failed'])->name('authorize.failed');

//Paytm Route
Route::get('/paytm-init', [PayTMController::class, 'initiate'])->name('paytm.init');
Route::post('/paytm-payment', [PayTMController::class, 'payment'])->name('make.payment');
Route::post('/paytm-callback', [PayTMController::class, 'paymentCallback'])->name('paytm.callback');
Route::get('paytm-payment-cancel', [PayTMController::class, 'failed'])->name('paytm.failed');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::post('/enquiries', [EnquiryController::class, 'store'])->name('enquiries.store');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');

Route::get('doctor-session-time', [DoctorSessionController::class, 'getDoctorSession'])->name('doctor-session-time');
Route::get('get-service', [ServiceController::class, 'getService'])->name('get-service');
Route::get('get-charge', [ServiceController::class, 'getCharge'])->name('get-charge');
Route::post('front-appointment-book',
    [AppointmentController::class, 'frontAppointmentBook'])->name('front.appointment.book');
Route::post('medical-appointment',
    [AppointmentController::class, 'frontHomeAppointmentBook'])->name('front.home.appointment.book');
Route::get('get-patient-name', [AppointmentController::class, 'getPatientName'])->name('get-patient-name');
//change Language
Route::post('update-language', [UserController::class, 'updateLanguage'])->name('change-language');

Route::get('doctor-appointment/{doctor}', [AppointmentController::class, 'doctorBookAppointment'])->name('doctorBookAppointment');
Route::get('service-appointment/{service}', [AppointmentController::class, 'serviceBookAppointment'])->name('serviceBookAppointment');

Route::post('/notification/{notification}/read',
    [NotificationController::class, 'readNotification'])->name('notifications.read');
Route::post('/read-all-notification',
    [NotificationController::class, 'readAllNotification'])->name('notifications.read.all');

Route::middleware('auth', 'xss', 'checkUserStatus')->group(function () {
    // Update profile
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.setting');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('update.profile.setting');
    Route::put('/change-user-password', [UserController::class, 'changePassword'])->name('user.changePassword');
    Route::put('/email-notification', [UserController::class, 'emailNotification'])->name('emailNotification');
});

Route::get('cancel-appointment/{patient_id}/{appointment_unique_id}', [AppointmentController::class, 'cancelAppointment'])->name('cancelAppointment');

Route::prefix('admin')->middleware('auth', 'xss', 'checkUserStatus', 'checkImpersonateUser', 'permission:manage_admin_dashboard')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::prefix('admin')->middleware('auth', 'xss', 'checkUserStatus', 'checkImpersonateUser')->group(function () {
    //Impersonate
//    Route::impersonate();
    Route::get('impersonate/{id}', [UserController::class, 'impersonate'])->name('impersonate');
    Route::get('impersonate-leave', [UserController::class, 'impersonateLeave'])->name('impersonate.leave');

    //Email verified
    Route::post('email-verified', [UserController::class, 'emailVerified'])->name('emailVerified');

    //admin dashboard route
    Route::get('/dashboard-patients', [DashboardController::class, 'getPatientList'])->name('patientData.dashboard');

    //get States and cities route
    Route::get('get-states', [UserController::class, 'getStates'])->name('get-state');
    Route::get('get-cities', [UserController::class, 'getCity'])->name('get-city');

    // Doctor route
    Route::middleware('permission:manage_doctors')->group(function () {
        Route::resource('doctors', UserController::class);
        Route::get('doctor/session', [UserController::class, 'sessionData'])->name('doctors.session');
        Route::get('doctors-appointment',
            [UserController::class, 'doctorAppointment'])->name('doctors.appointment');
        Route::post('/add-qualification', [UserController::class, 'addQualification'])->name('add.qualification');
        Route::put('doctor-status', [UserController::class, 'changeDoctorStatus'])->name('doctor.status');
    });

    // Countries routes
    Route::middleware('permission:manage_countries')->group(function () {
        Route::resource('countries', CountryController::class);
        Route::post('countries/{country}', [CountryController::class, 'update']);
    });

    // States routes
    Route::middleware('permission:manage_states')->group(function () {
        Route::resource('states', StateController::class);
        Route::post('states/{state}', [StateController::class, 'update']);
    });

    // Cities Routes
    Route::middleware('permission:manage_cities')->group(function () {
        Route::resource('cities', CityController::class);
    });

    // Role route
    Route::middleware('permission:manage_roles')->group(function () {
        Route::resource('roles', RoleController::class);
    });

    // Settings routes
    Route::middleware('permission:manage_settings')->group(function () {
        Route::get('/settings', [SettingController::class, 'index'])->name('setting.index');
        Route::post('/settings', [SettingController::class, 'update'])->name('setting.update');
        Route::get('states-list', [SettingController::class, 'getStates'])->name('states-list');
        Route::get('cities-list', [SettingController::class, 'getCities'])->name('cities-list');
        Route::resource('clinic-schedules', ClinicScheduleController::class);
        Route::resource('holidays', HolidayContoller::class);
        Route::post('checkRecord', [ClinicScheduleController::class, 'checkRecord'])->name('checkRecord');
    });

    // Patient Routes
    Route::middleware('permission:manage_patients')->group(function () {
        Route::resource('patients', PatientController::class);
        Route::get('patient-appointments',
            [PatientController::class, 'patientAppointment'])->name('patients.appointment');
    });

    // Doctor Schedule Routes
    Route::middleware('permission:manage_doctor_sessions')->group(function () {
        Route::resource('doctor-sessions', DoctorSessionController::class);
        Route::get('/get-slot-by-gap', [DoctorSessionController::class, 'getSlotByGap'])->name('get.slot.by.gap');
    });

    // Specialization routes
    Route::middleware('permission:manage_specialities')->group(function () {
        Route::resource('specializations', SpecializationController::class);
    });

    // Services and Service Category route
    Route::middleware('permission:manage_services')->group(function () {
        Route::resource('services', ServiceController::class);
        Route::put('service-status', [ServiceController::class, 'changeServiceStatus'])->name('service.status');
        Route::resource('service-categories', ServiceCategoryController::class);
    });

    // Staff route
    Route::middleware('permission:manage_staff')->group(function () {
        Route::resource('staffs', StaffController::class);
    });

    // Appointment route
    Route::middleware('permission:manage_appointments')->group(function () {
        Route::resource('appointments', AppointmentController::class)->except(['edit', 'update']);
        Route::post('appointments/{appointment}',
            [AppointmentController::class, 'changeStatus'])->name('change-status');
        Route::post('appointments-payment/{id}',
            [AppointmentController::class, 'changePaymentStatus'])->name('change-payment-status');
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions');
        Route::get('transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');
    });
    Route::get('admin-appointments-calendar',
        [AppointmentController::class, 'appointmentCalendar'])->name('appointments.calendar');

    // Currency route
    Route::middleware('permission:manage_currencies')->group(function () {
        Route::resource('currencies', CurrencyController::class);
    });

    //Encounter route
    Route::middleware('permission:manage_patient_visits')->group(function () {
        Route::resource('visits', VisitController::class);
        Route::post('add-problem', [VisitController::class, 'addProblem'])->name('add.problem');
        Route::post('delete-problem/{problem}',
            [VisitController::class, 'deleteProblem'])->name('delete.problem');
        Route::post('add-observation', [VisitController::class, 'addObservation'])->name('add.observation');
        Route::post('delete-observation/{observation}',
            [VisitController::class, 'deleteObservation'])->name('delete.observation');
        Route::post('add-note', [VisitController::class, 'addNote'])->name('add.note');
        Route::post('delete-note/{note}', [VisitController::class, 'deleteNote'])->name('delete.note');
        Route::post('add-prescription', [VisitController::class, 'addPrescription'])->name('add.prescription');
        Route::post('delete-prescription/{prescription}',
            [VisitController::class, 'deletePrescription'])->name('delete.prescription');
        Route::get('edit-prescription/{prescription}',
            [VisitController::class, 'editPrescription'])->name('edit.prescription');
    });

    // Slider route
    Route::middleware('permission:manage_front_cms')->group(function () {
        Route::get('cms', [CMSController::class, 'index'])->name('cms.index');
        Route::post('cms', [CMSController::class, 'update'])->name('cms.update');
        Route::resource('sliders', SliderController::class)->except('create', 'store', 'destroy', 'show');
        Route::resource('faqs', FaqController::class);
        Route::resource('front-patient-testimonials', FrontPatientTestimonialController::class);
        Route::get('enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
        Route::get('enquiries/{enquiry}', [EnquiryController::class, 'show'])->name('enquiries.show');
        Route::delete('enquiries/{enquiry}', [EnquiryController::class, 'destroy'])->name('enquiries.destroy');
        Route::get('subscribers', [SubscribeController::class, 'index'])->name('subscribers.index');
        Route::delete('subscribers/{subscribe}', [SubscribeController::class, 'destroy'])->name('subscribers.destroy');
    });

    // Resend Email Verification Mail
    Route::post('/email/verification-notification/{userId}', [UserController::class, 'resendEmailVerification'])->name('resend.email.verification');
    
});


// routes/web.php
Route::get('/horoscope', [HoroscopeController::class, 'getHoroscope']);

Route::get('/api-data', 'ApiController@getDataFromApi');




require __DIR__.'/auth.php';
require __DIR__.'/doctor.php';
require __DIR__.'/patient.php';
require __DIR__.'/upgrade.php';
