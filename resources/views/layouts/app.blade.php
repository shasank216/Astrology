<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ getAppName() }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset(getAppFavicon()) }}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- General CSS Files -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('assets/css/pages.css') }}">

    @if(!Auth::user()->dark_mode)
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    @else
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-dark.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.dark.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ mix('assets/css/custom-pages-dark.css') }}">
    @endif

<!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>

    @livewireStyles
    @routes
    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    @include('layouts.livewire-turbo')
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
            data-turbolinks-eval="false" data-turbo-eval="false"></script>
    {{--    <script src='fullcalendar/core/locales-all.js'></script>--}}
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="{{ mix('js/third-party.js') }}"></script>
    <script src="{{ mix('js/pages.js') }}"></script>
    <script data-turbo-eval="false">
        let stripe = '';
        @if(config('services.stripe.key'))
            stripe = Stripe('{{ config('services.stripe.key') }}');
        @endif
        let usersRole = '{{ !empty(getLogInUser()->roles->first()) ? getLogInUser()->roles->first()->name : '' }}';
        let currencyIcon = '{{ getCurrencyIcon() }}';
        let isSetFirstFocus = true;
        let womanAvatar = '{{ url(asset('web/media/avatars/female.png')) }}';
        let manAvatar = '{{ url(asset('web/media/avatars/male.png')) }}';
        let changePasswordUrl = "{{ route('user.changePassword') }}";
        let updateLanguageURL = "{{ route('change-language')}}";
        let phoneNo = '';
        let dashboardChartBGColor = "{{ (Auth::user()->dark_mode) ? '#13151f' : '#FFFFFF'}}";
        let dashboardChartFontColor = "{{ (Auth::user()->dark_mode) ? '#FFFFFF' : '#000000'}}";
        let userRole = '{{getLogInUser()->hasRole('patient')}}';
        let appointmentStripePaymentUrl = '{{ url('appointment-stripe-charge') }}';
        let checkLanguageSession = '{{checkLanguageSession()}}'
        let noData = "{{__('messages.common.no_data_available')}}"
        let defaultCountryCodeValue = "{{ getSettingValue('default_country_code')}}";
        let currentLoginUserId = "{{ getLogInUserId()}}";

        Lang.setLocale(checkLanguageSession);
        let options = {
            'key': "{{ config('payments.razorpay.key') }}",
            'amount': 0, //  100 refers to 1
            'currency': 'INR',
            'name': "{{getAppName()}}",
            'order_id': '',
            'description': '',
            'image': '{{ asset(getAppLogo()) }}', // logo here
            'callback_url': "{{ route('razorpay.success') }}",
            'prefill': {
                'email': '', // recipient email here
                'name': '', // recipient name here
                'contact': '', // recipient phone here
                'appointmentID': '', // appointmentID here
            },
            'readonly': {
                'name': 'true',
                'email': 'true',
                'contact': 'true',
            },
            'theme': {
                'color': '#4FB281',
            },
            'modal': {
                'ondismiss': function () {
                    displayErrorMessage(Lang.get('messages.flash.appointment_created_payment_not_complete'));
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                },
            },
        }
    </script>
</head>
@php $styleCss = 'style'; @endphp
<body>
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid">
        @include('layouts.sidebar')
        <div class="wrapper d-flex flex-column flex-row-fluid">
            <div class='container-fluid d-flex align-items-stretch justify-content-between px-0'>
                @include('layouts.header')
            </div>
            <div class='content d-flex flex-column flex-column-fluid pt-7'>
                @yield('header_toolbar')
                <div class='d-flex flex-column-fluid'>
                    @yield('content')
                </div>
            </div>
            <div class='container-fluid'>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    {{Form::hidden('currentLanguage',checkLanguageSession(),['class'=>'currentLanguage'])}}
</div>

@include('profile.changePassword')
@include('profile.email_notification')
@include('profile.changelanguage')
</body>
</html>
