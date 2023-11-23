@extends('layouts.app')
@section('title')
    {{__('messages.dashboard')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-md-6 widget">
                            <a href="{{ route('patients.patient-appointments-index') }}"
                               class="text-decoration-none">
                                <div class="bg-primary rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                    <div class="bg-cyan-300 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                       <i class="fas fa-calendar-alt card-icon display-4 text-white"></i>
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder text-white">{{$data['todayAppointmentCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light">{{__('messages.patient_dashboard.today_appointments')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-md-6 widget">
                            <a href="{{ route('patients.patient-appointments-index') }}"
                               class="text-decoration-none">
                                <div class="bg-success rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                    <div class="bg-green-300 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                       <i class="fas fa-book-medical card-icon display-4 text-white hospital-user-dark-mode"></i>
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder text-white">{{$data['upcomingAppointmentCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light">{{__('messages.patient_dashboard.next_appointment')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-md-6 widget">
                            <a href="{{ route('patients.patient-appointments-index') }}"
                               class="text-decoration-none">
                                <div class="bg-warning rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                    <div class="bg-yellow-300 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                       <i class="fas fa-calendar-check card-icon display-4 text-white"></i>
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder text-white">{{$data['completedAppointmentCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light">{{__('messages.patient_dashboard.completed_appointments')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-12 mb-7 mb-xxl-0">
                        <div class="d-flex border-0 pt-5 mb-2">
                            <h3 class="align-items-start flex-column">
                                <span class="fw-bolder fs-3 mb-1">{{__('messages.patient_dashboard.today_appointments')}}</span>
                            </h3>
                        </div>

                                    <div class="table-responsive livewire-table">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="text-uppercase">
                                                <th class="text-muted mt-1 fw-bold fs-7">{{__('messages.doctor.doctor')}}</th>
                                                <th class="text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.appointment.time')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="monthlyReport">
                                            @forelse($data['todayAppointment'] as $appointment)
                                                <tr>
                                                    <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="image image-circle image-mini me-3">
                                                            <img src="{{$appointment->doctor->user->profile_image}}" alt="user" class="">
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="{{route('patients.doctor.detail', $appointment->doctor_id)}}"
                                                               class="text-primary-800 mb-1 fs-6 text-decoration-none">
                                                                {{$appointment->doctor->user->fullname}}</a>
                                                            <span class="text-muted fw-bold d-block">{{$appointment->doctor->user->email}}</span>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td class="mb-1 fs-6 text-muted fw-bold text-center">
                                                        <span class="badge bg-light-info">
                                                        {{$appointment->from_time}} {{$appointment->from_time_type}}
                                                        - {{$appointment->to_time}} {{$appointment->to_time_type}}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center text-muted fw-bold">
                                                        {{ __('messages.common.no_data_available') }}
                                                    </td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                <div class="col-xxl-6 col-12">
                    <div class="d-flex border-0 pt-5 mb-2">
                        <h3 class="align-items-start flex-column">
                            <span class="fw-bolder fs-3 mb-1">{{__('messages.patient_dashboard.upcoming_appointments')}}</span>
                        </h3>
                    </div>

                                    <div class="table-responsive livewire-table">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="text-uppercase">
                                                <th class="text-muted mt-1 fw-bold fs-7">{{__('messages.doctor.doctor')}}</th>
                                                <th class="text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.appointment.date')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="monthlyReport">
                                            @forelse($data['upcomingAppointment'] as $appointment)
                                                <tr>
                                                    <td class="w-50px">
                                                        <div class="d-flex align-items-center">
                                                            <div class="image image-circle image-mini me-3">
                                                                <img src="{{$appointment->doctor->user->profile_image}}" alt="user" class="user-img">
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <a href="{{route('patients.doctor.detail', $appointment->doctor_id)}}"
                                                                   class="text-primary-800 mb-1 fs-6 text-decoration-none">
                                                                    {{$appointment->doctor->user->fullname}}</a>
                                                                <span class="text-muted fw-bold d-block">{{$appointment->doctor->user->email}}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="mb-1 fs-6 text-muted fw-bold text-center">
                                                        <span class="badge bg-light-info">
                                                        {{ \Carbon\Carbon::parse($appointment->date)->isoFormat('DD MMM YYYY')}} {{$appointment->from_time}} {{$appointment->from_time_type}}
                                                        - {{$appointment->to_time}} {{$appointment->to_time_type}}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center text-muted fw-bold">
                                                        {{ __('messages.common.no_data_available') }}
                                                    </td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection
