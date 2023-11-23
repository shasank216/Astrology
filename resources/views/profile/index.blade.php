@extends('layouts.app')
@section('title')
    {{ __('messages.user.profile_details') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <h1>{{ __('messages.user.edit_profile') }}</h1>
        </div>

        <div class="col-12">
            @include('layouts.errors')
            @include('flash::message')
        </div>
        <div class="card">
            <div class="card-body">
                <form id="profileForm" method="POST" action="{{ route('update.profile.setting') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <label for="exampleInputImage" class="form-label">{{__('messages.doctor.profile')}}:</label>
                        </div>
                        <div class="col-lg-8">
                            @php $styleCss = 'style' @endphp
                            <div class="mb-3" io-image-input="true">
                                <div class="d-block">
                                    <div class="image-picker">
                                        <div class="image previewImage" id="exampleInputImage" {{ $styleCss }}="background-image: url('{{ (getLogInUser()->hasRole('patient')) ? getLogInUser()->patient->profile : $user->profile_image }}')
                                        ">
                                    </div>
                                    <span class="picker-edit rounded-circle text-gray-500 fs-small"
                                          data-bs-toggle="tooltip"
                                          data-bs-original-title="{{ __('messages.user.edit_profile') }}">
                                            <label> 
                                                <i class="fa-solid fa-pen" id="profileImageIcon"></i> 
                                                <input type="file" id="profilePicture" name="image"
                                                       class="image-upload d-none profile-validation" accept="image/*"/> 
                                            </label> 
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row mb-5">
                <label class="col-lg-4 form-label required">{{ __('messages.user.full_name').':' }}</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ Form::text('first_name', $user->first_name, ['class'=> 'form-control', 'placeholder' => __('messages.doctor.first_name'), 'required']) }}
                                    <div class="invalid-feedback"></div>    
                                </div>
                                <div class="col-lg-6">
                                    {{ Form::text('last_name', $user->last_name, ['class'=> 'form-control', 'placeholder' =>__('messages.doctor.last_name'), 'required']) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <label class="col-lg-4 form-label required">{{ __('messages.user.email').':' }}</label>
                        <div class="col-lg-8">
                            {{ Form::email('email', $user->email, ['class'=> 'form-control', 'placeholder' => __('messages.user.email'), 'required']) }}
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 form-label required">{{ __('messages.user.time_zone').':' }}
                        </label>
                        <div class="col-lg-8">
                            {{ Form::select('time_zone', App\Models\User::TIME_ZONE_ARRAY, $user->time_zone,['class'=> 'form-control io-select2', 'placeholder' => __('messages.user.select_time_zone'), 'required', 'data-control'=>'select2',]) }}
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <label class="col-lg-4 form-label required">{{ __('messages.user.contact_number').':' }}</label> 
                        </div>
                        <div class="col-lg-8">
                            {{ Form::tel('contact', $user->contact ? '+'.$user->region_code.$user->contact : null, ['id'=>'phoneNumber','class' => 'form-control', 'placeholder' =>  __('messages.user.contact_number'), 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")']) }} 
                            {{ Form::hidden('region_code',!empty($user->user) ? $user->region_code : null,['id'=>'prefix_code']) }} 
                            <span id="valid-msg" class="text-success d-none fw-400 fs-small mt-2">{{ __('messages.valid_number') }}</span> 
                            <span id="error-msg" class="text-danger d-none fw-400 fs-small mt-2">{{ __('messages.invalid_number') }}</span> 
                        </div>
                        <div class="d-flex py-6">
                            {{ Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-2']) }}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

