@if(getLogInUser()->hasRole('doctor'))
        <a type="button" class="btn btn-primary" id="addLiveConsultationBtn">
            {{ __('messages.live_consultation.add_live_consultation') }}
        </a>
@endif
