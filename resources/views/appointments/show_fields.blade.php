<div class="row">
    <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.appointment.appointment_unique_id') }}:</label>
        <span class="fs-4 text-gray-800">
            <span class="badge bg-warning">{{$appointment['data']->appointment_unique_id}}</span>
        </span>
    </div>
    <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.appointment.appointment_at') }}:</label>
        <span class="fs-4 text-gray-800">
            <span class="badge bg-info">
                                    {{ \Carbon\Carbon::parse($appointment['data']->date)->isoFormat('DD MMM YYYY')}} {{$appointment['data']->from_time}} {{$appointment['data']->from_time_type}} - {{$appointment['data']->to_time}} {{$appointment['data']->to_time_type}}
                                </span>
        </span>
    </div>
    <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.doctor.status') }}:</label>
        <span class="fs-4 text-gray-800">
            <span class="badge bg-{{ getStatusBadgeColor($appointment['data']->status)}}">
                {{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[$appointment['data']->status]))}}
            </span>
        </span>
    </div>
    <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.appointment.patient') }}:</label>
        <span class="fs-4 text-gray-800">
            @if(getLogInUser()->hasRole('doctor'))
                <span class="text-decoration-none">
                {{$appointment['data']->patient->user->full_name}}
            </span>
            @else
                <a href="{{route('patients.show',$appointment['data']->patient->id)}}" class="text-decoration-none">
                {{$appointment['data']->patient->user->full_name}}
                </a>
            @endif
        </span>
    </div>
    <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.doctor.doctor') }}:</label>
        <span class="fs-4 text-gray-800">
         @if(Auth::user()->hasRole('doctor'))
                <a href="{{route('doctors.doctors.detail',$appointment['data']->doctor->id)}}" class="text-decoration-none">
                {{$appointment['data']->doctor->user->full_name}}
            </a>
            @else
                <a href="{{route('doctors.show',$appointment['data']->doctor->id)}}" class="text-decoration-none">
                {{$appointment['data']->doctor->user->full_name}}
            </a>
            @endif
        </span>
    </div>
    <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.appointment.service') }}:</label>
        <span class="fs-4 text-gray-800">{{$appointment['data']->services->name}}</span>
    </div>
    <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.doctor_appointment.amount') }}:</label>
        <span class="fs-4 text-gray-800">  {{ getCurrencyFormat(getCurrencyCode(),$appointment['data']->payable_amount) }}  </span>
        </div>
    <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.appointment.status') }}:</label>
        <span class="fs-4 text-gray-800">
            <span class="badge bg-{{($appointment['data']->payment_type === \App\Models\Appointment::PAID)?'success':'danger'}}">
                {{($appointment['data']->payment_type === \App\Models\Appointment::PAID)?__('messages.transaction.paid'):__('messages.transaction.pending')}}
            </span>

        </span>
    </div>
    @if($appointment['data']->payment_type === \App\Models\Appointment::PAID)
        <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
            <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.appointment.payment_method') }}:</label>
            <span class="fs-4 text-gray-800">
                        {{ !empty($appointment['data']->payment_method) ? \App\Models\Appointment::PAYMENT_METHOD[$appointment['data']->payment_method] : __('messages.common.n/a') }}
                    </span>
        </div>
    @endif
    <div class="col-md-6 d-flex flex-column">
        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.doctor.created_at') }}:</label>
        <span class="fs-4 text-gray-800">
            {{$appointment['data']->created_at->diffForHumans()}}
        </span>
    </div>
</div>
