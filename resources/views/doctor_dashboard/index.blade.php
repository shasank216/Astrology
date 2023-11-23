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
                            <a href="{{ url('doctors/appointments') }}"
                               class="text-decoration-none">
                                <div class="bg-primary rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                    <div class="bg-cyan-300 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                        <i class="fas fa-file-medical card-icon display-4 text-white"></i>
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder text-white">{{$appointments['totalAppointmentCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light">{{__('messages.doctor_dashboard.total_appointments')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-md-6 widget">
                            <a href="{{ url('doctors/appointments') }}"
                               class="text-decoration-none">
                                <div
                                    class="bg-success rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                    <div
                                        class="bg-green-300 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                        <i class="fas fa-calendar-alt card-icon display-4 text-white hospital-user-dark-mode"></i>
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder text-white">{{$appointments['todayAppointmentCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light">{{__('messages.admin_dashboard.today_appointments')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-md-6 widget">
                            <a href="{{ url('doctors/appointments') }}"
                               class="text-decoration-none">
                                <div
                                    class="bg-warning rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                    <div
                                        class="bg-yellow-300 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                        <i class="fas fa-book-medical card-icon display-4 text-white"></i>
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder text-white">{{$appointments['upcomingAppointmentCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light">{{__('messages.patient_dashboard.next_appointment')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="d-flex border-0 pt-5">
                        <h3 class="align-items-start flex-column">
                            <span class="fw-bolder fs-3 mb-1">{{__('messages.doctor_dashboard.recent_appointments')}}</span>
                        </h3>
                        <div class="ms-auto">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active text-primary btn-active-light-primary fw-bolder px-4 active"
                                       data-bs-toggle="tab"
                                       id="doctorDayData">{{__('messages.admin_dashboard.day')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1"
                                       data-bs-toggle="tab"
                                       id="doctorWeekData">{{__('messages.admin_dashboard.week')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1 "
                                       data-bs-toggle="tab"
                                       id="doctorMonthData">{{__('messages.admin_dashboard.month')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content mt-0">
                    <div class="tab-pane fade show active" id="month">
                        <div class="table-responsive livewire-table">
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="w-25px text-muted mt-1 fw-bold fs-7">{{__('messages.doctor_appointment.patient')}}</th>
                                    <th class="min-w-150px text-muted mt-1 fw-bold fs-7">{{__('messages.patient.patient_unique_id')}}</th>
                                    <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.appointment.date')}}</th>
                                </tr>
                                </thead>
                                <tbody id="doctorMonthlyReport">
                                @forelse($appointments['records'] as $appointment)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="image image-circle image-mini me-3">
                                                    <img src="{{$appointment->patient->profile}}" alt="user" class="">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="{{route('doctors.patient.detail',$appointment->patient_id)}}"
                                                       class="text-primary-800 mb-1 fs-6 text-decoration-none">
                                                        {{$appointment->patient->user->fullname}}</a>
                                                    <span class="text-muted fw-bold d-block">{{$appointment->patient->user->email}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-start">
                                            <span class="badge bg-light-success">{{$appointment->patient->patient_unique_id}}</span>
                                        </td>
                                        <td class="mb-1 fs-6 text-muted fw-bold text-center">
                                            <div class="badge bg-light-info">
                                                <div class="mb-2">{{$appointment->from_time}} {{$appointment->from_time_type}}
                                                    - {{$appointment->to_time}} {{$appointment->to_time_type}}</div>
                                                <div class="">{{ \Carbon\Carbon::parse($appointment->date)->isoFormat('DD MMM YYYY')}} </div>
                                            </div>
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
                    <div class="tab-pane fade" id="week">
                        <div class="table-responsive livewire-table">
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="w-25px text-muted mt-1 fw-bold fs-7">{{__('messages.doctor_appointment.patient')}}</th>
                                    <th class="min-w-150px text-muted mt-1 fw-bold fs-7">{{__('messages.patient.patient_unique_id')}}</th>
                                    <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.appointment.date')}}</th>
                                </tr>
                                </thead>
                                <tbody id="doctorWeeklyReport"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="day">
                        <div class="table-responsive livewire-table">
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="w-25px text-muted mt-1 fw-bold fs-7">{{__('messages.doctor_appointment.patient')}}</th>
                                    <th class="min-w-150px text-muted mt-1 fw-bold fs-7">{{__('messages.patient.patient_unique_id')}}</th>
                                    <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.appointment.date')}}</th>
                                </tr>
                                </thead>
                                <tbody id="doctorDailyReport">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('doctor_dashboard.templates.templates')
@endsection
