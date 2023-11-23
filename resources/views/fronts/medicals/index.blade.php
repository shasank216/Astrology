@extends('fronts.layouts.app')
@section('front-title')
    {{ __('messages.web.medical') }}
@endsection
@section('front-content')

    <style>
        div#\:0\.targetLanguage {
            background: #07273c;
            border: unset;
        }

        a.VIpgJd-ZVi9od-xl07Ob-lTBxed {
            color: #fff !important;
        }
    </style>

    @php
        $styleCss = 'style';
    @endphp
    <div class="home-page">
    <!-- Hero section -->
    <section class="as_banner_wrapper">
        <div class="">
            <div class="row as_verticle_center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="as_banner_detail">
                        <h5>
                            Astrology is just a finger <br>pointing at reality
                        </h5>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters It is a long established fact</p>
                        <div class="as_banner_btn">
                            <a href="{{ route('medicalAppointment') }}" class="as_btn as_banner_btn1">Book Now</a>
                            <a href="{{ url('medical-contact') }}" class="as_btn as_btn_border">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

    <!-- About section -->
    <section class="as_about_wrapper as_section_dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="as-about-heading">
                        <h1>We Can Use Astrology To Find Your Future</h1>
                        <p class="as_text_color">It is a long established fact that a reader will be distracted by
                            the readable content of a page when looking at its layout. The point of using Lorem
                            Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English. Many desktop</p>
                        <div class="as_about_inner">
                            <div class="as_about_inner1">
                                <p class="as_text_color">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                            viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#000000"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0c0 68.501-55.531 124.032-124.032 124.032S-248.064 68.501-248.064 0s55.531-124.032 124.032-124.032S0-68.501 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(380.032 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.44 124.44 0 0 0 26.825-2.918c-5.139 15.41-3.506 32.925 5.985 47.637l-.292.014c14.845 23.014 9.641 53.588-7.313 75.043-3.677 4.653-11.084 1.312-10.166-4.547 3.753-23.958-7.331-48.811-29.66-61.505-20.907-11.886-29.434-37.148-20.951-58.91A124 124 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(256 380.032)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.44 124.44 0 0 0-26.825 2.918c5.139-15.41 3.506-32.925-5.985-47.637l.292-.014c-14.845-23.014-9.641-53.588 7.313-75.043 3.677-4.653 11.084-1.312 10.166 4.547-3.753 23.958 7.331 48.811 29.66 61.505 20.907 11.886 29.434 37.148 20.951 58.91A124 124 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(256 131.968)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c0-9.212-1.013-18.186-2.918-26.825 15.41 5.139 32.925 3.506 47.638-5.985l.013.292c23.013-14.845 53.588-9.641 75.043 7.313 4.654 3.677 1.312 11.083-4.547 10.166-23.958-3.753-48.81 7.331-61.504 29.66l-.001.001c-11.886 20.906-37.148 29.433-58.91 20.95A123.995 123.995 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(380.032 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c0 9.212 1.013 18.186 2.918 26.825-15.41-5.139-32.925-3.506-47.638 5.985l-.013-.292c-23.013 14.845-53.588 9.641-75.043-7.313-4.654-3.677-1.312-11.083 4.547-10.166 23.958 3.753 48.81-7.331 61.504-29.66l.001-.001c11.886-20.906 37.148-29.433 58.91-20.95A123.995 123.995 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(131.968 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.522 124.522 0 0 0 24.69 10.886C12.535 21.662 5.191 37.646 6.055 55.133l-.26-.134c1.351 27.353-18.444 51.229-43.855 61.333-5.51 2.191-10.254-4.406-6.53-9.022 15.229-18.871 18.057-45.936 5.066-68.094-12.163-20.747-6.916-46.888 11.311-61.493A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(193.983 363.415)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.522 124.522 0 0 0-24.69-10.886c12.155-10.776 19.499-26.76 18.635-44.247l.26.134c-1.351-27.353 18.444-51.229 43.855-61.333 5.51-2.191 10.254 4.406 6.53 9.022-15.229 18.871-18.057 45.936-5.066 68.094C51.687-18.469 46.44 7.672 28.213 22.277A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(318.017 148.585)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.47 124.47 0 0 0 10.886-24.69C21.661-12.534 37.646-5.191 55.133-6.054l-.134.26c27.353-1.351 51.23 18.444 61.333 43.854 2.191 5.511-4.406 10.254-9.021 6.53-18.872-15.228-45.937-18.056-68.095-5.066-20.747 12.164-46.888 6.917-61.493-11.311A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(363.415 318.016)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.47 124.47 0 0 0-10.886 24.69C-21.661 12.534-37.646 5.191-55.133 6.054l.134-.26c-27.353 1.351-51.23-18.444-61.333-43.854-2.191-5.511 4.406-10.254 9.021-6.53 18.872 15.228 45.937 18.056 68.095 5.066 20.747-12.164 46.888-6.917 61.493 11.311A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(148.585 193.984)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.396 124.396 0 0 0 15.939 21.772C.024 25.027-14.327 35.198-22.323 50.774l-.158-.246c-12.507 24.363-41.588 35.143-68.646 31.188-5.868-.858-6.678-8.943-1.144-11.077C-69.647 61.91-53.666 39.884-53.837 14.2v-.001c-.16-24.048 17.454-44.064 40.542-47.598A124.02 124.02 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(148.585 318.016)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.396 124.396 0 0 0-15.939-21.772c15.915-3.255 30.266-13.426 38.262-29.002l.158.246c12.507-24.363 41.588-35.143 68.646-31.188 5.868.858 6.678 8.943 1.144 11.077C69.647-61.91 53.666-39.884 53.837-14.2v.001c.16 24.048-17.454 44.064-40.542 47.598A124.02 124.02 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(363.415 193.984)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.447 124.447 0 0 0 21.772-15.939C25.026-.024 35.197 14.327 50.773 22.323l-.246.158c24.364 12.507 35.144 41.588 31.189 68.645-.858 5.869-8.944 6.679-11.078 1.145-8.729-22.624-30.754-38.605-56.439-38.434-24.049.16-44.064-17.454-47.598-40.542A123.986 123.986 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(318.017 363.415)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.447 124.447 0 0 0-21.772 15.939C-25.026.024-35.197-14.327-50.773-22.323l.246-.158c-24.364-12.507-35.144-41.588-31.189-68.645.858-5.869 8.944-6.679 11.078-1.145 8.729 22.624 30.754 38.605 56.439 38.434 24.049-.16 44.064 17.454 47.598 40.542A123.986 123.986 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(193.983 148.585)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c-4.924 15.279-3.208 32.562 6.173 47.104l-.292.014v0c14.846 23.013 9.64 53.588-7.313 75.043-3.676 4.653-11.084 1.312-10.166-4.548 3.753-23.957-7.331-48.81-29.66-61.504C-61.959 44.34-70.529 19.455-62.461-2.159"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(282.637 377.647)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c7.787 12.377 9.669 27.992 4.367 42.194"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(287.457 94.318)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c4.924-15.279 3.208-32.562-6.173-47.104l.292-.014v0c-14.846-23.013-9.64-53.588 7.313-75.043 3.676-4.653 11.084-1.312 10.166 4.548a59.368 59.368 0 0 0-.524 4.406"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(229.363 134.352)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c15.279 4.924 32.563 3.208 47.104-6.173l.014.292c23.013-14.846 53.588-9.641 75.043 7.313 4.653 3.677 1.312 11.084-4.548 10.166-23.957-3.753-48.809 7.331-61.505 29.66C44.34 61.959 19.455 70.529-2.159 62.461"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(377.647 229.363)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-15.279-4.924-32.563-3.208-47.104 6.173l-.014-.292c-23.013 14.846-53.588 9.641-75.043-7.313-4.653-3.677-1.312-11.084 4.548-10.166 23.957 3.753 48.809-7.331 61.505-29.66C-44.34-61.959-19.455-70.529 2.159-62.461"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(134.352 282.637)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-11.904 10.77-19.059 26.596-18.206 43.88l-.26-.134c1.351 27.353-18.444 51.229-43.854 61.333-5.511 2.191-10.254-4.406-6.531-9.021 15.229-18.871 18.057-45.937 5.066-68.095C-75.828 7.42-70.808-18.416-53.013-33.1"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(218.244 374.668)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c11.904-10.77 19.059-26.596 18.206-43.88l.26.134C17.115-71.099 36.91-94.975 62.32-105.079c5.511-2.191 10.254 4.406 6.531 9.021-15.229 18.871-18.057 45.937-5.066 68.095C75.828-7.42 70.808 18.416 53.013 33.1"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(293.756 137.332)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c10.77 11.904 26.596 19.06 43.88 18.207l-.134.259c27.353-1.35 51.23 18.445 61.333 43.854 2.191 5.512-4.406 10.255-9.021 6.531-18.871-15.228-45.937-18.056-68.095-5.066C7.42 75.829-18.416 70.808-33.101 53.014"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(374.668 293.755)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-10.77-11.904-26.596-19.06-43.88-18.207l.134-.259c-27.353 1.35-51.23-18.445-61.333-43.854-2.191-5.512 4.406-10.255 9.021-6.531 18.871 15.228 45.937 18.056 68.095 5.066 20.543-12.044 46.379-7.023 61.064 10.771"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(137.332 218.245)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-15.694 3.375-29.804 13.503-37.707 28.898l-.158-.246c-12.507 24.364-41.588 35.143-68.645 31.189-5.869-.858-6.678-8.943-1.145-11.078 22.624-8.729 38.605-30.754 38.434-56.439-.158-23.812 17.108-43.677 39.861-47.496"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(163.969 339.892)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c15.694-3.375 29.804-13.503 37.707-28.898l.158.246c12.507-24.364 41.588-35.143 68.645-31.189 5.869.858 6.678 8.943 1.145 11.078C85.031-40.034 69.05-18.009 69.221 7.676c.158 23.812-17.108 43.677-39.861 47.496"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(348.031 172.108)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c3.375 15.694 13.503 29.804 28.898 37.707l-.246.158v0c24.364 12.507 35.144 41.588 31.189 68.645-.858 5.868-8.944 6.678-11.078 1.145C40.034 85.031 18.009 69.05-7.676 69.221c-23.812.158-43.677-17.107-47.496-39.86"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(339.892 348.031)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-3.375-15.694-13.503-29.804-28.898-37.707l.246-.158v0c-24.364-12.507-35.144-41.588-31.189-68.645.858-5.868 8.944-6.678 11.078-1.145 8.729 22.624 30.754 38.605 56.439 38.434 23.812-.158 43.677 17.107 47.496 39.86"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(172.108 163.969)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c0 68.501-55.531 124.032-124.032 124.032S-248.064 68.501-248.064 0s55.531-124.032 124.032-124.032S0-68.501 0 0Z"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(380.032 256)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c6.605-6.606 17.315-6.606 23.921 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(186.442 270.476)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c-6.605-6.606-17.315-6.606-23.921 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(325.558 270.476)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0v0a15.738 15.738 0 0 1 18.225-1.72A15.737 15.737 0 0 1 36.449 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(237.775 203.561)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0h29.551c13.336 0 24.147-10.811 24.147-24.147V-66.85"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(194.356 314.903)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(186.442 224.593)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(325.558 224.593)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(254.203 64)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Astrology is just a finger pointing at reality

                                </p>
                                <p class="as_text_color">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                            viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#000000"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0c0 68.501-55.531 124.032-124.032 124.032S-248.064 68.501-248.064 0s55.531-124.032 124.032-124.032S0-68.501 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(380.032 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.44 124.44 0 0 0 26.825-2.918c-5.139 15.41-3.506 32.925 5.985 47.637l-.292.014c14.845 23.014 9.641 53.588-7.313 75.043-3.677 4.653-11.084 1.312-10.166-4.547 3.753-23.958-7.331-48.811-29.66-61.505-20.907-11.886-29.434-37.148-20.951-58.91A124 124 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(256 380.032)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.44 124.44 0 0 0-26.825 2.918c5.139-15.41 3.506-32.925-5.985-47.637l.292-.014c-14.845-23.014-9.641-53.588 7.313-75.043 3.677-4.653 11.084-1.312 10.166 4.547-3.753 23.958 7.331 48.811 29.66 61.505 20.907 11.886 29.434 37.148 20.951 58.91A124 124 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(256 131.968)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c0-9.212-1.013-18.186-2.918-26.825 15.41 5.139 32.925 3.506 47.638-5.985l.013.292c23.013-14.845 53.588-9.641 75.043 7.313 4.654 3.677 1.312 11.083-4.547 10.166-23.958-3.753-48.81 7.331-61.504 29.66l-.001.001c-11.886 20.906-37.148 29.433-58.91 20.95A123.995 123.995 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(380.032 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c0 9.212 1.013 18.186 2.918 26.825-15.41-5.139-32.925-3.506-47.638 5.985l-.013-.292c-23.013 14.845-53.588 9.641-75.043-7.313-4.654-3.677-1.312-11.083 4.547-10.166 23.958 3.753 48.81-7.331 61.504-29.66l.001-.001c11.886-20.906 37.148-29.433 58.91-20.95A123.995 123.995 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(131.968 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.522 124.522 0 0 0 24.69 10.886C12.535 21.662 5.191 37.646 6.055 55.133l-.26-.134c1.351 27.353-18.444 51.229-43.855 61.333-5.51 2.191-10.254-4.406-6.53-9.022 15.229-18.871 18.057-45.936 5.066-68.094-12.163-20.747-6.916-46.888 11.311-61.493A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(193.983 363.415)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.522 124.522 0 0 0-24.69-10.886c12.155-10.776 19.499-26.76 18.635-44.247l.26.134c-1.351-27.353 18.444-51.229 43.855-61.333 5.51-2.191 10.254 4.406 6.53 9.022-15.229 18.871-18.057 45.936-5.066 68.094C51.687-18.469 46.44 7.672 28.213 22.277A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(318.017 148.585)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.47 124.47 0 0 0 10.886-24.69C21.661-12.534 37.646-5.191 55.133-6.054l-.134.26c27.353-1.351 51.23 18.444 61.333 43.854 2.191 5.511-4.406 10.254-9.021 6.53-18.872-15.228-45.937-18.056-68.095-5.066-20.747 12.164-46.888 6.917-61.493-11.311A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(363.415 318.016)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.47 124.47 0 0 0-10.886 24.69C-21.661 12.534-37.646 5.191-55.133 6.054l.134-.26c-27.353 1.351-51.23-18.444-61.333-43.854-2.191-5.511 4.406-10.254 9.021-6.53 18.872 15.228 45.937 18.056 68.095 5.066 20.747-12.164 46.888-6.917 61.493 11.311A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(148.585 193.984)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.396 124.396 0 0 0 15.939 21.772C.024 25.027-14.327 35.198-22.323 50.774l-.158-.246c-12.507 24.363-41.588 35.143-68.646 31.188-5.868-.858-6.678-8.943-1.144-11.077C-69.647 61.91-53.666 39.884-53.837 14.2v-.001c-.16-24.048 17.454-44.064 40.542-47.598A124.02 124.02 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(148.585 318.016)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.396 124.396 0 0 0-15.939-21.772c15.915-3.255 30.266-13.426 38.262-29.002l.158.246c12.507-24.363 41.588-35.143 68.646-31.188 5.868.858 6.678 8.943 1.144 11.077C69.647-61.91 53.666-39.884 53.837-14.2v.001c.16 24.048-17.454 44.064-40.542 47.598A124.02 124.02 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(363.415 193.984)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.447 124.447 0 0 0 21.772-15.939C25.026-.024 35.197 14.327 50.773 22.323l-.246.158c24.364 12.507 35.144 41.588 31.189 68.645-.858 5.869-8.944 6.679-11.078 1.145-8.729-22.624-30.754-38.605-56.439-38.434-24.049.16-44.064-17.454-47.598-40.542A123.986 123.986 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(318.017 363.415)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.447 124.447 0 0 0-21.772 15.939C-25.026.024-35.197-14.327-50.773-22.323l.246-.158c-24.364-12.507-35.144-41.588-31.189-68.645.858-5.869 8.944-6.679 11.078-1.145 8.729 22.624 30.754 38.605 56.439 38.434 24.049-.16 44.064 17.454 47.598 40.542A123.986 123.986 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(193.983 148.585)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c-4.924 15.279-3.208 32.562 6.173 47.104l-.292.014v0c14.846 23.013 9.64 53.588-7.313 75.043-3.676 4.653-11.084 1.312-10.166-4.548 3.753-23.957-7.331-48.81-29.66-61.504C-61.959 44.34-70.529 19.455-62.461-2.159"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(282.637 377.647)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c7.787 12.377 9.669 27.992 4.367 42.194"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(287.457 94.318)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c4.924-15.279 3.208-32.562-6.173-47.104l.292-.014v0c-14.846-23.013-9.64-53.588 7.313-75.043 3.676-4.653 11.084-1.312 10.166 4.548a59.368 59.368 0 0 0-.524 4.406"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(229.363 134.352)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c15.279 4.924 32.563 3.208 47.104-6.173l.014.292c23.013-14.846 53.588-9.641 75.043 7.313 4.653 3.677 1.312 11.084-4.548 10.166-23.957-3.753-48.809 7.331-61.505 29.66C44.34 61.959 19.455 70.529-2.159 62.461"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(377.647 229.363)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-15.279-4.924-32.563-3.208-47.104 6.173l-.014-.292c-23.013 14.846-53.588 9.641-75.043-7.313-4.653-3.677-1.312-11.084 4.548-10.166 23.957 3.753 48.809-7.331 61.505-29.66C-44.34-61.959-19.455-70.529 2.159-62.461"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(134.352 282.637)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-11.904 10.77-19.059 26.596-18.206 43.88l-.26-.134c1.351 27.353-18.444 51.229-43.854 61.333-5.511 2.191-10.254-4.406-6.531-9.021 15.229-18.871 18.057-45.937 5.066-68.095C-75.828 7.42-70.808-18.416-53.013-33.1"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(218.244 374.668)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c11.904-10.77 19.059-26.596 18.206-43.88l.26.134C17.115-71.099 36.91-94.975 62.32-105.079c5.511-2.191 10.254 4.406 6.531 9.021-15.229 18.871-18.057 45.937-5.066 68.095C75.828-7.42 70.808 18.416 53.013 33.1"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(293.756 137.332)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c10.77 11.904 26.596 19.06 43.88 18.207l-.134.259c27.353-1.35 51.23 18.445 61.333 43.854 2.191 5.512-4.406 10.255-9.021 6.531-18.871-15.228-45.937-18.056-68.095-5.066C7.42 75.829-18.416 70.808-33.101 53.014"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(374.668 293.755)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-10.77-11.904-26.596-19.06-43.88-18.207l.134-.259c-27.353 1.35-51.23-18.445-61.333-43.854-2.191-5.512 4.406-10.255 9.021-6.531 18.871 15.228 45.937 18.056 68.095 5.066 20.543-12.044 46.379-7.023 61.064 10.771"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(137.332 218.245)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-15.694 3.375-29.804 13.503-37.707 28.898l-.158-.246c-12.507 24.364-41.588 35.143-68.645 31.189-5.869-.858-6.678-8.943-1.145-11.078 22.624-8.729 38.605-30.754 38.434-56.439-.158-23.812 17.108-43.677 39.861-47.496"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(163.969 339.892)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c15.694-3.375 29.804-13.503 37.707-28.898l.158.246c12.507-24.364 41.588-35.143 68.645-31.189 5.869.858 6.678 8.943 1.145 11.078C85.031-40.034 69.05-18.009 69.221 7.676c.158 23.812-17.108 43.677-39.861 47.496"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(348.031 172.108)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c3.375 15.694 13.503 29.804 28.898 37.707l-.246.158v0c24.364 12.507 35.144 41.588 31.189 68.645-.858 5.868-8.944 6.678-11.078 1.145C40.034 85.031 18.009 69.05-7.676 69.221c-23.812.158-43.677-17.107-47.496-39.86"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(339.892 348.031)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-3.375-15.694-13.503-29.804-28.898-37.707l.246-.158v0c-24.364-12.507-35.144-41.588-31.189-68.645.858-5.868 8.944-6.678 11.078-1.145 8.729 22.624 30.754 38.605 56.439 38.434 23.812-.158 43.677 17.107 47.496 39.86"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(172.108 163.969)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c0 68.501-55.531 124.032-124.032 124.032S-248.064 68.501-248.064 0s55.531-124.032 124.032-124.032S0-68.501 0 0Z"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(380.032 256)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c6.605-6.606 17.315-6.606 23.921 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(186.442 270.476)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c-6.605-6.606-17.315-6.606-23.921 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(325.558 270.476)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0v0a15.738 15.738 0 0 1 18.225-1.72A15.737 15.737 0 0 1 36.449 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(237.775 203.561)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0h29.551c13.336 0 24.147-10.811 24.147-24.147V-66.85"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(194.356 314.903)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(186.442 224.593)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(325.558 224.593)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(254.203 64)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Millionaires don't have astrologers, billionaires do

                                </p>
                                <p class="as_text_color">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                            viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#000000"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0c0 68.501-55.531 124.032-124.032 124.032S-248.064 68.501-248.064 0s55.531-124.032 124.032-124.032S0-68.501 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(380.032 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.44 124.44 0 0 0 26.825-2.918c-5.139 15.41-3.506 32.925 5.985 47.637l-.292.014c14.845 23.014 9.641 53.588-7.313 75.043-3.677 4.653-11.084 1.312-10.166-4.547 3.753-23.958-7.331-48.811-29.66-61.505-20.907-11.886-29.434-37.148-20.951-58.91A124 124 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(256 380.032)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.44 124.44 0 0 0-26.825 2.918c5.139-15.41 3.506-32.925-5.985-47.637l.292-.014c-14.845-23.014-9.641-53.588 7.313-75.043 3.677-4.653 11.084-1.312 10.166 4.547-3.753 23.958 7.331 48.811 29.66 61.505 20.907 11.886 29.434 37.148 20.951 58.91A124 124 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(256 131.968)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c0-9.212-1.013-18.186-2.918-26.825 15.41 5.139 32.925 3.506 47.638-5.985l.013.292c23.013-14.845 53.588-9.641 75.043 7.313 4.654 3.677 1.312 11.083-4.547 10.166-23.958-3.753-48.81 7.331-61.504 29.66l-.001.001c-11.886 20.906-37.148 29.433-58.91 20.95A123.995 123.995 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(380.032 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c0 9.212 1.013 18.186 2.918 26.825-15.41-5.139-32.925-3.506-47.638 5.985l-.013-.292c-23.013 14.845-53.588 9.641-75.043-7.313-4.654-3.677-1.312-11.083 4.547-10.166 23.958 3.753 48.81-7.331 61.504-29.66l.001-.001c11.886-20.906 37.148-29.433 58.91-20.95A123.995 123.995 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(131.968 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.522 124.522 0 0 0 24.69 10.886C12.535 21.662 5.191 37.646 6.055 55.133l-.26-.134c1.351 27.353-18.444 51.229-43.855 61.333-5.51 2.191-10.254-4.406-6.53-9.022 15.229-18.871 18.057-45.936 5.066-68.094-12.163-20.747-6.916-46.888 11.311-61.493A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(193.983 363.415)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.522 124.522 0 0 0-24.69-10.886c12.155-10.776 19.499-26.76 18.635-44.247l.26.134c-1.351-27.353 18.444-51.229 43.855-61.333 5.51-2.191 10.254 4.406 6.53 9.022-15.229 18.871-18.057 45.936-5.066 68.094C51.687-18.469 46.44 7.672 28.213 22.277A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(318.017 148.585)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.47 124.47 0 0 0 10.886-24.69C21.661-12.534 37.646-5.191 55.133-6.054l-.134.26c27.353-1.351 51.23 18.444 61.333 43.854 2.191 5.511-4.406 10.254-9.021 6.53-18.872-15.228-45.937-18.056-68.095-5.066-20.747 12.164-46.888 6.917-61.493-11.311A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(363.415 318.016)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.47 124.47 0 0 0-10.886 24.69C-21.661 12.534-37.646 5.191-55.133 6.054l.134-.26c-27.353 1.351-51.23-18.444-61.333-43.854-2.191-5.511 4.406-10.254 9.021-6.53 18.872 15.228 45.937 18.056 68.095 5.066 20.747-12.164 46.888-6.917 61.493 11.311A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(148.585 193.984)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.396 124.396 0 0 0 15.939 21.772C.024 25.027-14.327 35.198-22.323 50.774l-.158-.246c-12.507 24.363-41.588 35.143-68.646 31.188-5.868-.858-6.678-8.943-1.144-11.077C-69.647 61.91-53.666 39.884-53.837 14.2v-.001c-.16-24.048 17.454-44.064 40.542-47.598A124.02 124.02 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(148.585 318.016)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.396 124.396 0 0 0-15.939-21.772c15.915-3.255 30.266-13.426 38.262-29.002l.158.246c12.507-24.363 41.588-35.143 68.646-31.188 5.868.858 6.678 8.943 1.144 11.077C69.647-61.91 53.666-39.884 53.837-14.2v.001c.16 24.048-17.454 44.064-40.542 47.598A124.02 124.02 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(363.415 193.984)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.447 124.447 0 0 0 21.772-15.939C25.026-.024 35.197 14.327 50.773 22.323l-.246.158c24.364 12.507 35.144 41.588 31.189 68.645-.858 5.869-8.944 6.679-11.078 1.145-8.729-22.624-30.754-38.605-56.439-38.434-24.049.16-44.064-17.454-47.598-40.542A123.986 123.986 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(318.017 363.415)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.447 124.447 0 0 0-21.772 15.939C-25.026.024-35.197-14.327-50.773-22.323l.246-.158c-24.364-12.507-35.144-41.588-31.189-68.645.858-5.869 8.944-6.679 11.078-1.145 8.729 22.624 30.754 38.605 56.439 38.434 24.049-.16 44.064 17.454 47.598 40.542A123.986 123.986 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(193.983 148.585)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c-4.924 15.279-3.208 32.562 6.173 47.104l-.292.014v0c14.846 23.013 9.64 53.588-7.313 75.043-3.676 4.653-11.084 1.312-10.166-4.548 3.753-23.957-7.331-48.81-29.66-61.504C-61.959 44.34-70.529 19.455-62.461-2.159"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(282.637 377.647)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c7.787 12.377 9.669 27.992 4.367 42.194"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(287.457 94.318)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c4.924-15.279 3.208-32.562-6.173-47.104l.292-.014v0c-14.846-23.013-9.64-53.588 7.313-75.043 3.676-4.653 11.084-1.312 10.166 4.548a59.368 59.368 0 0 0-.524 4.406"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(229.363 134.352)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c15.279 4.924 32.563 3.208 47.104-6.173l.014.292c23.013-14.846 53.588-9.641 75.043 7.313 4.653 3.677 1.312 11.084-4.548 10.166-23.957-3.753-48.809 7.331-61.505 29.66C44.34 61.959 19.455 70.529-2.159 62.461"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(377.647 229.363)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-15.279-4.924-32.563-3.208-47.104 6.173l-.014-.292c-23.013 14.846-53.588 9.641-75.043-7.313-4.653-3.677-1.312-11.084 4.548-10.166 23.957 3.753 48.809-7.331 61.505-29.66C-44.34-61.959-19.455-70.529 2.159-62.461"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(134.352 282.637)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-11.904 10.77-19.059 26.596-18.206 43.88l-.26-.134c1.351 27.353-18.444 51.229-43.854 61.333-5.511 2.191-10.254-4.406-6.531-9.021 15.229-18.871 18.057-45.937 5.066-68.095C-75.828 7.42-70.808-18.416-53.013-33.1"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(218.244 374.668)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c11.904-10.77 19.059-26.596 18.206-43.88l.26.134C17.115-71.099 36.91-94.975 62.32-105.079c5.511-2.191 10.254 4.406 6.531 9.021-15.229 18.871-18.057 45.937-5.066 68.095C75.828-7.42 70.808 18.416 53.013 33.1"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(293.756 137.332)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c10.77 11.904 26.596 19.06 43.88 18.207l-.134.259c27.353-1.35 51.23 18.445 61.333 43.854 2.191 5.512-4.406 10.255-9.021 6.531-18.871-15.228-45.937-18.056-68.095-5.066C7.42 75.829-18.416 70.808-33.101 53.014"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(374.668 293.755)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-10.77-11.904-26.596-19.06-43.88-18.207l.134-.259c-27.353 1.35-51.23-18.445-61.333-43.854-2.191-5.512 4.406-10.255 9.021-6.531 18.871 15.228 45.937 18.056 68.095 5.066 20.543-12.044 46.379-7.023 61.064 10.771"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(137.332 218.245)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-15.694 3.375-29.804 13.503-37.707 28.898l-.158-.246c-12.507 24.364-41.588 35.143-68.645 31.189-5.869-.858-6.678-8.943-1.145-11.078 22.624-8.729 38.605-30.754 38.434-56.439-.158-23.812 17.108-43.677 39.861-47.496"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(163.969 339.892)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c15.694-3.375 29.804-13.503 37.707-28.898l.158.246c12.507-24.364 41.588-35.143 68.645-31.189 5.869.858 6.678 8.943 1.145 11.078C85.031-40.034 69.05-18.009 69.221 7.676c.158 23.812-17.108 43.677-39.861 47.496"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(348.031 172.108)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c3.375 15.694 13.503 29.804 28.898 37.707l-.246.158v0c24.364 12.507 35.144 41.588 31.189 68.645-.858 5.868-8.944 6.678-11.078 1.145C40.034 85.031 18.009 69.05-7.676 69.221c-23.812.158-43.677-17.107-47.496-39.86"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(339.892 348.031)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-3.375-15.694-13.503-29.804-28.898-37.707l.246-.158v0c-24.364-12.507-35.144-41.588-31.189-68.645.858-5.868 8.944-6.678 11.078-1.145 8.729 22.624 30.754 38.605 56.439 38.434 23.812-.158 43.677 17.107 47.496 39.86"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(172.108 163.969)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c0 68.501-55.531 124.032-124.032 124.032S-248.064 68.501-248.064 0s55.531-124.032 124.032-124.032S0-68.501 0 0Z"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(380.032 256)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c6.605-6.606 17.315-6.606 23.921 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(186.442 270.476)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c-6.605-6.606-17.315-6.606-23.921 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(325.558 270.476)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0v0a15.738 15.738 0 0 1 18.225-1.72A15.737 15.737 0 0 1 36.449 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(237.775 203.561)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0h29.551c13.336 0 24.147-10.811 24.147-24.147V-66.85"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(194.356 314.903)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(186.442 224.593)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(325.558 224.593)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(254.203 64)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    It is not in the stars to hold our destiny but in ourselves.

                                </p>
                            </div>
                            <div class="as_about_inner1">
                                <p class="as_text_color">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                            viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#000000"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0c0 68.501-55.531 124.032-124.032 124.032S-248.064 68.501-248.064 0s55.531-124.032 124.032-124.032S0-68.501 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(380.032 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.44 124.44 0 0 0 26.825-2.918c-5.139 15.41-3.506 32.925 5.985 47.637l-.292.014c14.845 23.014 9.641 53.588-7.313 75.043-3.677 4.653-11.084 1.312-10.166-4.547 3.753-23.958-7.331-48.811-29.66-61.505-20.907-11.886-29.434-37.148-20.951-58.91A124 124 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(256 380.032)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.44 124.44 0 0 0-26.825 2.918c5.139-15.41 3.506-32.925-5.985-47.637l.292-.014c-14.845-23.014-9.641-53.588 7.313-75.043 3.677-4.653 11.084-1.312 10.166 4.547-3.753 23.958 7.331 48.811 29.66 61.505 20.907 11.886 29.434 37.148 20.951 58.91A124 124 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(256 131.968)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c0-9.212-1.013-18.186-2.918-26.825 15.41 5.139 32.925 3.506 47.638-5.985l.013.292c23.013-14.845 53.588-9.641 75.043 7.313 4.654 3.677 1.312 11.083-4.547 10.166-23.958-3.753-48.81 7.331-61.504 29.66l-.001.001c-11.886 20.906-37.148 29.433-58.91 20.95A123.995 123.995 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(380.032 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c0 9.212 1.013 18.186 2.918 26.825-15.41-5.139-32.925-3.506-47.638 5.985l-.013-.292c-23.013 14.845-53.588 9.641-75.043-7.313-4.654-3.677-1.312-11.083 4.547-10.166 23.958 3.753 48.81-7.331 61.504-29.66l.001-.001c11.886-20.906 37.148-29.433 58.91-20.95A123.995 123.995 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(131.968 256)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.522 124.522 0 0 0 24.69 10.886C12.535 21.662 5.191 37.646 6.055 55.133l-.26-.134c1.351 27.353-18.444 51.229-43.855 61.333-5.51 2.191-10.254-4.406-6.53-9.022 15.229-18.871 18.057-45.936 5.066-68.094-12.163-20.747-6.916-46.888 11.311-61.493A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(193.983 363.415)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.522 124.522 0 0 0-24.69-10.886c12.155-10.776 19.499-26.76 18.635-44.247l.26.134c-1.351-27.353 18.444-51.229 43.855-61.333 5.51-2.191 10.254 4.406 6.53 9.022-15.229 18.871-18.057 45.936-5.066 68.094C51.687-18.469 46.44 7.672 28.213 22.277A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(318.017 148.585)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.47 124.47 0 0 0 10.886-24.69C21.661-12.534 37.646-5.191 55.133-6.054l-.134.26c27.353-1.351 51.23 18.444 61.333 43.854 2.191 5.511-4.406 10.254-9.021 6.53-18.872-15.228-45.937-18.056-68.095-5.066-20.747 12.164-46.888 6.917-61.493-11.311A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(363.415 318.016)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.47 124.47 0 0 0-10.886 24.69C-21.661 12.534-37.646 5.191-55.133 6.054l.134-.26c-27.353 1.351-51.23-18.444-61.333-43.854-2.191-5.511 4.406-10.254 9.021-6.53 18.872 15.228 45.937 18.056 68.095 5.066 20.747-12.164 46.888-6.917 61.493 11.311A124.025 124.025 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(148.585 193.984)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.396 124.396 0 0 0 15.939 21.772C.024 25.027-14.327 35.198-22.323 50.774l-.158-.246c-12.507 24.363-41.588 35.143-68.646 31.188-5.868-.858-6.678-8.943-1.144-11.077C-69.647 61.91-53.666 39.884-53.837 14.2v-.001c-.16-24.048 17.454-44.064 40.542-47.598A124.02 124.02 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(148.585 318.016)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.396 124.396 0 0 0-15.939-21.772c15.915-3.255 30.266-13.426 38.262-29.002l.158.246c12.507-24.363 41.588-35.143 68.646-31.188 5.868.858 6.678 8.943 1.144 11.077C69.647-61.91 53.666-39.884 53.837-14.2v.001c.16 24.048-17.454 44.064-40.542 47.598A124.02 124.02 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(363.415 193.984)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.447 124.447 0 0 0 21.772-15.939C25.026-.024 35.197 14.327 50.773 22.323l-.246.158c24.364 12.507 35.144 41.588 31.189 68.645-.858 5.869-8.944 6.679-11.078 1.145-8.729-22.624-30.754-38.605-56.439-38.434-24.049.16-44.064-17.454-47.598-40.542A123.986 123.986 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(318.017 363.415)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0a124.447 124.447 0 0 0-21.772 15.939C-25.026.024-35.197-14.327-50.773-22.323l.246-.158c-24.364-12.507-35.144-41.588-31.189-68.645.858-5.869 8.944-6.679 11.078-1.145 8.729 22.624 30.754 38.605 56.439 38.434 24.049-.16 44.064 17.454 47.598 40.542A123.986 123.986 0 0 0 0 0"
                                                        style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                        transform="translate(193.983 148.585)" fill="#ffcc53"
                                                        data-original="#ffcc53"></path>
                                                    <path
                                                        d="M0 0c-4.924 15.279-3.208 32.562 6.173 47.104l-.292.014v0c14.846 23.013 9.64 53.588-7.313 75.043-3.676 4.653-11.084 1.312-10.166-4.548 3.753-23.957-7.331-48.81-29.66-61.504C-61.959 44.34-70.529 19.455-62.461-2.159"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(282.637 377.647)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c7.787 12.377 9.669 27.992 4.367 42.194"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(287.457 94.318)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c4.924-15.279 3.208-32.562-6.173-47.104l.292-.014v0c-14.846-23.013-9.64-53.588 7.313-75.043 3.676-4.653 11.084-1.312 10.166 4.548a59.368 59.368 0 0 0-.524 4.406"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(229.363 134.352)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c15.279 4.924 32.563 3.208 47.104-6.173l.014.292c23.013-14.846 53.588-9.641 75.043 7.313 4.653 3.677 1.312 11.084-4.548 10.166-23.957-3.753-48.809 7.331-61.505 29.66C44.34 61.959 19.455 70.529-2.159 62.461"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(377.647 229.363)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-15.279-4.924-32.563-3.208-47.104 6.173l-.014-.292c-23.013 14.846-53.588 9.641-75.043-7.313-4.653-3.677-1.312-11.084 4.548-10.166 23.957 3.753 48.809-7.331 61.505-29.66C-44.34-61.959-19.455-70.529 2.159-62.461"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(134.352 282.637)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-11.904 10.77-19.059 26.596-18.206 43.88l-.26-.134c1.351 27.353-18.444 51.229-43.854 61.333-5.511 2.191-10.254-4.406-6.531-9.021 15.229-18.871 18.057-45.937 5.066-68.095C-75.828 7.42-70.808-18.416-53.013-33.1"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(218.244 374.668)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c11.904-10.77 19.059-26.596 18.206-43.88l.26.134C17.115-71.099 36.91-94.975 62.32-105.079c5.511-2.191 10.254 4.406 6.531 9.021-15.229 18.871-18.057 45.937-5.066 68.095C75.828-7.42 70.808 18.416 53.013 33.1"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(293.756 137.332)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c10.77 11.904 26.596 19.06 43.88 18.207l-.134.259c27.353-1.35 51.23 18.445 61.333 43.854 2.191 5.512-4.406 10.255-9.021 6.531-18.871-15.228-45.937-18.056-68.095-5.066C7.42 75.829-18.416 70.808-33.101 53.014"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(374.668 293.755)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-10.77-11.904-26.596-19.06-43.88-18.207l.134-.259c-27.353 1.35-51.23-18.445-61.333-43.854-2.191-5.512 4.406-10.255 9.021-6.531 18.871 15.228 45.937 18.056 68.095 5.066 20.543-12.044 46.379-7.023 61.064 10.771"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(137.332 218.245)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-15.694 3.375-29.804 13.503-37.707 28.898l-.158-.246c-12.507 24.364-41.588 35.143-68.645 31.189-5.869-.858-6.678-8.943-1.145-11.078 22.624-8.729 38.605-30.754 38.434-56.439-.158-23.812 17.108-43.677 39.861-47.496"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(163.969 339.892)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c15.694-3.375 29.804-13.503 37.707-28.898l.158.246c12.507-24.364 41.588-35.143 68.645-31.189 5.869.858 6.678 8.943 1.145 11.078C85.031-40.034 69.05-18.009 69.221 7.676c.158 23.812-17.108 43.677-39.861 47.496"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(348.031 172.108)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c3.375 15.694 13.503 29.804 28.898 37.707l-.246.158v0c24.364 12.507 35.144 41.588 31.189 68.645-.858 5.868-8.944 6.678-11.078 1.145C40.034 85.031 18.009 69.05-7.676 69.221c-23.812.158-43.677-17.107-47.496-39.86"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(339.892 348.031)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-3.375-15.694-13.503-29.804-28.898-37.707l.246-.158v0c-24.364-12.507-35.144-41.588-31.189-68.645.858-5.868 8.944-6.678 11.078-1.145 8.729 22.624 30.754 38.605 56.439 38.434 23.812-.158 43.677 17.107 47.496 39.86"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(172.108 163.969)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c0 68.501-55.531 124.032-124.032 124.032S-248.064 68.501-248.064 0s55.531-124.032 124.032-124.032S0-68.501 0 0Z"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(380.032 256)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c6.605-6.606 17.315-6.606 23.921 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(186.442 270.476)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c-6.605-6.606-17.315-6.606-23.921 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(325.558 270.476)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0v0a15.738 15.738 0 0 1 18.225-1.72A15.737 15.737 0 0 1 36.449 0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(237.775 203.561)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0h29.551c13.336 0 24.147-10.811 24.147-24.147V-66.85"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(194.356 314.903)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(186.442 224.593)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(325.558 224.593)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v0"
                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(254.203 64)" fill="none"
                                                        stroke="#000000" stroke-width="20" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Astrology is like a gateway drug to a more cosmic world view.

                                </p>
                            </div>
                        </div>
                        <a href="{{ url('medical-about-us') }}" class="as_btn as_margin_top_20">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="as_aboutimg text-right">
                        <img src="{{asset('newhome/assets/images/about02.png')}}" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section End -->

    {{-- Our Service Section --}}
    <section class="as_service_wrapper as_padderTop80 as_padderBottom80 as_section_light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="as_heading as_heading_center">our services</h1>
                    <span class="as_title_line">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="193px" height="21px">
                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M188.852,19.425 L185.832,16.418 L177.218,16.418 C176.896,17.339 176.018,18.001 174.984,18.001 C173.949,18.001 173.071,17.339 172.749,16.418 L170.782,16.418 C170.503,16.941 169.951,17.298 169.314,17.298 C168.677,17.298 168.125,16.941 167.846,16.418 L155.583,16.418 C155.261,17.339 154.383,18.001 153.349,18.001 C152.314,18.001 151.436,17.339 151.114,16.418 L149.147,16.418 C148.868,16.941 148.316,17.298 147.679,17.298 C147.042,17.298 146.490,16.941 146.211,16.418 L136.245,16.418 L136.245,14.868 L146.211,14.868 C146.490,14.344 147.042,13.987 147.679,13.987 C148.316,13.987 148.868,14.344 149.147,14.868 L151.114,14.868 C151.436,13.947 152.314,13.284 153.349,13.284 C154.383,13.284 155.261,13.947 155.583,14.868 L167.846,14.868 C168.125,14.344 168.677,13.987 169.314,13.987 C169.951,13.987 170.503,14.344 170.782,14.868 L172.749,14.868 C173.071,13.947 173.949,13.284 174.984,13.284 C176.018,13.284 176.896,13.947 177.218,14.868 L185.132,14.868 L188.852,11.163 L193.000,15.294 L188.852,19.425 ZM128.736,20.194 C127.557,20.835 126.143,21.176 124.757,20.897 C123.398,20.617 122.192,19.831 121.458,18.689 C121.093,18.118 120.880,17.457 120.844,16.780 C120.809,16.099 120.996,15.446 121.304,14.890 C121.612,14.331 122.061,13.865 122.583,13.536 C123.112,13.216 123.735,13.072 124.314,13.128 C123.135,13.282 122.292,14.207 121.963,15.186 C121.611,16.189 121.842,17.221 122.499,17.947 C123.122,18.685 124.082,19.149 125.011,19.213 C125.929,19.277 126.895,18.995 127.693,18.450 C129.309,17.367 130.316,15.431 130.284,13.527 C130.275,12.580 130.047,11.681 129.555,10.915 C129.069,10.146 128.353,9.501 127.544,9.142 C126.749,8.763 125.863,8.660 124.945,8.825 C124.030,8.995 123.112,9.424 122.240,9.989 C120.459,11.079 119.045,12.857 117.271,14.481 C116.393,15.293 115.438,16.096 114.336,16.707 C113.228,17.309 112.050,17.725 110.836,17.941 C108.429,18.352 105.811,17.946 103.952,16.480 C106.100,17.426 108.459,17.375 110.532,16.695 C111.573,16.367 112.559,15.878 113.421,15.260 C114.280,14.631 115.069,13.887 115.814,13.051 C116.561,12.218 117.284,11.324 118.096,10.448 C118.893,9.566 119.808,8.683 120.843,7.946 C121.879,7.205 123.093,6.610 124.456,6.321 C125.811,6.038 127.347,6.167 128.654,6.779 C129.953,7.393 131.008,8.389 131.736,9.583 C132.468,10.783 132.831,12.216 132.759,13.578 C132.636,16.292 131.139,18.911 128.736,20.194 ZM108.887,15.270 C107.246,15.973 105.536,16.364 103.818,16.480 C105.398,15.806 106.932,15.098 108.263,14.157 C109.605,13.238 110.727,12.106 111.473,10.801 C112.196,9.484 112.618,8.019 112.443,6.653 C112.350,5.966 112.191,5.353 111.840,4.783 C111.498,4.220 111.040,3.706 110.498,3.335 C109.965,2.958 109.367,2.674 108.766,2.602 C108.169,2.506 107.579,2.585 106.967,2.830 C105.749,3.307 104.635,4.462 104.008,5.700 C103.700,6.331 103.550,7.018 103.576,7.692 C103.601,8.375 103.829,9.078 104.255,9.630 C104.663,10.207 105.297,10.590 106.058,10.712 C106.809,10.831 107.655,10.671 108.317,10.114 C107.421,11.675 104.822,11.934 103.322,10.512 C102.573,9.839 102.090,8.916 101.874,7.932 C101.657,6.927 101.794,5.891 102.105,4.953 C102.422,4.010 102.933,3.156 103.579,2.426 C104.220,1.692 105.002,1.042 105.943,0.579 C106.874,0.115 108.022,-0.087 109.109,0.046 C110.199,0.173 111.189,0.628 112.036,1.223 C112.875,1.836 113.554,2.628 114.064,3.523 C114.574,4.415 114.869,5.475 114.911,6.469 C114.989,8.493 114.306,10.411 113.178,11.913 C112.066,13.453 110.502,14.545 108.887,15.270 ZM96.222,16.983 C94.201,16.983 92.562,15.351 92.562,13.338 C92.562,11.325 94.201,9.694 96.222,9.694 C98.243,9.694 99.881,11.325 99.881,13.338 C99.881,15.351 98.243,16.983 96.222,16.983 ZM89.677,10.512 C88.177,11.934 85.579,11.675 84.682,10.114 C85.344,10.671 86.191,10.831 86.941,10.712 C87.703,10.590 88.337,10.207 88.744,9.630 C89.171,9.078 89.398,8.375 89.424,7.692 C89.449,7.018 89.299,6.331 88.991,5.700 C88.364,4.462 87.250,3.307 86.032,2.830 C85.421,2.585 84.831,2.506 84.234,2.602 C83.632,2.674 83.034,2.958 82.502,3.335 C81.959,3.706 81.501,4.220 81.159,4.783 C80.808,5.353 80.649,5.966 80.556,6.653 C80.382,8.019 80.803,9.484 81.526,10.801 C82.273,12.106 83.394,13.238 84.736,14.157 C86.068,15.098 87.601,15.806 89.181,16.480 C87.464,16.364 85.754,15.973 84.113,15.270 C82.498,14.545 80.934,13.453 79.822,11.913 C78.693,10.411 78.010,8.493 78.088,6.469 C78.131,5.475 78.426,4.415 78.935,3.523 C79.446,2.628 80.124,1.836 80.964,1.223 C81.810,0.628 82.800,0.173 83.891,0.046 C84.978,-0.087 86.126,0.115 87.057,0.579 C87.998,1.042 88.779,1.692 89.420,2.426 C90.066,3.156 90.577,4.010 90.894,4.953 C91.206,5.891 91.342,6.927 91.125,7.932 C90.909,8.916 90.426,9.839 89.677,10.512 ZM82.468,16.695 C84.541,17.375 86.899,17.426 89.047,16.480 C87.189,17.946 84.571,18.352 82.164,17.941 C80.950,17.725 79.772,17.309 78.663,16.707 C77.562,16.096 76.606,15.293 75.729,14.481 C73.954,12.857 72.541,11.079 70.759,9.989 C69.887,9.424 68.969,8.995 68.054,8.825 C67.136,8.660 66.250,8.763 65.456,9.142 C64.646,9.501 63.931,10.146 63.445,10.915 C62.952,11.681 62.724,12.580 62.715,13.527 C62.683,15.431 63.691,17.367 65.306,18.450 C66.105,18.995 67.070,19.277 67.989,19.213 C68.918,19.149 69.877,18.685 70.500,17.947 C71.157,17.221 71.388,16.189 71.037,15.186 C70.708,14.207 69.864,13.282 68.685,13.128 C69.265,13.072 69.887,13.216 70.417,13.536 C70.938,13.865 71.388,14.331 71.695,14.890 C72.004,15.446 72.191,16.099 72.155,16.780 C72.119,17.457 71.906,18.118 71.541,18.689 C70.808,19.831 69.601,20.617 68.242,20.897 C66.856,21.176 65.443,20.835 64.263,20.194 C61.860,18.911 60.363,16.292 60.240,13.578 C60.169,12.216 60.532,10.783 61.263,9.583 C61.991,8.389 63.047,7.393 64.345,6.779 C65.652,6.167 67.188,6.038 68.543,6.321 C69.906,6.610 71.120,7.205 72.156,7.946 C73.192,8.683 74.106,9.566 74.904,10.448 C75.715,11.324 76.439,12.218 77.185,13.051 C77.930,13.887 78.719,14.631 79.578,15.260 C80.440,15.878 81.426,16.367 82.468,16.695 ZM45.320,17.298 C44.684,17.298 44.131,16.941 43.852,16.418 L41.885,16.418 C41.563,17.339 40.686,18.001 39.651,18.001 C38.616,18.001 37.739,17.339 37.416,16.418 L25.154,16.418 C24.874,16.941 24.322,17.298 23.685,17.298 C23.049,17.298 22.496,16.941 22.217,16.418 L20.250,16.418 C19.928,17.339 19.051,18.001 18.016,18.001 C16.981,18.001 16.104,17.339 15.781,16.418 L7.167,16.418 L4.147,19.425 L-0.001,15.294 L4.147,11.163 L7.867,14.868 L15.781,14.868 C16.103,13.947 16.981,13.284 18.016,13.284 C19.051,13.284 19.928,13.947 20.250,14.868 L22.217,14.868 C22.496,14.344 23.049,13.987 23.685,13.987 C24.322,13.987 24.875,14.344 25.154,14.868 L37.416,14.868 C37.738,13.947 38.616,13.284 39.651,13.284 C40.686,13.284 41.563,13.947 41.885,14.868 L43.852,14.868 C44.131,14.344 44.684,13.987 45.320,13.987 C45.957,13.987 46.510,14.344 46.789,14.868 L56.755,14.868 L56.755,16.418 L46.789,16.418 C46.510,16.941 45.957,17.298 45.320,17.298 Z"></path>
                        </svg>
                    </span>
                    <p class="as_font14 as_padderBottom5">Consectetur adipiscing elit, sed do eiusmod tempor incididuesdeentiut labore <br>etesde dolore magna aliquapspendisse and the gravida.</p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="as_new_service_box text-center">
                        <span class="as_icon">
                            <img src="{{ asset('newhome/assets/images/svg/service1.svg') }}" alt="">                                   
                        </span>

                        <h4 class="as_subheading">Vastu Shastra</h4>
                        <p>Consectetur adipiscing elit sed do <br>eiusmod tempor incididunt.</p>
                        <a href="{{ url ('/medical-services') }}" class="as_service_link">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="as_new_service_box text-center">
                        <span class="as_icon">
                            <img src="{{ asset('newhome/assets/images/svg/service2.svg') }}" alt="">                                   
                        </span>

                        <h4 class="as_subheading">Birth Journal</h4>
                        <p>Consectetur adipiscing elit sed do <br>eiusmod tempor incididunt.</p>
                        <a href="{{ url ('/medical-services') }}" class="as_service_link">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="as_new_service_box text-center">
                        <span class="as_icon">
                            <img src="{{ asset('newhome/assets/images/svg/service3.svg') }}" alt="">                                   
                        </span>

                        <h4 class="as_subheading">Manglik Dosha</h4>
                        <p>Consectetur adipiscing elit sed do <br>eiusmod tempor incididunt.</p>
                        <a href="{{ url ('/medical-services') }}" class="as_service_link">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="as_new_service_box text-center">
                        <span class="as_icon">
                            <img src="{{ asset('newhome/assets/images/svg/service4.svg') }}" alt="">                               
                        </span>

                        <h4 class="as_subheading">Lal Kitab</h4>
                        <p>Consectetur adipiscing elit sed do <br>eiusmod tempor incididunt.</p>
                        <a href="{{ url ('/medical-services') }}" class="as_service_link">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="as_new_service_box text-center">
                        <span class="as_icon">
                            <img src="{{ asset('newhome/assets/images/svg/service5.svg') }}" alt="">                                
                        </span>

                        <h4 class="as_subheading">Crystal Ball</h4>
                        <p>Consectetur adipiscing elit sed do <br>eiusmod tempor incididunt.</p>
                        <a href="{{ url ('/medical-services') }}" class="as_service_link">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="as_new_service_box text-center">
                        <span class="as_icon">
                            <img src="{{ asset('newhome/assets/images/svg/service6.svg') }}" alt="">                                
                        </span>

                        <h4 class="as_subheading">Kundli Dosh</h4>
                        <p>Consectetur adipiscing elit sed do <br>eiusmod tempor incididunt.</p>
                        <a href="{{ url ('/medical-services') }}" class="as_service_link">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="as_new_service_box text-center">
                        <span class="as_icon">
                            <img src="{{ asset('newhome/assets/images/svg/service7.svg') }}" alt="">                                 
                        </span>

                        <h4 class="as_subheading">Tarot Reading</h4>
                        <p>Consectetur adipiscing elit sed do <br>eiusmod tempor incididunt.</p>
                        <a href="{{ url ('/medical-services') }}" class="as_service_link">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="as_new_service_box text-center">
                        <span class="as_icon">
                            <img src="{{ asset('newhome/assets/images/svg/service8.svg') }}" alt="">                                 
                        </span>

                        <h4 class="as_subheading">Palm Reading</h4>
                        <p>Consectetur adipiscing elit sed do <br>eiusmod tempor incididunt.</p>
                        <a href="{{ url ('/medical-services') }}" class="as_service_link">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Our Service Section End --}}

    <!-- Horoscope section -->
    <section class="as_horoscope_wrapper as_section_dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 class="as_heading">Horoscope Forecasts</h1>
                    <span class="as_title_line">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="193px" height="21px">
                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                d="M188.852,19.425 L185.832,16.418 L177.218,16.418 C176.896,17.339 176.018,18.001 174.984,18.001 C173.949,18.001 173.071,17.339 172.749,16.418 L170.782,16.418 C170.503,16.941 169.951,17.298 169.314,17.298 C168.677,17.298 168.125,16.941 167.846,16.418 L155.583,16.418 C155.261,17.339 154.383,18.001 153.349,18.001 C152.314,18.001 151.436,17.339 151.114,16.418 L149.147,16.418 C148.868,16.941 148.316,17.298 147.679,17.298 C147.042,17.298 146.490,16.941 146.211,16.418 L136.245,16.418 L136.245,14.868 L146.211,14.868 C146.490,14.344 147.042,13.987 147.679,13.987 C148.316,13.987 148.868,14.344 149.147,14.868 L151.114,14.868 C151.436,13.947 152.314,13.284 153.349,13.284 C154.383,13.284 155.261,13.947 155.583,14.868 L167.846,14.868 C168.125,14.344 168.677,13.987 169.314,13.987 C169.951,13.987 170.503,14.344 170.782,14.868 L172.749,14.868 C173.071,13.947 173.949,13.284 174.984,13.284 C176.018,13.284 176.896,13.947 177.218,14.868 L185.132,14.868 L188.852,11.163 L193.000,15.294 L188.852,19.425 ZM128.736,20.194 C127.557,20.835 126.143,21.176 124.757,20.897 C123.398,20.617 122.192,19.831 121.458,18.689 C121.093,18.118 120.880,17.457 120.844,16.780 C120.809,16.099 120.996,15.446 121.304,14.890 C121.612,14.331 122.061,13.865 122.583,13.536 C123.112,13.216 123.735,13.072 124.314,13.128 C123.135,13.282 122.292,14.207 121.963,15.186 C121.611,16.189 121.842,17.221 122.499,17.947 C123.122,18.685 124.082,19.149 125.011,19.213 C125.929,19.277 126.895,18.995 127.693,18.450 C129.309,17.367 130.316,15.431 130.284,13.527 C130.275,12.580 130.047,11.681 129.555,10.915 C129.069,10.146 128.353,9.501 127.544,9.142 C126.749,8.763 125.863,8.660 124.945,8.825 C124.030,8.995 123.112,9.424 122.240,9.989 C120.459,11.079 119.045,12.857 117.271,14.481 C116.393,15.293 115.438,16.096 114.336,16.707 C113.228,17.309 112.050,17.725 110.836,17.941 C108.429,18.352 105.811,17.946 103.952,16.480 C106.100,17.426 108.459,17.375 110.532,16.695 C111.573,16.367 112.559,15.878 113.421,15.260 C114.280,14.631 115.069,13.887 115.814,13.051 C116.561,12.218 117.284,11.324 118.096,10.448 C118.893,9.566 119.808,8.683 120.843,7.946 C121.879,7.205 123.093,6.610 124.456,6.321 C125.811,6.038 127.347,6.167 128.654,6.779 C129.953,7.393 131.008,8.389 131.736,9.583 C132.468,10.783 132.831,12.216 132.759,13.578 C132.636,16.292 131.139,18.911 128.736,20.194 ZM108.887,15.270 C107.246,15.973 105.536,16.364 103.818,16.480 C105.398,15.806 106.932,15.098 108.263,14.157 C109.605,13.238 110.727,12.106 111.473,10.801 C112.196,9.484 112.618,8.019 112.443,6.653 C112.350,5.966 112.191,5.353 111.840,4.783 C111.498,4.220 111.040,3.706 110.498,3.335 C109.965,2.958 109.367,2.674 108.766,2.602 C108.169,2.506 107.579,2.585 106.967,2.830 C105.749,3.307 104.635,4.462 104.008,5.700 C103.700,6.331 103.550,7.018 103.576,7.692 C103.601,8.375 103.829,9.078 104.255,9.630 C104.663,10.207 105.297,10.590 106.058,10.712 C106.809,10.831 107.655,10.671 108.317,10.114 C107.421,11.675 104.822,11.934 103.322,10.512 C102.573,9.839 102.090,8.916 101.874,7.932 C101.657,6.927 101.794,5.891 102.105,4.953 C102.422,4.010 102.933,3.156 103.579,2.426 C104.220,1.692 105.002,1.042 105.943,0.579 C106.874,0.115 108.022,-0.087 109.109,0.046 C110.199,0.173 111.189,0.628 112.036,1.223 C112.875,1.836 113.554,2.628 114.064,3.523 C114.574,4.415 114.869,5.475 114.911,6.469 C114.989,8.493 114.306,10.411 113.178,11.913 C112.066,13.453 110.502,14.545 108.887,15.270 ZM96.222,16.983 C94.201,16.983 92.562,15.351 92.562,13.338 C92.562,11.325 94.201,9.694 96.222,9.694 C98.243,9.694 99.881,11.325 99.881,13.338 C99.881,15.351 98.243,16.983 96.222,16.983 ZM89.677,10.512 C88.177,11.934 85.579,11.675 84.682,10.114 C85.344,10.671 86.191,10.831 86.941,10.712 C87.703,10.590 88.337,10.207 88.744,9.630 C89.171,9.078 89.398,8.375 89.424,7.692 C89.449,7.018 89.299,6.331 88.991,5.700 C88.364,4.462 87.250,3.307 86.032,2.830 C85.421,2.585 84.831,2.506 84.234,2.602 C83.632,2.674 83.034,2.958 82.502,3.335 C81.959,3.706 81.501,4.220 81.159,4.783 C80.808,5.353 80.649,5.966 80.556,6.653 C80.382,8.019 80.803,9.484 81.526,10.801 C82.273,12.106 83.394,13.238 84.736,14.157 C86.068,15.098 87.601,15.806 89.181,16.480 C87.464,16.364 85.754,15.973 84.113,15.270 C82.498,14.545 80.934,13.453 79.822,11.913 C78.693,10.411 78.010,8.493 78.088,6.469 C78.131,5.475 78.426,4.415 78.935,3.523 C79.446,2.628 80.124,1.836 80.964,1.223 C81.810,0.628 82.800,0.173 83.891,0.046 C84.978,-0.087 86.126,0.115 87.057,0.579 C87.998,1.042 88.779,1.692 89.420,2.426 C90.066,3.156 90.577,4.010 90.894,4.953 C91.206,5.891 91.342,6.927 91.125,7.932 C90.909,8.916 90.426,9.839 89.677,10.512 ZM82.468,16.695 C84.541,17.375 86.899,17.426 89.047,16.480 C87.189,17.946 84.571,18.352 82.164,17.941 C80.950,17.725 79.772,17.309 78.663,16.707 C77.562,16.096 76.606,15.293 75.729,14.481 C73.954,12.857 72.541,11.079 70.759,9.989 C69.887,9.424 68.969,8.995 68.054,8.825 C67.136,8.660 66.250,8.763 65.456,9.142 C64.646,9.501 63.931,10.146 63.445,10.915 C62.952,11.681 62.724,12.580 62.715,13.527 C62.683,15.431 63.691,17.367 65.306,18.450 C66.105,18.995 67.070,19.277 67.989,19.213 C68.918,19.149 69.877,18.685 70.500,17.947 C71.157,17.221 71.388,16.189 71.037,15.186 C70.708,14.207 69.864,13.282 68.685,13.128 C69.265,13.072 69.887,13.216 70.417,13.536 C70.938,13.865 71.388,14.331 71.695,14.890 C72.004,15.446 72.191,16.099 72.155,16.780 C72.119,17.457 71.906,18.118 71.541,18.689 C70.808,19.831 69.601,20.617 68.242,20.897 C66.856,21.176 65.443,20.835 64.263,20.194 C61.860,18.911 60.363,16.292 60.240,13.578 C60.169,12.216 60.532,10.783 61.263,9.583 C61.991,8.389 63.047,7.393 64.345,6.779 C65.652,6.167 67.188,6.038 68.543,6.321 C69.906,6.610 71.120,7.205 72.156,7.946 C73.192,8.683 74.106,9.566 74.904,10.448 C75.715,11.324 76.439,12.218 77.185,13.051 C77.930,13.887 78.719,14.631 79.578,15.260 C80.440,15.878 81.426,16.367 82.468,16.695 ZM45.320,17.298 C44.684,17.298 44.131,16.941 43.852,16.418 L41.885,16.418 C41.563,17.339 40.686,18.001 39.651,18.001 C38.616,18.001 37.739,17.339 37.416,16.418 L25.154,16.418 C24.874,16.941 24.322,17.298 23.685,17.298 C23.049,17.298 22.496,16.941 22.217,16.418 L20.250,16.418 C19.928,17.339 19.051,18.001 18.016,18.001 C16.981,18.001 16.104,17.339 15.781,16.418 L7.167,16.418 L4.147,19.425 L-0.001,15.294 L4.147,11.163 L7.867,14.868 L15.781,14.868 C16.103,13.947 16.981,13.284 18.016,13.284 C19.051,13.284 19.928,13.947 20.250,14.868 L22.217,14.868 C22.496,14.344 23.049,13.987 23.685,13.987 C24.322,13.987 24.875,14.344 25.154,14.868 L37.416,14.868 C37.738,13.947 38.616,13.284 39.651,13.284 C40.686,13.284 41.563,13.947 41.885,14.868 L43.852,14.868 C44.131,14.344 44.684,13.987 45.320,13.987 C45.957,13.987 46.510,14.344 46.789,14.868 L56.755,14.868 L56.755,16.418 L46.789,16.418 C46.510,16.941 45.957,17.298 45.320,17.298 Z" />
                        </svg>
                    </span>
                    <p class="as_text_color">
                        It is a long established fact that a reader will be distracted by the readable content of a
                        page <br>when looking at its layout. The point of using Lorem Ipsum .
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 31.945 31.944"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M28.819 28.787s.504-1.823.307-2.479c-.158-.524-1.574-3.722-2.414-5.771-.254-.704-.445-1.321-.451-1.643-.02-1.018 1.313-3.609 1.017-5.34-.3-1.729-3.4-3.997-2.982-4.354.418-.358 4.318-.183 4.623-.597.307-.414.836-.896.479-1.521-.357-.625-3.82-2.269-4-2.447-.179-.179-.447-3.28-2.535-2.981.655 4.146-.148 5.667-3.699 6.979-.507.509-.363 2.429-.135 3.287.835 4.598-5.76 2.563-7.844 2.594-2.134-.121-3.259-.371-5.209.918-1.437.947-2.51.302-3.26-.323-1.313 2.062 2.323 1.959 2.125 2.53-.585 1.138-.24 3.362-.063 3.72.219.438.297 1.106.229 1.328-.268.864-2.385 2.938-2.385 4.018 0 1.081.153 3.714.153 3.714s-.161 1.526.161 1.526c.321 0 2.068-.06 2.485-.06s-.209-1.384-1.065-1.472c0-.329.196-3.572.196-3.572l2.517-3.025s.29 2.968.691 3.558c.402.589 1.801 3.261 1.801 3.261s-.088 1.12.176 1.12 1.717-.038 2.244-.038c.526 0-.118-1.447-.931-1.36-.308-.483-1-3.158-1.205-3.748s-.26-2.646-.232-3.527c.026-.883.911.652 5.063.625 4.15-.027 5.5-.625 5.5-.625s.904 6.947.967 7.45c.084.548-.09 1.141.193 1.141.284 0 1.967.012 2.453.012.487 0 .094-1.604-1.041-1.602-.221-.534-.396-3.828-.396-3.828l1.812-3.327s2.8 2.846 3.195 3.593c.396.746.209 2.756.209 2.756s-.373.438-.481.725c.271.436.955.957 1.557 1.561.791-.177.849-1.212.66-1.802-.189-.595-.485-.974-.485-.974z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M18.631 6.661c2.256-1.216.662-3.793.186-3.495.259 1.016.117 2.625-1.371 2.525-1.492-.101-1.542-3.072.943-3.729 2.484-.655 4.543 4.127-.407 5.737 3.241.239 4.933-1.253 4.595-5.171s-8.513-3.122-8.651 1.293c-.142 4.415 3.771 3.258 4.705 2.84z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Aries</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 27.505 27.505"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M23.872 12.018s7.625-5.25.78-10.25c.234.893.336 1.68.345 2.382.666.267 1.379.748 1.438 1.6a4.22 4.22 0 0 0-1.46-1.14 5.803 5.803 0 0 1-.189 1.226c.574.29 1.114.755 1.156 1.495a4.181 4.181 0 0 0-1.288-1.066 4.7 4.7 0 0 1-.483.95c.42.358.746.84.689 1.464a4.341 4.341 0 0 0-.941-1.104 4.801 4.801 0 0 1-.779.759c.328.499.533 1.108.255 1.731a4.27 4.27 0 0 0-.614-1.472 6.08 6.08 0 0 1-1.204.616c.193.635.239 1.382-.296 1.935a4.194 4.194 0 0 0-.114-1.789c-.771.241-1.355.288-1.355.288s-2.436-1.169-6.057-1.169-6.059 1.169-6.059 1.169-.586-.047-1.357-.289a4.208 4.208 0 0 0-.115 1.789c-.535-.553-.49-1.3-.295-1.935a6.197 6.197 0 0 1-1.205-.616 4.232 4.232 0 0 0-.612 1.472c-.278-.623-.073-1.232.255-1.731a4.793 4.793 0 0 1-.779-.758 4.244 4.244 0 0 0-.942 1.103c-.056-.624.271-1.106.691-1.465a4.562 4.562 0 0 1-.485-.948c-.412.217-.86.545-1.288 1.066.042-.74.582-1.205 1.157-1.495a5.791 5.791 0 0 1-.19-1.226A4.192 4.192 0 0 0 1.07 5.75c.058-.853.772-1.333 1.438-1.6a9.773 9.773 0 0 1 .344-2.382c-6.844 5 .781 10.25.781 10.25s-3.219-.094-2.438 1.188c.781 1.283 3 2.406 4 2.469 1 .062 2.281-.845 2.281-.845s.344 4.75 2.563 6.062c-.594.125-.781.375-.766.844s.236 1.34.438 1.359c.391-.75 2.094.688.969 1.219.712 1.176 2.245 1.383 2.909 1.415l.002.007s.067.002.162-.001c.094.003.162.001.162.001l.002-.007c.664-.032 2.196-.239 2.91-1.415-1.125-.531.576-1.969.969-1.219.201-.021.422-.891.438-1.359.017-.468-.172-.719-.766-.844 2.219-1.312 2.562-6.062 2.562-6.062s1.281.905 2.281.845c1-.062 3.219-1.188 4-2.469s-2.439-1.188-2.439-1.188zM9.414 18.125c-.703.328-1.438-1.201-1.531-2.092-.093-.893.344-1.031.531-1.234s1.703 2.998 1 3.326zm10.208-2.092c-.095.893-.828 2.422-1.531 2.094-.702-.327.812-3.529 1-3.326.186.201.624.342.531 1.232z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Taurus</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="m164.645 481.602.367 30.398h54.152l-.34-40.367a128.21 128.21 0 0 1-54.18 9.969zM105.215 433.16c1.61-7.312 2.066-10.496-2.695-15.27a20.58 20.58 0 0 1-5.696-21.847 22.754 22.754 0 0 1-8.484-13.258 16.37 16.37 0 0 1 5.035-14.39 25.028 25.028 0 0 0 5.488-12.235c-16.578-1.297-44.738-6.527-44.738-27.015 0-11.743 11.422-24.075 24.688-38.403 6.636-7.168 24.273-26.222 22.035-30.691-20.63-41.328-17.043-92.5 8.007-137.547a167.747 167.747 0 0 0-39.69 2.59C32.674 170.059 23.03 226.687 44.8 270.199c7.89 15.781-8.824 33.828-24.98 51.293C12.378 329.48 0 342.855 0 347.43c0 3.968 17.738 9.14 36.57 9.14a9.144 9.144 0 0 1 9.145 9.145 53.96 53.96 0 0 1-11.082 33.133 24.33 24.33 0 0 0 6.054 4.418 9.141 9.141 0 0 1 2.348 14.625c-2.57 2.746-1.023 4.336 0 5.359a30.808 30.808 0 0 1 7.633 32.11c-1.945 8.859-2.832 12.902 16.734 20.718a95.165 95.165 0 0 0 66.422-1.015l-.812-.282c-31.325-12.535-30.914-27.441-27.797-41.62zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M407.434 410.305h-.082a47.085 47.085 0 0 1-27.356-11.32c-19.805-15.215-38.601-44.122-33.098-71.645 6.2-30.992-6.125-41.04-10.632-43.61-10.059 19.95-26.434 39.68-42.727 41.207-.684.055-1.36.09-2.027.09a19.188 19.188 0 0 1-16.403-9.14c-2.804-4.203-1.668-9.88 2.532-12.684a9.147 9.147 0 0 1 12.683 2.535c.684 1.024.914 1.004 1.516.914 6.398-.605 21.156-14.273 30.984-37.406 5.047-11.883 15.004-41.8-1.527-62.473-9.406-11.746-18.524-17.37-26.879-16.847a22.607 22.607 0 0 0-11.703 4.742 8.64 8.64 0 0 1-5.606 5.945c-.164.055-.609.172-1.168.301a40.166 40.166 0 0 0-3.656 4.856 9.143 9.143 0 0 1-12.547 3.125 9.033 9.033 0 0 1-3.52-11.465c-.3-.172-.593-.282-.913-.465-13.832-8.633-23.04-28.344-27.356-58.606a34.223 34.223 0 0 0-15.285-25.308c-18.734-12.305-51.203-9.903-71.098-6.344a176.59 176.59 0 0 0-9.992 13.559 8.112 8.112 0 0 1-.355.52c-27.805 42.276-33.582 91.948-14.07 131.046 7.898 15.781-8.817 33.828-24.97 51.29-7.39 8.073-19.769 21.448-19.769 26.023 0 3.964 17.738 9.14 36.574 9.14 5.047 0 9.141 4.094 9.141 9.145a53.91 53.91 0 0 1-11.082 33.132 24.218 24.218 0 0 0 6.055 4.415 9.141 9.141 0 0 1 2.348 14.629c-2.567 2.746-1.024 4.335 0 5.359a30.772 30.772 0 0 1 7.624 32.11c-1.937 8.859-2.824 12.902 16.743 20.718 40.785 16.328 82.917-8.23 83.335-8.496a9.155 9.155 0 0 1 9.168-.125 9.152 9.152 0 0 1 4.668 7.89l.473 54.938h181.688c-1.993-11.766-4.407-31.086-8.375-62.867-1.848-14.91-2.915-27.52-3.336-38.828zM270.629 255.523a9.139 9.139 0 0 1-5.77-11.554c2.88-8.649 9.297-23.535 19.895-26.04 4.93-1.085 10.066.5 13.523 4.18a9.143 9.143 0 0 1-9.93 14.918 54.74 54.74 0 0 0-6.144 12.727 9.146 9.146 0 0 1-4.594 5.285 9.122 9.122 0 0 1-6.98.484zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M483.957 165.871C473.152 90.195 431.051 0 291.859 0 159.441 0 114.945 20.305 106.707 24.813 94.043 48.3 90.742 66.448 97.18 77.394c7.039 11.957 24.683 13.714 29.101 13.996 9.645-2.442 64.055-14.809 96.43 6.457a52.183 52.183 0 0 1 23.34 37.996c4.52 31.59 13.469 41.957 18.398 45.332 1.18.816 2.5 1.414 3.895 1.762a42.438 42.438 0 0 1 24.847-11.172c14.75-.977 29.02 6.968 42.38 23.664 14.335 17.91 16.906 43.539 7.652 71.379 8.062 3.976 30.566 19.316 21.605 64.125-3.758 18.773 10.75 41.609 26.305 53.558 9.61 7.38 16.035 8.094 17.664 7.317.777-.383 1.926-2.743 1.926-7.809 0-21.55 14.96-52.68 32.265-88.688 21.469-44.796 45.824-95.457 40.969-129.44zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M53.887 109.715a206.442 206.442 0 0 1 8.36-1.875 201.6 201.6 0 0 1 39.257-3.82A43.24 43.24 0 0 1 81.39 86.703c-8.614-14.629-7.38-34.316 3.382-58.516A175.039 175.039 0 0 0 34.285 43.09c-12.68 23.488-16 41.644-9.535 52.59 7.059 11.996 24.777 13.742 29.137 14.035zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Gemini</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M236.201 281.328c-36.301-43.799-55.201-82.8-55.201-114 0-41.4 33.6-75 75-75 41.172 0 75 33.464 75 75 0 47.384-42.684 101.699-75 136.5-59.149 64.083-134.742 114.855-154.799 130.8-6.901 4.501-9.001 13.801-4.2 20.7l33.3 49.801c4.277 6.72 13.949 9.263 20.7 4.2 66.645-44.429 146.144-114.375 170.7-143.401 50.458-54.066 99.3-124.374 99.3-198.6 0-1.199 0-2.1-.3-2.999 0-14.101-2.1-27.902-5.7-41.1h-.3C395.799 53.629 331.601 0 256 0 165.099 0 91 76.428 91 167.329c0 54.6 26.7 113.699 79.501 176.1 27.046-22.949 50.41-45.634 65.7-62.101zM344.801 385.429c-19.82 21.337-43.599 43.881-65.4 62.999 28.198 23.401 54.899 43.2 81.599 60.901 6.249 4.543 15.957 3.252 20.7-4.2l33.3-49.801c4.801-6.899 2.701-16.199-4.2-20.7-20.999-14.099-42.901-30.299-65.999-49.199z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Cancer</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 32.001 32.001"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M25.225 12.126s.674-2.593 0-3.699c-.672-1.104-4.611-2.931-4.611-2.931s1.826-4.085-3.938-4.373c3.173 1.683 2.21 3.604 2.21 3.604l-3.748 1.25S13.601 1.99 6.106 1.508c4.229.24 7.742.421 9.519 3.352.935-.29 1.31-.635 2.3-.827C17.674 1.757 14.684.81 13.55.547 12.415.282 6.056-.637 4.055.902 3.14 1.335.195 5.35.179 7.465.16 9.58 0 25.432 0 26.682s1.539 5.286 2.548 5.286h15.038c1.538-.047-11.818-15.498-5.236-19.603-3.557 6.102 4.083 13.454 5.38 14.51 1.297 1.057 5.621 1.538 6.196 1.441.576-.098 2.308-3.604 2.308-4.036s-3.699-2.597-3.987-2.979-3.442.321-3.442-1.072c0-1.395 3.01-2.098 4.163-1.714 1.153.385 4.035 2.931 4.708 2.979.674.049 4.178-4.324 4.323-5.382.146-1.056-6.774-3.986-6.774-3.986zm-14.93-1.019c-.229.134-.504.3-.779.536-.286.224-.549.53-.813.861-.228.357-.453.753-.552 1.217-.136.452-.122.962-.091 1.479.057.521.203 1.056.386 1.595l.547 1.771c.194.573.263 1.239.393 1.847.141.62.167 1.229.221 1.814.067.584.081 1.15.069 1.688.008.538 0 1.047-.045 1.513-.047.936-.192 1.706-.271 2.242-.098.535-.182.837-.182.837l-.042-.853a51.094 51.094 0 0 0-.167-2.222c-.09-.91-.178-1.977-.372-3.094a19.683 19.683 0 0 0-.302-1.706c-.139-.574-.195-1.146-.406-1.738l-.499-1.752a7.344 7.344 0 0 1-.34-1.88c-.012-.631.06-1.257.284-1.805.182-.563.533-1.014.866-1.382.715-.715 1.491-1.005 2.007-1.179.529-.16.845-.17.845-.17s-.295.115-.757.381zM8.962 8.351c-.664.303-1.432.688-2.088 1.232-.324.271-.626.584-.824.932-.135.161-.157.365-.25.541-.031.214-.072.35-.097.626a16.121 16.121 0 0 1-.223 1.523c-.086.501-.23.979-.36 1.44a14.448 14.448 0 0 1-.958 2.442c-.341.688-.7 1.229-1 1.573a1.902 1.902 0 0 1-.395.354c-.113.049-.173.072-.173.072l.131-.119c.072-.095.152-.24.244-.435.178-.393.372-.979.577-1.689.196-.713.404-1.549.589-2.448.097-.449.169-.918.249-1.389.082-.479.13-.924.171-1.438.025-.223.096-.578.162-.853.127-.268.206-.571.391-.796.303-.506.745-.852 1.157-1.153.422-.294.865-.493 1.283-.668a9.065 9.065 0 0 1 1.204-.372c1.514-.351 2.54-.263 2.54-.263s-.981.301-2.33.888z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Leo</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 511 511.987" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M98.59 331.887c.355-.02.71-.02 1.07 0 .348-.098.7-.172 1.059-.219a82.756 82.756 0 0 0 32.511-8.23c4.52-2.258 10.012-.422 12.27 4.097 2.258 4.52.422 10.012-4.094 12.27a99.467 99.467 0 0 1-30.035 9.14c3.246 23.352 7.313 80.97-25.105 109.02 9.882 7.89 25.91 7.515 47.66-1.168 35.785-14.309 57.297-34.379 64-59.64 6.398-24.2-1.637-52.68-21.996-78.126-22.02-27.52-12.801-69.277-3.907-109.66 7.024-31.879 14.301-64.86 3.211-83.348-22.93-38.187-52.629-51.05-107.246-45.28a97.965 97.965 0 0 0-18.617 18.62l-.914 1.207c-13.867 18.645-25.863 34.742-28.434 56.047a31.36 31.36 0 0 0 2.743 17.235c1.035 2.835 2.132 5.87 3.129 9.472a38.145 38.145 0 0 1-4.957 29.258 104.644 104.644 0 0 1-8.282 11.547C8.715 229.156-.527 240.94.586 244.652c.074.258 1.098 1.457 4.691 2.653 11.61 3.879 17.891 8.465 20.332 14.886a20.229 20.229 0 0 1-3.164 17.918 21.552 21.552 0 0 0-1.828 3.575 9.026 9.026 0 0 1 7.79 4.199 8.873 8.873 0 0 1 .413 8.758l-4.855 9.691A17.845 17.845 0 0 1 29.789 320v2.047c-.68 4.41.242 8.918 2.598 12.71a19.534 19.534 0 0 0 13.504 3.528 257.958 257.958 0 0 0 52.699-6.398zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M274.496 374.691c-5.676-62.5 9.555-84.8 25.676-108.406a164.97 164.97 0 0 0 29.355-64.656c9.383-42.195 6.84-102.922-28.406-146.863C271.965 18.422 226.086 0 164.746 0 90.633 0 66.16 16.676 58.687 30.676a36.94 36.94 0 0 0 1.364 32.574c66.039-8.227 103.031 7.023 130.844 53.367 14.84 24.73 7.14 59.695-1.024 96.703-7.973 36.188-16.219 73.602.328 94.301 24.012 30.016 33.274 64.348 25.41 94.172-5.66 21.422-23.234 51.309-74.87 71.96-28.344 11.349-50.563 10.802-66.005-1.624-16.402-13.211-20.609-36.938-21.101-55.414a67.716 67.716 0 0 0-11.887 56.015c6.402 21.77 27.184 35.008 59.988 38.293 53.176 5.336 106.778-11.742 139.887-44.52a111.202 111.202 0 0 0 32.875-91.812zm-59.61-312.226a9.147 9.147 0 0 1-2.534-12.684 9.15 9.15 0 0 1 12.683-2.531c.914.594 88.438 60.46 39.68 157.98a9.158 9.158 0 0 1-7.633 5.043 9.143 9.143 0 0 1-8.18-4.086 9.143 9.143 0 0 1-.554-9.132c41.629-83.254-30.371-132.535-33.461-134.59zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M361.125 380.344c-25.516-35.656-33.754-74.278-37.43-116.399-2.836 4.489-5.68 8.657-8.422 12.68-15.449 22.629-27.656 40.496-22.562 96.457a128.981 128.981 0 0 1-38.328 106.48 161.389 161.389 0 0 1-36.781 26.743 269.121 269.121 0 0 0 65.691 4.761 104.018 104.018 0 0 0 82.285-58.832c12.067-22.914 10.352-50.644-4.453-71.89zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Virgo</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <circle cx="135.495" cy="42.137" r="42.137" fill="#ffffff"
                                            data-original="#000000" class=""></circle>
                                        <path
                                            d="M479.662 246.328a5.084 5.084 0 0 0-4.998-3.384c-11.892.481-51.643-21.296-59.101-25.054-22.769-11.417-44.627-8.322-58.662 1.509V160.69l.796-.067c11.191-.937 19.504-10.768 18.566-21.958-.937-11.191-10.773-19.509-21.958-18.566l-87.605 7.334-68.925-28.203a20.332 20.332 0 0 0-7.7-1.515H80.916c-26.814 0-48.736 21.477-48.868 47.979v149.379c0 11.229 9.103 20.332 20.332 20.332 11.229 0 20.332-9.103 20.332-20.332V145.791a4.357 4.357 0 0 1 8.714.025V487.6c0 13.476 10.924 24.399 24.399 24.399s24.399-10.925 24.399-24.399V292.571h10.535V487.6c0 13.476 10.925 24.399 24.399 24.399 13.475 0 24.399-10.925 24.399-24.399V139.717l66.263 27.202a20.345 20.345 0 0 0 9.397 1.444l75.447-6.315v57.383c-7.695-5.526-18.271-9.659-31.26-9.009-13.186.543-30.8 9.307-47.833 17.782-23.607 11.745-30.637 14.482-38.955 14.741a5.048 5.048 0 0 0-2.857 9.092l.091.068c5.353 3.98 19.184 6.601 39.066 1.685l-30.395 81.521h-.056a5.897 5.897 0 0 0-5.777 7.078c4.015 19.73 23.581 34.704 47.122 34.704 23.518 0 43.068-14.944 47.109-34.646a5.942 5.942 0 0 0-5.821-7.138l-32.848-88.097c.304-.13.602-.252.907-.384 12.14-4.994 37.881-22.868 63.2-8.542l6.557 4.7c6.186-4.586 14.264-12.489 37.519-9.06 10.717 1.575 20.707 7.828 33.067 13.265l-32.857 88.12a5.943 5.943 0 0 0-5.821 7.138c4.042 19.701 23.591 34.646 47.109 34.646 23.542 0 43.107-14.973 47.122-34.704a5.905 5.905 0 0 0-5.776-7.078h-.056l-30.343-81.381c15.472 3.77 31.878 3.488 39.023-1.826a5.087 5.087 0 0 0 1.761-5.778zm-185.887 88.98h-47.926l23.963-64.27 23.963 64.27zm158.124 0h-47.926l23.963-64.27 23.963 64.27z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Libra</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 562.529 562.529"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M400.144 54.548c-3.286-.802-6.738-4.002-7.919-7.173C379.966 14.633 353.962 0 329.775 0c-24.816 0-49.639 15.153-57.822 42.124-.979 3.238-3.678 4.284-6.377 2.246L212.987 4.713c-2.699-2.038-3.898-1.126-2.681 2.025l15.166 39.272c16.371 44.009 35.802 57.283 54.199 57.283 26.586 0 57.259-25.575 92.027-25.575 5.122 0 12.282 1.034 18.402 2.05 38.868 9.192 72.614 53.152 72.614 96.176 0 6.083-2.045 13.225-3.072 19.418-2.038 24.499-31.702 55.215-63.397 55.215-5.312 0-11.199-1.72-16.806-3.825-3.164-1.187-5.838-5.006-6.034-8.378l-1.358-23.599c-.196-3.372-2.356-7.974-4.835-10.275l-63.63-59.156c-2.479-2.301-7.014-3.115-10.135-1.824l-.973.404c-3.121 1.297-4.363 4.761-2.772 7.748l43.323 81.188c1.592 2.98.153 5.153-3.213 4.847l-20.532-1.854c-3.366-.306-7.234-3.042-8.642-6.12l-33.771-73.862c-1.407-3.072-5.159-6.383-8.384-7.387l-69.75-21.897c-3.225-1.016-5.459.912-5.459 4.29v3.097c0 3.378 1.744 7.846 4.363 9.982l50.674 41.353c2.619 2.13 5.263 6.53 6.01 9.829l10.508 46.365c.753 3.299-1.377 5.582-4.725 5.098l-2.197-.312c-3.348-.478-7.124-3.397-8.427-6.512l-18.801-44.958c-1.304-3.121-5.092-5.894-8.458-6.2l-89.046-8.084c-3.366-.306-5.961 2.185-5.795 5.557l.404 8.225c.165 3.378 2.895 6.995 6.096 8.084l36.5 12.424c3.201 1.089 8.507 2.491 11.646 3.739 15.606 6.199 23.789 22.295 23.789 35.128 0 14.303-8.183 26.5-23.532 26.5-5.82 0-13.672-2.668-21.353-6.953-2.95-1.646-7.662-4.437-10.667-5.985l-56.659-29.156c-3.005-1.548-7.809-1.419-10.729.282l-6.793 3.959c-2.919 1.702-6.818 5.355-8.703 8.158l-31.01 46.133c-1.885 2.803-6.107 5.594-9.425 6.224l-4.333.826c-3.317.631-6.071 3.88-6.15 7.265l-.753 32.742c-.08 3.378 2.185 4.663 5.049 2.876l22.399-14.003c2.864-1.793 7.246-2.558 9.792-1.713 2.54.845 4.364 4.26 4.076 7.632l-3.097 35.875c-.294 3.366 1.683 4.474 4.406 2.473l24.915-18.299c2.723-2.001 5.073-6.358 5.251-9.737l3.507-67.602c.177-3.378 2.313-4.235 4.78-1.921l57.54 54.088c2.46 2.313 3.005 6.518 1.218 9.382l-3.733 5.985c-1.787 2.871-1.646 7.424.318 10.172l8.226 11.518c1.964 2.748 6.297 5.019 9.676 5.067l55.233.783c3.378.049 3.604 1.176.508 2.521l-50.129 21.763c-3.103 1.347-6.328 5.086-7.203 8.348l-3.966 14.731c-.881 3.262.618 7.533 3.341 9.535l5.471 4.021c2.724 2.001 4.04 6.212 2.932 9.406l-24.627 71.273c-1.102 3.194-3.305 3.378-4.914.404l-40.19-74.144c-1.61-2.975-5.484-6.335-8.654-7.504L44.1 420.42c-3.17-1.175-5.037.521-4.162 3.788l9.125 34.217c.869 3.269.839 8.55-.073 11.806l-1.854 6.628c-.912 3.256-4.37 6.236-7.723 6.658l-20.6 2.589c-3.354.423-4.553 3.042-2.674 5.851l9.572 15.264c1.86 2.803 6.12 5.998 9.504 5.998h14.382c3.378 0 8.488.465 11.408 2.16l70.208 40.41c2.919 1.701 8.029 2.724 11.402 2.576l10.288-.581c3.378-.153 7.778-2.51 9.835-5.196l55.955-73.134c2.05-2.687 6.138-3.586 9.119-1.995l4.541 2.411c2.98 1.592 5.318 5.612 5.214 8.99l-.661 21.5c-.104 3.378-2.913 5.856-6.279 5.532l-9.272-.888c-3.366-.317-8.17 1.2-10.741 3.403l-19.352 16.579c-2.564 2.197-3.005 6.175-.973 8.88l1.873 2.497c2.026 2.705 6.31 4.144 9.56 3.213l74.131-21.182c3.25-.93 6.812-4.259 7.951-7.441l15.3-42.693c1.139-3.183 4.773-6.169 8.115-6.677l21.646-3.269c3.341-.501 4.602 1.414 2.815 4.278l-47.725 76.524a6.128 6.128 0 0 0 1.953 8.439l5.984 3.745c2.864 1.794 7.375 1.598 10.08-.435l81.237-61.157c2.698-2.031 4.987-6.42 5.109-9.798l.588-16.396c.122-3.378-.802-8.659-2.057-11.799l-5.691-14.198c-1.261-3.14.416-6.194 3.733-6.824l4.352-.826c3.323-.631 8.078.654 10.63 2.876l6.102 5.307c2.553 2.215 4.688 6.756 4.774 10.135l.722 28.647c.086 3.378-1.585 8.231-3.733 10.845l-20.869 25.337a6.16 6.16 0 0 0 .814 8.642l9.008 7.503c2.596 2.16 6.567 1.909 8.868-.563l45.845-49.314c2.302-2.479 4.854-7.137 5.704-10.404l4.095-15.765c.851-3.274.967-8.605.257-11.91l-6.634-30.991c-.71-3.305 1.119-7.302 4.026-9.027 54.774-32.607 97.97-94.651 97.97-175.889-3.99-102.755-78.979-161.758-156.678-180.748z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Scorpio</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g
                                        transform="matrix(0.9999999999999992,0,0,0.9999999999999992,7.105427357601002e-15,3.552713678800501e-15)">
                                        <path
                                            d="m27.425 5.235.242.551-2.558 1.118c-.229-.932.61-1.225-.244-3.001-.94-1.96-4.292-.58-5.604-3.903l-.016.091-.02-.075-1.149 4.271-.729.147-.043-.666-.585.699-.442-.653-.367.839-.787-.666.259.919-.992-.047.56.547s-.956.268-1.004.28c-.048.014.621.453.621.453l-.647.533.63.228-.785.623.905.202-.471.693.673.022.01.97.857-.513c.312.261.618.408.574.535-.025.074.379.809-.224.813-.602.004-.819-.074-.963.306l-.006.002.004.002c-.008.024-.022.037-.029.063-.157.728 1.258 4.675.902 5.201-.17.25-.889.077-3.129.046-2.24-.032-3.731.578-4.146.071 0 0-.498-1.505-2.616-.924-2.119.581.021 5.83-4.078 4.94 4.643 5.106 4.993-3.152 6.297-2.101 1.305 1.053.493 2.055.089 2.368-.404.312-.946.712-1.359 1.147-.412.438-.253 3.822-.483 4.297s-.794.662-.794.662.126.492.258 1.417c1.173.671 1.377-.509 1.408-.882.029-.373.363-4.283.751-4.721.387-.436 1.62-.438 1.62-.438s.522 1.479.365 2.095c-.159.618-1.51 3.14-.979 3.976.532.836.399 3.623.59 3.623.191 0 1.021.028 1.787.028.307-.729-.662-1.253-.662-1.253s-.348-2.542-.48-2.96c-.253-.791.994-3.621 1.343-4.286.349-.664 3.67-.48 4.964-.371 1.295.107 2.41 4 2.41 4S17.829 31.438 18.095 32c.192 0 1.438-.049 1.92 0 .377-.688-.641-1.354-.641-1.354l.977-4.045s-.176-2.947-.836-3.936c1.176.834 3.363-.389 4.056-.207.688.182.601 3.15.378 3.341s-.536.718-.536.718.484.961.752 1.5c1.048-.154.581-1.49.581-1.49s.4-3.851.256-4.467c-.146-.617-3.598-1.091-3.598-1.091s.107-3.886-.616-4.468c-.385-.309-.653-1.891-.627-3.413l6.351 3.479-.244-.618c-.885-2.804 1.932-4.257 1.185-6.146-.801-2.022-1.672-1.302-2.194-2.5-.004-.004-.006-.009-.008-.013l.004-.001c-.004-.011-.011-.024-.017-.036l2.581-1.128.346.79 1.809-1.935-2.549.255zm-8.108-3.436c.723 1.809 3.717 1.339 4.292 2.654.632 1.445.114 1.794.446 2.911l-.041.019c-1.416.508-5.394 2.153-5.52 2.164 0-.001.244-.076 0-.002-.244.075-.097-.514-.049-.563.895-.222 1.113-.331.723-.885.021-.033.15-.181.164-.263.014-.083-.07-.08-.07-.08s.06-.014.082-.094c.023-.078-.168-.31-.168-.31s.278-.146.312-.275c.033-.129-.738-.643-.751-.771-.015-.127.067-.214.088-.252.019-.038-.019-.369-.479-.779l.971-3.474zm6.873 8.556c.583 1.331-1.864 3.238-.936 5.019l-5.076-2.79c.074-1.164.344-2.202.896-2.472 1.343-.653 2.567-1.71 3.354-1.491a.624.624 0 0 0 .268-.105c.485.54.981.666 1.494 1.839z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Sagittairus</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="hovered-paths">
                                    <g>
                                        <path
                                            d="M31.049 6.612c-3.828-9.756-11.486 1.941-12.273 1.941h-5.551c-.786 0-8.444-11.697-12.273-1.941-3.829 9.756 5.141 10.596 5.141 10.596s-4.459-4.459-2.466-7.24c1.993-2.779 6.714 2.151 6.714 2.151s-2.36 4.091-1.573 5.56 2.622 1.206 2.989 2.413c.367 1.205.521 6.43.521 6.43.163.404 1.195 2.433 3.624 2.749.025.004.051.002.076.001h.045c.025.001.052.003.076-.001 2.428-.316 3.461-2.345 3.624-2.749 0 0 .153-5.225.521-6.43.366-1.207 2.2-.944 2.987-2.413s-1.571-5.56-1.571-5.56 4.721-4.931 6.714-2.151c1.993 2.78-2.466 7.239-2.466 7.239s8.97-.839 5.141-10.595z"
                                            fill="#ffffff" data-original="#000000" class="hovered-path"></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Capricorn</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 575.279 575.279"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M505.451 509.025c-3.408-3.973-8.524-8.445-11.664-9.352-2.13-.611-4.119-.918-5.826-.918-9.462 0-15.82 10.092-20.753 17.863-3.623 5.711-8.452 8.605-9.021 8.324-.568-.281-6.469-1.23-13.029-2.877-20.33-5.115-42.436-15.109-68.121-15.109-4.621 0-9.565.33-14.658.979-6.707.857-7.747-1.279-2.429-5.459 27.319-21.475 65.453-52.252 77.662-86.391 2.277-6.363 8.012-14.352 13.514-18.273 17.239-12.289 24.761-26.996 24.761-40.889 0-27.723-25.508-61.621-25.508-94.486v-14.37c0-20.551 2.87-42.13 2.87-61.623 0-21.744-6.849-45.062-27.473-65.759-4.773-4.786-8.556-12.809-7.632-18.464.71-4.364 1.322-7.858 1.322-10.282 0-8.966-3.103-11.2-6.261-13.556-5.416-4.045-6.083-11.059-5.74-12.246.238-.833.477-1.671.477-2.191C407.941 18.77 376.038 0 347.256 0h-5.135c-2.834 0-10.563.943-16.909 3.268-22.491 8.256-32.375 24.951-32.375 39.125 0 3.5.483 7.154 1.456 10.575 1.616 5.691 6.169 11.163 7.362 13.543.863 1.714 1.451 3.476 1.451 4.565 0 2.497-1.218 5.275-2.589 7.95-2.124 4.143-4.389 9.376-4.97 11.677-.404 1.591-.673 3.195-.673 4.247 0 1.016 3.078 4.131 6.12 4.131.526 0 .722-.239.911-.483.361-.471 1.053.184 1.242 1.046.19.863.35 2.007.35 2.57s.379 1.652 1.01 2.295c.422.429.918.802 1.371.802.495 0 1.438.257 2.387.508 1.303.349 2.692.275 3.06 0s.686.667-.429 1.23c-1.113.563-.593 3.084.826 5.41 1.42 2.325 3.825 2.882 4.132 2.595.306-.288 1.48 4.773 5.226 9.841 2.485 3.366 5.601 5.043 9.719 5.043 2.375 0 5.777-1.028 9.811-2.289 5.331-1.665 12.008 1.077 14.848 5.9 2.839 4.823-.337 9.009-7.026 9.982-24.878 3.617-48.072 13.194-70.043 22.662-6.206 2.674-16.194 2.503-22.344-.294-19.707-8.972-30.918-13.011-45.649-15.661-6.652-1.193-10.936-7.16-9.896-13.837.973-6.261 1.903-14.003 1.903-20.827 0-3.537-.385-7.075-1.059-10.208-1.206-5.544-6.903-14.088-11.86-18.678-9.608-8.886-24.205-16.365-40.086-21.891-6.383-2.222-15.752-3.868-20.594-2.828-3.458.741-6.42 2.069-7.546 4.309L23.973 223.362c-3.562 5.747-5.533 12.919-4.413 16.016 1.12 3.097 4.798 6.53 8.213 7.662s5.104 7.43 3.776 14.058l-14.7 73.551c-1.328 6.627.349 12.479 3.739 13.066 3.391.586 7.65-4.205 9.511-10.699l7.687-26.854c1.861-6.5 2.583-6.348 1.616.348L22.363 428.088c-.967 6.689 1.463 13.035 5.435 14.168 3.972 1.133 8.06-3.354 9.131-10.031L55.644 315.59c1.071-6.676 1.622-6.615 1.23.135l-3.715 63.904c-.392 6.752 1.591 12.682 4.425 13.244 2.833.564 5.747-4.418 6.5-11.139l8.574-76.322c.752-6.719 2.289-11.707 3.421-11.139 1.132.57 1.671 6.494 1.193 13.238L67.676 443.4c-.478 6.744 2.589 11.982 6.848 11.701 4.26-.281 8.158-5.973 8.715-12.711l12.252-148.232c.557-6.738 2.136-12.43 3.525-12.718 1.389-.288 2.521 4.963 2.521 11.726v120.418c0 6.762 3.929 12.453 8.782 12.717 4.854.264 8.893-5 9.033-11.756l2.111-101.861c.141-6.756 1.365-12.074 2.699-11.684.973.281 1.94.568 2.454.568 21.573 0 35.698-18.151 41.42-35.421 2.13-6.414 3.923-17.252 5.502-23.832l6.597-27.54c1.573-6.573 5.422-7.062 8.966-1.304 9.4 15.257 22.283 31.035 44.389 42.749 5.973 3.164 13.384 5.3 16.193 5.704 1.787.257 3.574.514 5.11.514 20.496 0 43.018-8.507 56.5-19.737 5.195-4.327 10.954-3.55 17.062-.796 6.107 2.754 11.86 2.742 11.86 3.592v1.536c0 19.211 7.938 24.603 15.067 31.463 4.872 4.688 4.584 14.23.129 19.316-2.191 2.502-4.382 5.367-5.937 9.137-2.577 6.248-7.626 11.297-14.352 10.631-19.951-1.979-38.36-2.756-54.652-2.756-31.096 0-56.689 3.439-75.655 8.674-6.518 1.799-17.277 4.84-22.607 8.996-7.619 5.941-12.674 15.752-12.674 26.492 0 2.18.294 4.383.722 6.721.673 3.678 1.34 12.111 1.805 18.855 1.867 27.02 9.174 56.023 12.338 114.279.368 6.75-1.989 17.092-6.016 22.521-12.124 16.328-24.621 19.811-43.771 32.84-3.904 2.172-7.075 4.529-9.902 6.523-5.349 3.775-9.052 7.895-5.386 9.504 2.007.883 4.437 1.445 7.056 1.445 1.714 0 3.703-.307 5.82-.918 3.14-.906 9.352-1.15 14.174-.221 3.917.76 6.922 1.133 8.819 1.133 9.235 0 6.108-6.164 24.609-6.164 6.157 0 14.37 1.029 26.738 2.051.973 0 4.112 1.027 5.153 1.027 10.227 0 26.634-4.105 26.634-18.488 0-4.105-3.078-11.291-6.096-17.441-3.121-8.219-4.125-18.488-4.125-26.713 0-31.832 16.438-66.752 16.438-96.545 0-9.398-2.056-19.301-6.493-27.924-3.097-6.01-2.001-7.613 4.113-4.732 31.854 15.014 47.362 17.92 71.585 20.258 6.726.648 9.247 5.74 5.948 11.641-15.532 27.797-26.738 60.301-32.797 97.521-1.089 6.672-1.769 14.182-1.769 16.732v4.621c0 19.51 12.051 39.027 30.563 39.027 19.32 0 68.122-5.459 132.069-13.801 6.701-.875 17.62-1.311 24.29-.227 17.186 2.797 44.315 8.893 60.943 8.893 1.396 0 2.809.055 4.137.115 2.283.105 5.331 4.48 8.709 8.617 2.834 3.465 5.949 5.141 7.883 5.141h1.016c.563 0 1.524-1.756 2.521-3.77 1.065-2.16 1.616-2.209 1.616-3.678 0-1.07-.288-3.158-.857-5.195-.783-2.809-2.001-10.373-4.4-16.695-5.942-15.699-22.84-15.631-33.672-21.15-6.015-3.078-11.089-11.793-14.498-15.764zM240.805 221.122c-12.424-10.735-27.087-19.401-43.373-29.303-5.777-3.513-9.511-10.777-8.378-16.163 1.132-5.385 6.249-6.23 11.634-2.148 16.304 12.356 45.875 31.42 78.795 31.42 3.091 0 6.708-.52 10.312-1.163 5.649-1.01 5.141.208-.875 3.292-10.845 5.557-18.941 11.12-28.513 16.683-5.839 3.392-14.492 1.801-19.602-2.618z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Aquarius</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="as_sign_box text-center">
                        <a href="{{ url('horoscope_details') }}">
                            <span class="as_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 31.998 31.998"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M6.588 20.578c-.359-2.463-.402-5.328-.402-5.328s1.878-3.225 3.895-3.939c.672-.136-1.911 2.238-.806 2.462 1.104.225 4.655-2.776 5.64-2.867.986-.088 4.03 1.075 6.896.584 2.865-.493 8.148-5.238 8.104-5.865-.046-.627-2.417.672-2.417.672s1.699-2.06 1.208-3.134c-.494-1.076-8.554-1.973-10.564-1.927-2.017-3.537-7.117 1.617-7.346 1.835-.226.22 2.093-.123 2.093.236 0 .357-5.227 4.778-6.211 7.51S3.365 15.069.59 13.906c-1.522 2.955 3.671 2.955 3.671 2.955s.447 4.207 2.327 3.717zM25.415 3.295a.694.694 0 1 1-.003 1.387.694.694 0 0 1 .003-1.387zM27.739 15.139s-.448-4.207-2.328-3.716c.356 2.462.401 5.33.401 5.33s-1.881 3.224-3.896 3.938c-.672.134 1.911-2.239.808-2.464-1.105-.224-4.658 2.774-5.644 2.864-.984.091-4.028-1.072-6.893-.582-2.867.492-8.149 5.238-8.104 5.865.044.627 2.417-.672 2.417-.672s-1.7 2.061-1.208 3.133c.491 1.076 8.55 1.974 10.565 1.928 2.015 3.535 7.117-1.617 7.342-1.836.228-.219-2.094.123-2.094-.235 0-.357 5.228-4.777 6.211-7.51.986-2.73 3.312-4.252 6.091-3.091 1.527-2.952-3.668-2.952-3.668-2.952zM6.584 28.705a.692.692 0 1 1 0-1.386.694.694 0 1 1 0 1.386z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <div>
                                <h5>Pisces</h5>
                                <p>Mar 21 - Apr 23</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Horoscope section End -->

    <!-- Service section -->
    <section class="as_service_wrapper as_section_light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="as_heading as_heading_center">our services</h1>
                    <span class="as_title_line">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="193px" height="21px">
                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                d="M188.852,19.425 L185.832,16.418 L177.218,16.418 C176.896,17.339 176.018,18.001 174.984,18.001 C173.949,18.001 173.071,17.339 172.749,16.418 L170.782,16.418 C170.503,16.941 169.951,17.298 169.314,17.298 C168.677,17.298 168.125,16.941 167.846,16.418 L155.583,16.418 C155.261,17.339 154.383,18.001 153.349,18.001 C152.314,18.001 151.436,17.339 151.114,16.418 L149.147,16.418 C148.868,16.941 148.316,17.298 147.679,17.298 C147.042,17.298 146.490,16.941 146.211,16.418 L136.245,16.418 L136.245,14.868 L146.211,14.868 C146.490,14.344 147.042,13.987 147.679,13.987 C148.316,13.987 148.868,14.344 149.147,14.868 L151.114,14.868 C151.436,13.947 152.314,13.284 153.349,13.284 C154.383,13.284 155.261,13.947 155.583,14.868 L167.846,14.868 C168.125,14.344 168.677,13.987 169.314,13.987 C169.951,13.987 170.503,14.344 170.782,14.868 L172.749,14.868 C173.071,13.947 173.949,13.284 174.984,13.284 C176.018,13.284 176.896,13.947 177.218,14.868 L185.132,14.868 L188.852,11.163 L193.000,15.294 L188.852,19.425 ZM128.736,20.194 C127.557,20.835 126.143,21.176 124.757,20.897 C123.398,20.617 122.192,19.831 121.458,18.689 C121.093,18.118 120.880,17.457 120.844,16.780 C120.809,16.099 120.996,15.446 121.304,14.890 C121.612,14.331 122.061,13.865 122.583,13.536 C123.112,13.216 123.735,13.072 124.314,13.128 C123.135,13.282 122.292,14.207 121.963,15.186 C121.611,16.189 121.842,17.221 122.499,17.947 C123.122,18.685 124.082,19.149 125.011,19.213 C125.929,19.277 126.895,18.995 127.693,18.450 C129.309,17.367 130.316,15.431 130.284,13.527 C130.275,12.580 130.047,11.681 129.555,10.915 C129.069,10.146 128.353,9.501 127.544,9.142 C126.749,8.763 125.863,8.660 124.945,8.825 C124.030,8.995 123.112,9.424 122.240,9.989 C120.459,11.079 119.045,12.857 117.271,14.481 C116.393,15.293 115.438,16.096 114.336,16.707 C113.228,17.309 112.050,17.725 110.836,17.941 C108.429,18.352 105.811,17.946 103.952,16.480 C106.100,17.426 108.459,17.375 110.532,16.695 C111.573,16.367 112.559,15.878 113.421,15.260 C114.280,14.631 115.069,13.887 115.814,13.051 C116.561,12.218 117.284,11.324 118.096,10.448 C118.893,9.566 119.808,8.683 120.843,7.946 C121.879,7.205 123.093,6.610 124.456,6.321 C125.811,6.038 127.347,6.167 128.654,6.779 C129.953,7.393 131.008,8.389 131.736,9.583 C132.468,10.783 132.831,12.216 132.759,13.578 C132.636,16.292 131.139,18.911 128.736,20.194 ZM108.887,15.270 C107.246,15.973 105.536,16.364 103.818,16.480 C105.398,15.806 106.932,15.098 108.263,14.157 C109.605,13.238 110.727,12.106 111.473,10.801 C112.196,9.484 112.618,8.019 112.443,6.653 C112.350,5.966 112.191,5.353 111.840,4.783 C111.498,4.220 111.040,3.706 110.498,3.335 C109.965,2.958 109.367,2.674 108.766,2.602 C108.169,2.506 107.579,2.585 106.967,2.830 C105.749,3.307 104.635,4.462 104.008,5.700 C103.700,6.331 103.550,7.018 103.576,7.692 C103.601,8.375 103.829,9.078 104.255,9.630 C104.663,10.207 105.297,10.590 106.058,10.712 C106.809,10.831 107.655,10.671 108.317,10.114 C107.421,11.675 104.822,11.934 103.322,10.512 C102.573,9.839 102.090,8.916 101.874,7.932 C101.657,6.927 101.794,5.891 102.105,4.953 C102.422,4.010 102.933,3.156 103.579,2.426 C104.220,1.692 105.002,1.042 105.943,0.579 C106.874,0.115 108.022,-0.087 109.109,0.046 C110.199,0.173 111.189,0.628 112.036,1.223 C112.875,1.836 113.554,2.628 114.064,3.523 C114.574,4.415 114.869,5.475 114.911,6.469 C114.989,8.493 114.306,10.411 113.178,11.913 C112.066,13.453 110.502,14.545 108.887,15.270 ZM96.222,16.983 C94.201,16.983 92.562,15.351 92.562,13.338 C92.562,11.325 94.201,9.694 96.222,9.694 C98.243,9.694 99.881,11.325 99.881,13.338 C99.881,15.351 98.243,16.983 96.222,16.983 ZM89.677,10.512 C88.177,11.934 85.579,11.675 84.682,10.114 C85.344,10.671 86.191,10.831 86.941,10.712 C87.703,10.590 88.337,10.207 88.744,9.630 C89.171,9.078 89.398,8.375 89.424,7.692 C89.449,7.018 89.299,6.331 88.991,5.700 C88.364,4.462 87.250,3.307 86.032,2.830 C85.421,2.585 84.831,2.506 84.234,2.602 C83.632,2.674 83.034,2.958 82.502,3.335 C81.959,3.706 81.501,4.220 81.159,4.783 C80.808,5.353 80.649,5.966 80.556,6.653 C80.382,8.019 80.803,9.484 81.526,10.801 C82.273,12.106 83.394,13.238 84.736,14.157 C86.068,15.098 87.601,15.806 89.181,16.480 C87.464,16.364 85.754,15.973 84.113,15.270 C82.498,14.545 80.934,13.453 79.822,11.913 C78.693,10.411 78.010,8.493 78.088,6.469 C78.131,5.475 78.426,4.415 78.935,3.523 C79.446,2.628 80.124,1.836 80.964,1.223 C81.810,0.628 82.800,0.173 83.891,0.046 C84.978,-0.087 86.126,0.115 87.057,0.579 C87.998,1.042 88.779,1.692 89.420,2.426 C90.066,3.156 90.577,4.010 90.894,4.953 C91.206,5.891 91.342,6.927 91.125,7.932 C90.909,8.916 90.426,9.839 89.677,10.512 ZM82.468,16.695 C84.541,17.375 86.899,17.426 89.047,16.480 C87.189,17.946 84.571,18.352 82.164,17.941 C80.950,17.725 79.772,17.309 78.663,16.707 C77.562,16.096 76.606,15.293 75.729,14.481 C73.954,12.857 72.541,11.079 70.759,9.989 C69.887,9.424 68.969,8.995 68.054,8.825 C67.136,8.660 66.250,8.763 65.456,9.142 C64.646,9.501 63.931,10.146 63.445,10.915 C62.952,11.681 62.724,12.580 62.715,13.527 C62.683,15.431 63.691,17.367 65.306,18.450 C66.105,18.995 67.070,19.277 67.989,19.213 C68.918,19.149 69.877,18.685 70.500,17.947 C71.157,17.221 71.388,16.189 71.037,15.186 C70.708,14.207 69.864,13.282 68.685,13.128 C69.265,13.072 69.887,13.216 70.417,13.536 C70.938,13.865 71.388,14.331 71.695,14.890 C72.004,15.446 72.191,16.099 72.155,16.780 C72.119,17.457 71.906,18.118 71.541,18.689 C70.808,19.831 69.601,20.617 68.242,20.897 C66.856,21.176 65.443,20.835 64.263,20.194 C61.860,18.911 60.363,16.292 60.240,13.578 C60.169,12.216 60.532,10.783 61.263,9.583 C61.991,8.389 63.047,7.393 64.345,6.779 C65.652,6.167 67.188,6.038 68.543,6.321 C69.906,6.610 71.120,7.205 72.156,7.946 C73.192,8.683 74.106,9.566 74.904,10.448 C75.715,11.324 76.439,12.218 77.185,13.051 C77.930,13.887 78.719,14.631 79.578,15.260 C80.440,15.878 81.426,16.367 82.468,16.695 ZM45.320,17.298 C44.684,17.298 44.131,16.941 43.852,16.418 L41.885,16.418 C41.563,17.339 40.686,18.001 39.651,18.001 C38.616,18.001 37.739,17.339 37.416,16.418 L25.154,16.418 C24.874,16.941 24.322,17.298 23.685,17.298 C23.049,17.298 22.496,16.941 22.217,16.418 L20.250,16.418 C19.928,17.339 19.051,18.001 18.016,18.001 C16.981,18.001 16.104,17.339 15.781,16.418 L7.167,16.418 L4.147,19.425 L-0.001,15.294 L4.147,11.163 L7.867,14.868 L15.781,14.868 C16.103,13.947 16.981,13.284 18.016,13.284 C19.051,13.284 19.928,13.947 20.250,14.868 L22.217,14.868 C22.496,14.344 23.049,13.987 23.685,13.987 C24.322,13.987 24.875,14.344 25.154,14.868 L37.416,14.868 C37.738,13.947 38.616,13.284 39.651,13.284 C40.686,13.284 41.563,13.947 41.885,14.868 L43.852,14.868 C44.131,14.344 44.684,13.987 45.320,13.987 C45.957,13.987 46.510,14.344 46.789,14.868 L56.755,14.868 L56.755,16.418 L46.789,16.418 C46.510,16.941 45.957,17.298 45.320,17.298 Z" />
                        </svg>
                    </span>
                    <p class="as_text_color">
                        Consectetur adipiscing elit, sed do eiusmod tempor incididuesdeentiut labore <br>etesde
                        dolore magna aliquapspendisse and the gravida.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="as_service_box as_text_left">
                        <div class="as_service_inner_content ">
                            <h4 class="as_subheading ">
                                <a href="{{ url('horoscope_details') }}">Astrology Tips</a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit <br>amet, consectetur
                            </p>
                        </div>
                        <div class="as_service_inner_icon">
                            <span class="as_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 479.999 479.999"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M418.983 452.529c-.273 4.253-3.993 7.471-8.255 7.471H229.32a4 4 0 0 1-4-4v-8a4 4 0 0 1 4-4H411a7.999 7.999 0 0 1 7.983 8.529z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M404 405.996V420a8 8 0 0 1-8 8H229.32a4 4 0 0 1-4-4c0-3.191.362-5.939-2.34-8.66-5.139-5.103-13.66-1.34-13.66 5.967v38.239c0 13.862-12.512 23.118-25.2 19.764L168 474.98l-15.66 4.2c-13.52 3.636-25.66-6.207-25.66-19.12v-38.788c0-4.262-3.218-7.982-7.471-8.255A7.999 7.999 0 0 0 110.68 421v3a4 4 0 0 1-4 4h-2.244c-8.067 0-15.018-6.185-15.417-14.242-.427-8.613 6.459-15.756 14.981-15.758 218.007-.04 275.476.089 291.952-.003a8 8 0 0 1 8.048 7.999z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M106.68 444H104c-17.405 0-31.511-14.427-30.986-31.947.434-14.467 11.011-26.23 24.662-29.275 3.681-.821 6.324-4.045 6.324-7.816V8.824c0-5.128-4.744-8.869-9.762-7.809C72.965 5.509 57 24.39 57 47v366c0 25.957 21.043 47 47 47h2.68a4 4 0 0 0 4-4v-8a4 4 0 0 0-4-4zM295.368 187.569l-13.304 9.666c-2.198 1.597-2.198 4.875 0 6.472l19.036 13.83c2.655 1.93 4.995.643 5.878 0 .884-.642 2.829-2.472 1.816-5.59l-7.271-22.379c-.839-2.583-3.957-3.596-6.155-1.999zM280.019 132.333H247.98a4 4 0 0 0-3.804 2.764l-9.902 30.473a3.999 3.999 0 0 0 1.453 4.472l25.922 18.833a3.998 3.998 0 0 0 4.702 0l25.922-18.833a4 4 0 0 0 1.453-4.472l-9.902-30.473a4 4 0 0 0-3.805-2.764zM301.45 137.569l5.082 15.64c.84 2.584 3.957 3.597 6.155 2l19.036-13.831c2.652-1.927 2.153-4.551 1.816-5.59-.338-1.039-1.477-3.455-4.756-3.455h-23.53c-2.716 0-4.643 2.651-3.803 5.236zM219.205 211.948c-1.013 3.118.933 4.948 1.816 5.59.884.643 3.224 1.93 5.878 0l19.036-13.83c2.198-1.597 2.199-4.875 0-6.472l-13.304-9.666c-2.198-1.597-5.316-.585-6.155 2zM226.549 137.569c.84-2.584-1.087-5.236-3.804-5.236h-23.53c-3.279 0-4.418 2.417-4.756 3.455-.337 1.039-.836 3.663 1.816 5.59l19.036 13.831c2.198 1.597 5.316.585 6.155-2z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M399 0H128a8 8 0 0 0-8 8v366a8 8 0 0 0 8 8h271c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24zM287.064 325H174a8 8 0 0 1 0-16h113.064a8 8 0 0 1 0 16zM354 325h-19.581a8 8 0 0 1 0-16H354a8 8 0 0 1 0 16zm-90-48c-65.617 0-119-53.383-119-119S198.382 39 264 39s119 53.383 119 119-53.383 119-119 119z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M268.755 88.718c-1.014-3.118-3.663-3.455-4.755-3.455s-3.741.337-4.755 3.455l-7.271 22.378c-.84 2.584 1.087 5.236 3.804 5.236h16.444c2.717 0 4.644-2.652 3.804-5.236z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M264 55c-56.794 0-103 46.206-103 103s46.206 103 103 103 103-46.206 103-103S320.794 55 264 55zm77.129 99.322-27.696 20.123 10.579 32.559c6.288 19.352-15.861 35.432-32.315 23.479L264 210.359l-27.696 20.123c-16.443 11.948-38.607-4.116-32.315-23.479l10.579-32.559-27.696-20.123c-16.446-11.947-8.016-37.99 12.344-37.99h34.234l10.579-32.559c6.282-19.333 33.652-19.363 39.943 0l10.579 32.559h34.234c20.327.002 28.816 26.025 12.344 37.991z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="as_service_box as_text_left">
                        <div class="as_service_inner_content">
                            <h4 class="as_subheading">
                                <a href="{{ url('horoscope_details') }}">gem stone</a>
                            </h4>
                            <p class="">
                                Lorem ipsum dolor sit <br>amet, consectetur
                            </p>
                        </div>
                        <div class="as_service_inner_icon">
                            <span class="as_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M162.982 342.302c7.328-16.395 15.355-32.476 23.798-48.351l-97.092-72.814C51.861 288.892 19.517 362.587 0 438.363zM314.887 339.629A761.125 761.125 0 0 0 256 236.768a761.293 761.293 0 0 0-58.887 102.861 858.816 858.816 0 0 0 117.774 0zM241 371.312c-20.874-.357-41.871-1.339-62.783-3.177L15.366 464.119C88.233 481.836 166.161 489.982 241 491.092zM271 206.033a789.416 789.416 0 0 1 39.613 61.386l96.275-72.206C369.036 132.41 323.98 73.888 271.674 21.582l-.674-.674zM333.783 368.135c-20.912 1.838-41.909 2.82-62.783 3.177v119.78c74.839-1.11 152.767-9.255 225.636-26.973zM201.387 267.421A789.453 789.453 0 0 1 241 206.033V20.908l-.674.674c-52.306 52.306-97.365 110.83-135.216 173.635zM325.219 293.951c8.443 15.875 16.47 31.956 23.798 48.351L512 438.363c-19.517-75.776-51.865-149.475-89.691-217.229z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="as_service_box as_text_left">
                        <div class="as_service_inner_content">
                            <h4 class="as_subheading">
                                <a href="{{ url('horoscope_details') }}">vastu tips</a>
                            </h4>
                            <p class="as_paddingBottom10">
                                Lorem ipsum dolor sit <br>amet, consectetur
                            </p>
                        </div>
                        <div class="as_service_inner_icon">
                            <span class="as_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="hovered-paths">
                                    <g>
                                        <path
                                            d="M436.307 75.693c-23.394-23.408-50.669-41.792-81.05-54.639l-11.689 27.627c26.807 11.338 50.874 27.554 71.528 48.223 20.67 20.654 36.885 44.721 48.223 71.528l27.627-11.689c-12.847-30.381-31.23-57.656-54.639-81.05zM156.742 21.053c-30.381 12.847-57.656 31.23-81.05 54.639-23.408 23.394-41.792 50.669-54.639 81.05l27.627 11.689c11.339-26.806 27.554-50.873 48.223-71.528 20.654-20.669 44.722-36.885 71.528-48.223l-11.689-27.627zM96.904 415.096c-20.67-20.654-36.885-44.721-48.223-71.528l-27.627 11.689c12.847 30.381 31.23 57.656 54.639 81.05 23.394 23.408 50.669 41.792 81.05 54.639l11.689-27.627c-26.807-11.338-50.874-27.554-71.528-48.223zM463.32 343.569c-11.339 26.806-27.554 50.873-48.223 71.528-20.654 20.669-44.722 36.885-71.528 48.223l11.689 27.627c30.381-12.847 57.656-31.23 81.05-54.639 23.408-23.394 41.792-50.669 54.639-81.05l-27.627-11.689zM324.306 187.694 256 0l-68.306 187.694L0 256l187.694 68.306L256 512l68.306-187.694L512 256l-187.694-68.306zM256 301c-24.814 0-45-20.186-45-45s20.186-45 45-45 45 20.186 45 45-20.186 45-45 45z"
                                            fill="#ffffff" data-original="#000000" class="hovered-path"></path>
                                        <path
                                            d="m102.938 102.938 26.177 75.215 35.376-13.662 13.662-35.376zM164.491 347.509l-35.376-13.662-26.177 75.215 75.215-26.179zM382.885 333.847l-35.376 13.662-13.662 35.374 75.215 26.179zM333.847 129.115l13.662 35.376 35.376 13.662 26.177-75.215z"
                                            fill="#ffffff" data-original="#000000" class="hovered-path"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-dm-12">
                    <div class="as_service_img">
                        <img src="{{asset('newhome/assets/images/service_img2.png')}}" alt="" class="as_service_circle img-responsive">
                        <img src="{{asset('newhome/assets/images/service_img1.png')}}" alt="" class="as_service_img img-responsive">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-dm-12">
                    <div class="as_service_box as_text_rigth">
                        <div class="as_service_inner_icon">
                            <span class="as_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M420.942 106c0-57.891-47.109-106-105-106-22.559 0-43.638 9.653-60 27.026C239.579 9.653 218.5 0 195.942 0c-57.891 0-105 48.109-105 106 0 58.228 42.729 88.286 92.212 123.105 20.405 14.355 41.514 29.209 62.959 47.813l9.814 8.525 9.829-8.511c24.243-20.977 47.3-37.397 67.632-51.885 48.911-34.818 87.554-62.328 87.554-119.047zm-120 45h-30v30h-30v-30h-30v-30h30V91h30v30h30zM493.942 137.199c-30.601 0-38.5 142.2-39.101 145.201-3.047 20.836-17.725 51.68-42.513 70.252l-64.971 47.173-17.988-24.023 64.971-47.159c25.737-19.296 37.467-52.244 5.301-52.244-28.808 0-82.657 33.353-98.621 46.584a83.16 83.16 0 0 0-30.079 64.036V512h90c0-14.401 7.8-30.101 19.799-45.101 12.601-16.5 30.601-33.3 49.2-50.4 35.4-33.3 72.1-67.5 76.901-102.299 2.85-23.376 5.217-63.468 5.099-99.2-.13-40.015-3.52-76.508-17.998-77.801zM207.342 320.2c-42.301-29.101-74.399-43.801-95.099-43.801-32.166 0-20.436 32.948 5.301 52.244l64.971 47.159-17.988 24.023-64.971-47.173c-24.79-18.572-39.468-49.416-42.515-70.252-.601-3.001-8.5-145.201-39.101-145.201-16.8 1.5-18.6 50.4-17.699 97.2.601 34.2 3.3 67.5 4.799 79.801 4.801 34.799 41.501 69 76.901 102.299 18.6 17.1 36.599 33.9 49.2 50.4 11.999 15 19.799 30.7 19.799 45.101h90V387.618a84.426 84.426 0 0 0-33.598-67.418z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="as_service_inner_content">
                            <h4 class="as_subheading">
                                <a href="{{ url('horoscope_details') }}">health tips</a>
                            </h4>
                            <p class="as_paddingBottom10">
                                Lorem ipsum dolor sit <br>amet, consectetur
                            </p>
                        </div>
                    </div>
                    <div class="as_service_box as_text_rigth">
                        <div class="as_service_inner_icon">
                            <span class="as_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M412.838 0H99.162L0 99.162v313.677L99.162 512h313.677L512 412.838V99.162zM311.25 183.065l42.826-38.561a52.742 52.742 0 0 0 17.424-39.135c0-8.34-6.785-15.125-15.125-15.125s-15.125 6.785-15.125 15.125v15h-30v-15c0-24.882 20.243-45.125 45.125-45.125S401.5 80.486 401.5 105.368c0 23.389-9.969 45.78-27.35 61.43l-15.487 13.945H401.5v30h-90.25zM110.5 60.243h60.125v150.5h-30v-120.5H110.5zm90.25 346.382c0 24.882-20.243 45.125-45.125 45.125S110.5 431.507 110.5 406.625v-15h30v15c0 8.34 6.785 15.125 15.125 15.125s15.125-6.785 15.125-15.125-6.785-15.125-15.125-15.125h-15v-30h15c8.34 0 15.125-6.785 15.125-15.125s-6.785-15.125-15.125-15.125-15.125 6.785-15.125 15.125v15h-30v-15c0-24.882 20.243-45.125 45.125-45.125s45.125 20.243 45.125 45.125c0 11.568-4.38 22.13-11.563 30.125 7.183 7.995 11.563 18.557 11.563 30.125zm200.75 15v30.125h-30v-30.125h-60.25v-23.784l36.505-94.974 28.002 10.763-29.979 77.995H371.5V355.5h30zM451.75 271H271v180.75h-30V271H60.25v-30H241V60.25h30V241h180.75z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M412.838 0H99.162L0 99.162v313.677L99.162 512h313.677L512 412.838V99.162zM311.25 183.065l42.826-38.561a52.742 52.742 0 0 0 17.424-39.135c0-8.34-6.785-15.125-15.125-15.125s-15.125 6.785-15.125 15.125v15h-30v-15c0-24.882 20.243-45.125 45.125-45.125S401.5 80.486 401.5 105.368c0 23.389-9.969 45.78-27.35 61.43l-15.487 13.945H401.5v30h-90.25zM110.5 60.243h60.125v150.5h-30v-120.5H110.5zm90.25 346.382c0 24.882-20.243 45.125-45.125 45.125S110.5 431.507 110.5 406.625v-15h30v15c0 8.34 6.785 15.125 15.125 15.125s15.125-6.785 15.125-15.125-6.785-15.125-15.125-15.125h-15v-30h15c8.34 0 15.125-6.785 15.125-15.125s-6.785-15.125-15.125-15.125-15.125 6.785-15.125 15.125v15h-30v-15c0-24.882 20.243-45.125 45.125-45.125s45.125 20.243 45.125 45.125c0 11.568-4.38 22.13-11.563 30.125 7.183 7.995 11.563 18.557 11.563 30.125zm200.75 15v30.125h-30v-30.125h-60.25v-23.784l36.505-94.974 28.002 10.763-29.979 77.995H371.5V355.5h30zM451.75 271H271v180.75h-30V271H60.25v-30H241V60.25h30V241h180.75z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </svg>
                            </span>
                        </div>
                        <div class="as_service_inner_content">
                            <h4 class="as_subheading">
                                <a href="{{ url('horoscope_details') }}">Numerology tips</a>
                            </h4>
                            <p class="as_paddingBottom10">
                                Lorem ipsum dolor sit <br>amet, consectetur
                            </p>
                        </div>
                    </div>
                    <div class="as_service_box as_text_rigth">
                        <div class="as_service_inner_icon">
                            <span class="as_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    x="0" y="0" viewBox="0 0 511 511.65" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="m325.719 391.688-32.84-185.997-31.16-176.55C258.313 9.965 240.027-2.83 220.848.539L29.465 34.348C10.293 37.754-2.504 56.039.863 75.218L32.29 253.095 64.863 437.77c3.407 19.171 21.692 31.968 40.871 28.601l191.383-33.812c19.172-3.407 31.969-21.692 28.602-40.871zM194.629 29.844l16.242-2.91c13.805-2.391 26.957 6.785 29.484 20.566l2.825 16.332a8.838 8.838 0 0 1-1.453 6.602 8.809 8.809 0 0 1-5.696 3.636c-.496.098-1 .157-1.504.18a8.971 8.971 0 0 1-8.738-7.328l-2.824-16.332a7.52 7.52 0 0 0-3.18-4.942 7.671 7.671 0 0 0-5.824-1.324l-16.332 2.91a8.828 8.828 0 0 1-3-17.39zM121.71 93.14l8.121-1.414a8.717 8.717 0 0 1 10.242 7.152 8.838 8.838 0 0 1-1.453 6.601 8.837 8.837 0 0 1-5.7 3.637l-8.12 1.414a9.767 9.767 0 0 1-1.586.086 8.829 8.829 0 0 1-8.559-8.07 8.825 8.825 0 0 1 7.055-9.406zm-1.766 34.515a8.803 8.803 0 0 1-1.453 6.602 8.838 8.838 0 0 1-5.695 3.637 9.842 9.842 0 0 1-1.59.09 8.827 8.827 0 0 1-8.648-7.329l-1.414-8.12a8.838 8.838 0 0 1 3.007-8.306 8.834 8.834 0 0 1 14.383 5.215zm-18.8-56.144a8.831 8.831 0 0 1 10.152 7.238l1.5 8.121a8.939 8.939 0 0 1-7.238 10.242c-.496.075-1 .106-1.5.086a8.725 8.725 0 0 1-8.653-7.238l-1.5-8.211c-.793-4.816 2.434-9.375 7.239-10.238zM80.93 100.289l8.21-1.41c4.723-.676 9.13 2.531 9.942 7.238a8.825 8.825 0 0 1-6.941 10.149l-8.121 1.414a9.7 9.7 0 0 1-1.5.175 8.828 8.828 0 0 1-1.59-17.566zm-33.368-1.941a8.838 8.838 0 0 1-1.453 6.601 8.817 8.817 0 0 1-5.699 3.637 9.436 9.436 0 0 1-1.59.18 8.827 8.827 0 0 1-8.648-7.329l-2.914-16.332c-2.387-13.785 6.8-26.914 20.566-29.394l16.332-2.824a8.751 8.751 0 0 1 6.621 1.425 8.791 8.791 0 0 1 3.621 5.723 8.83 8.83 0 0 1-7.152 10.242l-16.332 2.825a7.524 7.524 0 0 0-4.941 3.175 7.61 7.61 0 0 0-1.325 5.828zm84.391 338.715-16.242 2.914c-13.79 2.312-26.895-6.832-29.484-20.57l-2.825-16.333a8.822 8.822 0 0 1 3.008-8.3 8.835 8.835 0 0 1 8.695-1.547 8.848 8.848 0 0 1 5.688 6.757l2.824 16.332a7.855 7.855 0 0 0 9.004 6.27l16.328-2.914c4.727-.672 9.133 2.535 9.946 7.238s-2.266 9.2-6.942 10.152zm55.262-104.696a8.607 8.607 0 0 1-7.242 3.707 8.933 8.933 0 0 1-5.207-1.676c-5.473-3.796-13.328-15.363-7.68-34.164a19.105 19.105 0 0 0 .266-12.535c-1.59.09-3.266.176-4.946.176a46.855 46.855 0 0 1-7.855-.617 37.082 37.082 0 0 1-11.387 18.539c-8.297 7.855-6.445 13.328-6.355 13.594a8.621 8.621 0 0 1 .195 6.66 8.61 8.61 0 0 1-4.61 4.816 7.59 7.59 0 0 1-3.62.883 9.062 9.062 0 0 1-8.122-5.297c-2.914-6.094-3.882-19.953 10.418-33.457a18.022 18.022 0 0 0 6.446-10.86 57.997 57.997 0 0 1-8.477-4.855 21.848 21.848 0 0 1-2.383-1.851 36.792 36.792 0 0 1-19.066 10.414c-11.125 2.648-12.274 8.3-12.36 8.562a8.66 8.66 0 0 1-8.738 7.86h-.797a9.058 9.058 0 0 1-8.03-9.801c.616-6.707 6.706-19.242 25.772-23.746a18.342 18.342 0 0 0 11.036-6.09 52.98 52.98 0 0 1-6.09-11.211 37.498 37.498 0 0 1-21.715-.617c-10.86-3.266-14.742 1.058-14.918 1.234a8.554 8.554 0 0 1-7.063 3.621 9.21 9.21 0 0 1-5.12-1.59 8.966 8.966 0 0 1-3.442-5.207 9.319 9.319 0 0 1 1.41-7.242c3.797-5.558 15.36-13.328 34.164-7.765a18.571 18.571 0 0 0 12.535.265 55.617 55.617 0 0 1 .442-12.715 38.054 38.054 0 0 1-18.54-11.386c-7.769-8.297-13.327-6.532-13.503-6.446a8.662 8.662 0 0 1-11.566-4.324 8.94 8.94 0 0 1 4.413-11.828c6.09-2.824 19.95-3.797 33.457 10.418a17.64 17.64 0 0 0 10.77 6.441 68.002 68.002 0 0 1 4.945-8.472 21.822 21.822 0 0 1 1.762-2.297 37.805 37.805 0 0 1-10.328-19.156c-2.648-11.032-8.297-12.27-8.563-12.27a8.684 8.684 0 0 1-7.765-9.621 8.903 8.903 0 0 1 9.71-7.945c6.708.53 19.243 6.62 23.833 25.777a17.919 17.919 0 0 0 6.004 10.945 56.986 56.986 0 0 1 11.21-6.004 37.498 37.498 0 0 1 .618-21.714c3.265-10.946-1.059-14.829-1.235-15.008a8.61 8.61 0 0 1-3.535-5.68 8.607 8.607 0 0 1 1.594-6.5 9.035 9.035 0 0 1 12.445-2.031c5.473 3.883 13.243 15.449 7.68 34.25a17.982 17.982 0 0 0-.266 12.535c4.27-.34 8.567-.191 12.801.441a36.45 36.45 0 0 1 11.387-18.539c8.21-7.855 6.445-13.328 6.355-13.593a8.706 8.706 0 0 1-.238-6.68 8.716 8.716 0 0 1 4.566-4.883 9.03 9.03 0 0 1 11.829 4.5c2.824 6.004 3.882 19.953-10.418 33.457a18.337 18.337 0 0 0-6.442 10.77 57.088 57.088 0 0 1 10.856 6.71 36.795 36.795 0 0 1 19.07-10.417c11.031-2.559 12.27-8.207 12.356-8.473a8.643 8.643 0 0 1 3.109-5.942 8.657 8.657 0 0 1 6.426-1.917 8.99 8.99 0 0 1 7.945 9.8c-.531 6.621-6.621 19.157-25.688 23.746-4.292.641-8.207 2.801-11.035 6.09a56.986 56.986 0 0 1 6.004 11.211 37.498 37.498 0 0 1 21.715.617c10.945 3.18 14.828-1.058 15.008-1.234a8.615 8.615 0 0 1 5.664-3.574 8.63 8.63 0 0 1 6.516 1.543 8.987 8.987 0 0 1 3.445 5.21 9.33 9.33 0 0 1-1.414 7.239c-3.883 5.473-15.36 13.328-34.25 7.766a18.717 18.717 0 0 0-12.535-.352 52.523 52.523 0 0 1-.442 12.887 37.01 37.01 0 0 1 18.625 11.3c7.77 8.297 13.328 6.532 13.508 6.446a8.599 8.599 0 0 1 6.691-.278 8.597 8.597 0 0 1 4.872 4.602 9.047 9.047 0 0 1-4.414 11.828 21.37 21.37 0 0 1-8.739 1.68 34.364 34.364 0 0 1-24.804-12.094 17.209 17.209 0 0 0-10.77-6.445 62.64 62.64 0 0 1-4.855 8.387 21.883 21.883 0 0 1-1.856 2.382 37.103 37.103 0 0 1 10.418 19.157c2.648 11.035 8.297 12.27 8.473 12.27a8.665 8.665 0 0 1 7.855 9.535 8.942 8.942 0 0 1-9.004 8.03h-.703c-6.71-.617-19.246-6.707-23.836-25.777a18.363 18.363 0 0 0-6.09-11.031 53.075 53.075 0 0 1-11.21 6.09 37.466 37.466 0 0 1-.622 21.715c-3.175 10.945 1.063 14.742 1.239 14.918 1.918 1.32 3.214 3.363 3.597 5.66s-.183 4.652-1.566 6.523zm46.43 10.594a8.927 8.927 0 0 1-7.239 10.238 8.02 8.02 0 0 1-1.5.09 8.72 8.72 0 0 1-8.648-7.328l-1.504-8.121a8.934 8.934 0 0 1 7.152-10.238 8.803 8.803 0 0 1 6.602 1.453 8.809 8.809 0 0 1 3.637 5.695zm-20.657 29.394-8.12 1.415a9.644 9.644 0 0 1-1.5.175 8.825 8.825 0 0 1-9.204-8.023 8.825 8.825 0 0 1 7.613-9.543l8.211-1.414a8.828 8.828 0 0 1 3 17.39zm20.657 21.54a9.853 9.853 0 0 1-1.586.175 8.825 8.825 0 0 1-8.653-7.324l-1.414-8.121a8.77 8.77 0 0 1 1.43-6.621 8.752 8.752 0 0 1 5.723-3.621 8.838 8.838 0 0 1 6.601 1.453 8.807 8.807 0 0 1 3.637 5.7l1.414 8.12a8.77 8.77 0 0 1-7.152 10.239zm10.417-27.188a8.828 8.828 0 0 1-1.5-17.48l8.122-1.5c4.8-.852 9.386 2.347 10.238 7.152.855 4.8-2.348 9.387-7.149 10.238l-8.12 1.5a9.842 9.842 0 0 1-1.59.09zm34.606 44.488-16.242 2.828a9.95 9.95 0 0 1-1.59.176 8.828 8.828 0 0 1-1.5-17.566l16.328-2.824a7.542 7.542 0 0 0 4.945-3.18 7.623 7.623 0 0 0 1.325-5.828l-2.914-16.242c-.82-4.793 2.367-9.356 7.152-10.239a8.774 8.774 0 0 1 10.238 7.149l2.914 16.332a25.394 25.394 0 0 1-20.656 29.394zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M188.273 261.129c0-.09.176-.176.266-.266.36-.347.742-.672 1.145-.972a41.598 41.598 0 0 0 10.859-15.536.284.284 0 0 1 .09-.175c.105-.453.254-.899.441-1.325a39.624 39.624 0 0 0 1.766-19.863 2.159 2.159 0 0 1-.09-.707 40.63 40.63 0 0 0-8.297-18.36 10.908 10.908 0 0 1-1.324-1.675 42.4 42.4 0 0 0-15.89-10.95 5.765 5.765 0 0 1-1.15-.44 40.457 40.457 0 0 0-19.948-1.766 6.88 6.88 0 0 1-1.325.18c-.09 0-.175.085-.265.085a39.91 39.91 0 0 0-17.656 8.297l-.262.266a38.262 38.262 0 0 0-7.504 8.035 39.945 39.945 0 0 0-4.504 8.297c-.18.695-.418 1.371-.707 2.031a40.491 40.491 0 0 0-1.676 19.508.988.988 0 0 1 .09.707 39.784 39.784 0 0 0 8.648 18.715 38.965 38.965 0 0 0 16.243 12.004c-.614-.102-1.23-.16-1.852-.176.625 0 1.25.09 1.852.266h.09c.363.046.718.132 1.058.261.266.09.617.266.973.356a39.56 39.56 0 0 0 19.597 1.765c.176 0 .442-.09.704-.09a41.117 41.117 0 0 0 18.363-8.296.674.674 0 0 1 .265-.176zM331.281 321.332c24.254-19.93 29.48-54.988 12.094-81.125a57.396 57.396 0 0 0-30.547-23.219zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="m334.633 340.664 3.887 22.156c40.335-2.992 72.335-35.187 75.085-75.539 2.75-40.355-24.585-76.594-64.14-85.031a75.252 75.252 0 0 0-26.309-.266 75.132 75.132 0 0 1 34.961 28.422 79.068 79.068 0 0 1 11.363 60.051 79.04 79.04 0 0 1-34.847 50.207zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                        <path
                                            d="M483.113 85.281 295.527 50.238a35.356 35.356 0 0 0-12.183-.18l5.035 28.516a25.46 25.46 0 0 1 16.242-2.383l16.066 3c4.801.903 7.961 5.528 7.063 10.329-.902 4.8-5.527 7.964-10.328 7.062l-16.067-3a7.437 7.437 0 0 0-8.742 6l-.261 1.414 15.27 86.598a93.035 93.035 0 0 1 45.108-2.649c47.883 10.07 81.23 53.61 78.473 102.465-2.758 48.852-40.793 88.363-89.508 92.98l1.414 8.208a52.714 52.714 0 0 1-.09 18.98l7.415 1.41a8.827 8.827 0 0 1 7.043 9.453 8.826 8.826 0 0 1-8.63 8.028 9.416 9.416 0 0 1-1.59-.09l-8.034-1.5a10.154 10.154 0 0 1-2.293-.793 52.761 52.761 0 0 1-36.813 25.863L199.22 467.781a34.201 34.201 0 0 0 16.683 8.211l187.676 35.043a35.157 35.157 0 0 0 26.445-5.562 35.174 35.174 0 0 0 14.692-22.684l66.648-356.281a35.305 35.305 0 0 0-5.578-26.469 35.3 35.3 0 0 0-22.672-14.758zm-92.511 331.211a8.779 8.779 0 0 1 5.699 3.684 8.773 8.773 0 0 1 1.363 6.644 8.823 8.823 0 0 1-8.652 7.239 9.045 9.045 0 0 1-1.59-.176l-8.031-1.5a8.845 8.845 0 0 1-6.739-5.723 8.85 8.85 0 0 1 1.59-8.695 8.845 8.845 0 0 1 8.324-2.973zm-29.84-21.539a8.825 8.825 0 0 1 5.652-7.258 8.823 8.823 0 0 1 9.04 1.707 8.823 8.823 0 0 1 2.612 8.817l-1.5 8.035a8.83 8.83 0 0 1-8.652 7.238 9.852 9.852 0 0 1-1.59-.176 8.833 8.833 0 0 1-7.063-10.328zm8.3 51.465a8.83 8.83 0 0 1-8.652 7.152 9.416 9.416 0 0 1-1.59-.09c-2.308-.425-4.351-1.757-5.675-3.695s-1.825-4.324-1.387-6.633l1.504-8.03a8.827 8.827 0 1 1 17.3 3.265zm54.731 18.539c-2.207 11.879-12.547 20.512-24.629 20.566a26.479 26.479 0 0 1-4.68-.441l-16.066-3a8.84 8.84 0 0 1 3.18-17.39l16.066 3.003a7.595 7.595 0 0 0 8.828-6.004l3-16.066a8.833 8.833 0 0 1 5.649-7.262 8.83 8.83 0 0 1 11.652 10.528zm-13.508-335.094a8.846 8.846 0 0 1 10.328-7.062 8.844 8.844 0 0 1 7.063 10.328l-1.5 8.031a8.827 8.827 0 0 1-8.653 7.152 10.456 10.456 0 0 1-1.675-.09c-4.786-.925-7.934-5.53-7.063-10.327zm-13.504 31.426-8.035-1.5c-4.8-.902-7.965-5.527-7.062-10.328a8.846 8.846 0 0 1 10.328-7.063l8.035 1.5a8.827 8.827 0 0 1-1.59 17.477 10.454 10.454 0 0 1-1.676-.086zm21.89 20.04a8.823 8.823 0 0 1-8.648 7.148 10.479 10.479 0 0 1-1.68-.086 8.905 8.905 0 0 1-7.062-10.332l1.5-8.032c.903-4.8 5.528-7.965 10.328-7.062a8.846 8.846 0 0 1 7.063 10.328zm19.95-12.45a10.926 10.926 0 0 1-1.676-.086l-8.03-1.504c-4.806-.898-7.966-5.523-7.063-10.328a8.844 8.844 0 0 1 10.328-7.059l8.03 1.5c4.786.926 7.935 5.532 7.063 10.328a8.828 8.828 0 0 1-8.652 7.149zm46.79-33.277-3.005 16.066a8.823 8.823 0 0 1-8.648 7.238 9.731 9.731 0 0 1-1.68-.18c-4.785-.925-7.933-5.53-7.062-10.328l3.004-16.066a7.464 7.464 0 0 0-6.004-8.738l-16.067-3c-4.8-.903-7.965-5.528-7.062-10.328a8.846 8.846 0 0 1 10.328-7.063l16.066 3a25.192 25.192 0 0 1 16.156 10.527 25.2 25.2 0 0 1 3.973 18.872zm0 0"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="as_service_inner_content">
                            <h4 class="as_subheading">
                                <a href="{{ url('horoscope_details') }}">Kundli Dosha</a>
                            </h4>
                            <p class="as_paddingBottom10">
                                Lorem ipsum dolor sit <br>amet, consectetur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service section end -->

    <!-- Blog section -->
    <section class="as_blog_wrapper as_section_dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 class="as_heading">Latest Articles</h1>
                    <span class="as_title_line">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="193px" height="21px">
                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                d="M188.852,19.425 L185.832,16.418 L177.218,16.418 C176.896,17.339 176.018,18.001 174.984,18.001 C173.949,18.001 173.071,17.339 172.749,16.418 L170.782,16.418 C170.503,16.941 169.951,17.298 169.314,17.298 C168.677,17.298 168.125,16.941 167.846,16.418 L155.583,16.418 C155.261,17.339 154.383,18.001 153.349,18.001 C152.314,18.001 151.436,17.339 151.114,16.418 L149.147,16.418 C148.868,16.941 148.316,17.298 147.679,17.298 C147.042,17.298 146.490,16.941 146.211,16.418 L136.245,16.418 L136.245,14.868 L146.211,14.868 C146.490,14.344 147.042,13.987 147.679,13.987 C148.316,13.987 148.868,14.344 149.147,14.868 L151.114,14.868 C151.436,13.947 152.314,13.284 153.349,13.284 C154.383,13.284 155.261,13.947 155.583,14.868 L167.846,14.868 C168.125,14.344 168.677,13.987 169.314,13.987 C169.951,13.987 170.503,14.344 170.782,14.868 L172.749,14.868 C173.071,13.947 173.949,13.284 174.984,13.284 C176.018,13.284 176.896,13.947 177.218,14.868 L185.132,14.868 L188.852,11.163 L193.000,15.294 L188.852,19.425 ZM128.736,20.194 C127.557,20.835 126.143,21.176 124.757,20.897 C123.398,20.617 122.192,19.831 121.458,18.689 C121.093,18.118 120.880,17.457 120.844,16.780 C120.809,16.099 120.996,15.446 121.304,14.890 C121.612,14.331 122.061,13.865 122.583,13.536 C123.112,13.216 123.735,13.072 124.314,13.128 C123.135,13.282 122.292,14.207 121.963,15.186 C121.611,16.189 121.842,17.221 122.499,17.947 C123.122,18.685 124.082,19.149 125.011,19.213 C125.929,19.277 126.895,18.995 127.693,18.450 C129.309,17.367 130.316,15.431 130.284,13.527 C130.275,12.580 130.047,11.681 129.555,10.915 C129.069,10.146 128.353,9.501 127.544,9.142 C126.749,8.763 125.863,8.660 124.945,8.825 C124.030,8.995 123.112,9.424 122.240,9.989 C120.459,11.079 119.045,12.857 117.271,14.481 C116.393,15.293 115.438,16.096 114.336,16.707 C113.228,17.309 112.050,17.725 110.836,17.941 C108.429,18.352 105.811,17.946 103.952,16.480 C106.100,17.426 108.459,17.375 110.532,16.695 C111.573,16.367 112.559,15.878 113.421,15.260 C114.280,14.631 115.069,13.887 115.814,13.051 C116.561,12.218 117.284,11.324 118.096,10.448 C118.893,9.566 119.808,8.683 120.843,7.946 C121.879,7.205 123.093,6.610 124.456,6.321 C125.811,6.038 127.347,6.167 128.654,6.779 C129.953,7.393 131.008,8.389 131.736,9.583 C132.468,10.783 132.831,12.216 132.759,13.578 C132.636,16.292 131.139,18.911 128.736,20.194 ZM108.887,15.270 C107.246,15.973 105.536,16.364 103.818,16.480 C105.398,15.806 106.932,15.098 108.263,14.157 C109.605,13.238 110.727,12.106 111.473,10.801 C112.196,9.484 112.618,8.019 112.443,6.653 C112.350,5.966 112.191,5.353 111.840,4.783 C111.498,4.220 111.040,3.706 110.498,3.335 C109.965,2.958 109.367,2.674 108.766,2.602 C108.169,2.506 107.579,2.585 106.967,2.830 C105.749,3.307 104.635,4.462 104.008,5.700 C103.700,6.331 103.550,7.018 103.576,7.692 C103.601,8.375 103.829,9.078 104.255,9.630 C104.663,10.207 105.297,10.590 106.058,10.712 C106.809,10.831 107.655,10.671 108.317,10.114 C107.421,11.675 104.822,11.934 103.322,10.512 C102.573,9.839 102.090,8.916 101.874,7.932 C101.657,6.927 101.794,5.891 102.105,4.953 C102.422,4.010 102.933,3.156 103.579,2.426 C104.220,1.692 105.002,1.042 105.943,0.579 C106.874,0.115 108.022,-0.087 109.109,0.046 C110.199,0.173 111.189,0.628 112.036,1.223 C112.875,1.836 113.554,2.628 114.064,3.523 C114.574,4.415 114.869,5.475 114.911,6.469 C114.989,8.493 114.306,10.411 113.178,11.913 C112.066,13.453 110.502,14.545 108.887,15.270 ZM96.222,16.983 C94.201,16.983 92.562,15.351 92.562,13.338 C92.562,11.325 94.201,9.694 96.222,9.694 C98.243,9.694 99.881,11.325 99.881,13.338 C99.881,15.351 98.243,16.983 96.222,16.983 ZM89.677,10.512 C88.177,11.934 85.579,11.675 84.682,10.114 C85.344,10.671 86.191,10.831 86.941,10.712 C87.703,10.590 88.337,10.207 88.744,9.630 C89.171,9.078 89.398,8.375 89.424,7.692 C89.449,7.018 89.299,6.331 88.991,5.700 C88.364,4.462 87.250,3.307 86.032,2.830 C85.421,2.585 84.831,2.506 84.234,2.602 C83.632,2.674 83.034,2.958 82.502,3.335 C81.959,3.706 81.501,4.220 81.159,4.783 C80.808,5.353 80.649,5.966 80.556,6.653 C80.382,8.019 80.803,9.484 81.526,10.801 C82.273,12.106 83.394,13.238 84.736,14.157 C86.068,15.098 87.601,15.806 89.181,16.480 C87.464,16.364 85.754,15.973 84.113,15.270 C82.498,14.545 80.934,13.453 79.822,11.913 C78.693,10.411 78.010,8.493 78.088,6.469 C78.131,5.475 78.426,4.415 78.935,3.523 C79.446,2.628 80.124,1.836 80.964,1.223 C81.810,0.628 82.800,0.173 83.891,0.046 C84.978,-0.087 86.126,0.115 87.057,0.579 C87.998,1.042 88.779,1.692 89.420,2.426 C90.066,3.156 90.577,4.010 90.894,4.953 C91.206,5.891 91.342,6.927 91.125,7.932 C90.909,8.916 90.426,9.839 89.677,10.512 ZM82.468,16.695 C84.541,17.375 86.899,17.426 89.047,16.480 C87.189,17.946 84.571,18.352 82.164,17.941 C80.950,17.725 79.772,17.309 78.663,16.707 C77.562,16.096 76.606,15.293 75.729,14.481 C73.954,12.857 72.541,11.079 70.759,9.989 C69.887,9.424 68.969,8.995 68.054,8.825 C67.136,8.660 66.250,8.763 65.456,9.142 C64.646,9.501 63.931,10.146 63.445,10.915 C62.952,11.681 62.724,12.580 62.715,13.527 C62.683,15.431 63.691,17.367 65.306,18.450 C66.105,18.995 67.070,19.277 67.989,19.213 C68.918,19.149 69.877,18.685 70.500,17.947 C71.157,17.221 71.388,16.189 71.037,15.186 C70.708,14.207 69.864,13.282 68.685,13.128 C69.265,13.072 69.887,13.216 70.417,13.536 C70.938,13.865 71.388,14.331 71.695,14.890 C72.004,15.446 72.191,16.099 72.155,16.780 C72.119,17.457 71.906,18.118 71.541,18.689 C70.808,19.831 69.601,20.617 68.242,20.897 C66.856,21.176 65.443,20.835 64.263,20.194 C61.860,18.911 60.363,16.292 60.240,13.578 C60.169,12.216 60.532,10.783 61.263,9.583 C61.991,8.389 63.047,7.393 64.345,6.779 C65.652,6.167 67.188,6.038 68.543,6.321 C69.906,6.610 71.120,7.205 72.156,7.946 C73.192,8.683 74.106,9.566 74.904,10.448 C75.715,11.324 76.439,12.218 77.185,13.051 C77.930,13.887 78.719,14.631 79.578,15.260 C80.440,15.878 81.426,16.367 82.468,16.695 ZM45.320,17.298 C44.684,17.298 44.131,16.941 43.852,16.418 L41.885,16.418 C41.563,17.339 40.686,18.001 39.651,18.001 C38.616,18.001 37.739,17.339 37.416,16.418 L25.154,16.418 C24.874,16.941 24.322,17.298 23.685,17.298 C23.049,17.298 22.496,16.941 22.217,16.418 L20.250,16.418 C19.928,17.339 19.051,18.001 18.016,18.001 C16.981,18.001 16.104,17.339 15.781,16.418 L7.167,16.418 L4.147,19.425 L-0.001,15.294 L4.147,11.163 L7.867,14.868 L15.781,14.868 C16.103,13.947 16.981,13.284 18.016,13.284 C19.051,13.284 19.928,13.947 20.250,14.868 L22.217,14.868 C22.496,14.344 23.049,13.987 23.685,13.987 C24.322,13.987 24.875,14.344 25.154,14.868 L37.416,14.868 C37.738,13.947 38.616,13.284 39.651,13.284 C40.686,13.284 41.563,13.947 41.885,14.868 L43.852,14.868 C44.131,14.344 44.684,13.987 45.320,13.987 C45.957,13.987 46.510,14.344 46.789,14.868 L56.755,14.868 L56.755,16.418 L46.789,16.418 C46.510,16.941 45.957,17.298 45.320,17.298 Z" />
                        </svg>
                    </span>
                    <p class="as_text_color">
                        It is a long established fact that a reader will be distracted by the readable content of a
                        page <br>when looking at its layout. The point of using Lorem Ipsum .
                    </p>
                    <div class="v3_blog_wrapper">
                        <div class="row text-left">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="as_blog_box">
                                    <div class="as_blog_img">
                                        <a href="blog_detail.html">
                                            <img src="{{asset('newhome/assets/images/blog1.png')}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="as_blog_detail as_blog_detail_bg">
                                        <ul class="as_blog_admin">
                                            <li>
                                                <a href="javascript:;" class="as_text_color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                                        viewBox="0 0 512 512.002"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <path
                                                                d="M210.352 246.633c33.882 0 63.222-12.153 87.195-36.13 23.973-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.133 87.195 23.977 23.969 53.313 36.125 87.188 36.125zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.308-10.34-7.808-20.55-13.37-30.336-5.774-10.156-12.555-19-20.165-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.039 5.34-10.972 0-22.086-1.797-33.047-5.34-11.21-3.622-20.296-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.75-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.605 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.059 11.476-3.457 22.363-4.149 32.363A438.821 438.821 0 0 0 0 423.949c0 26.727 8.496 48.363 25.25 64.32 16.547 15.747 38.441 23.735 65.066 23.735h246.532c26.625 0 48.511-7.984 65.062-23.734 16.758-15.946 25.254-37.586 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm0 0"
                                                                fill="#8b89a3" data-original="#000000" class="">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    By - Admin

                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="as_text_color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                                        viewBox="0 0 48 48"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <path fill-rule="evenodd"
                                                                d="M29.9 39.65a22.465 22.465 0 0 1-5.9.779c-11.358 0-20.5-8.325-20.5-18.467S12.642 3.5 24 3.5s20.5 8.32 20.5 18.462a17.632 17.632 0 0 1-6.55 13.533V43a1.5 1.5 0 0 1-2.442 1.166z"
                                                                fill="#8b89a3" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    0 comments

                                                </a>
                                            </li>
                                        </ul>
                                        <h4 class="as_subheading">
                                            <a href="{{ url('/blogs') }}">
                                                Consectetur adipiscing elit sedeius <br>mod tempor incididunt ut
                                                labore.
                                            </a>
                                        </h4>
                                        <p class="as_text_color">Consectetur adipiscing elit, sed desdo eiusmod
                                            tempor incididuesdeentiut labore etesde magna </p>
                                        <a href="javascript:;" class="as_btn ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="as_blog_box">
                                    <div class="as_blog_img">
                                        <a href="blog_detail.html">
                                            <img src="{{asset('newhome/assets/images/blog2.png')}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="as_blog_detail as_blog_detail_bg">
                                        <ul>
                                            <li>
                                                <a href="javascript:;" class="as_text_color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                                        viewBox="0 0 512 512.002"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <path
                                                                d="M210.352 246.633c33.882 0 63.222-12.153 87.195-36.13 23.973-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.133 87.195 23.977 23.969 53.313 36.125 87.188 36.125zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.308-10.34-7.808-20.55-13.37-30.336-5.774-10.156-12.555-19-20.165-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.039 5.34-10.972 0-22.086-1.797-33.047-5.34-11.21-3.622-20.296-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.75-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.605 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.059 11.476-3.457 22.363-4.149 32.363A438.821 438.821 0 0 0 0 423.949c0 26.727 8.496 48.363 25.25 64.32 16.547 15.747 38.441 23.735 65.066 23.735h246.532c26.625 0 48.511-7.984 65.062-23.734 16.758-15.946 25.254-37.586 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm0 0"
                                                                fill="#8b89a3" data-original="#000000" class="">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    By - Admin

                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="as_text_color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                                        viewBox="0 0 48 48"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <path fill-rule="evenodd"
                                                                d="M29.9 39.65a22.465 22.465 0 0 1-5.9.779c-11.358 0-20.5-8.325-20.5-18.467S12.642 3.5 24 3.5s20.5 8.32 20.5 18.462a17.632 17.632 0 0 1-6.55 13.533V43a1.5 1.5 0 0 1-2.442 1.166z"
                                                                fill="#8b89a3" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    0 comments

                                                </a>
                                            </li>
                                        </ul>
                                        <h4 class="as_subheading">
                                            <a href="{{ url('/blogs') }}">
                                                Consectetur adipiscing elit sedeius<br>mod tempor incididunt ut
                                                labore.
                                            </a>
                                        </h4>
                                        <p class="as_text_color">Consectetur adipiscing elit, sed desdo eiusmod
                                            tempor incididuesdeentiut labore etesde magna</p>
                                        <a href="javascript:;" class="as_btn ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="as_blog_box">
                                    <div class="as_blog_img">
                                        <a href="blog_detail.html">
                                            <img src="{{asset('newhome/assets/images/blog3.png')}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="as_blog_detail as_blog_detail_bg">
                                        <ul>
                                            <li>
                                                <a href="javascript:;" class="as_text_color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                                        viewBox="0 0 512 512.002"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <path
                                                                d="M210.352 246.633c33.882 0 63.222-12.153 87.195-36.13 23.973-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.133 87.195 23.977 23.969 53.313 36.125 87.188 36.125zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.308-10.34-7.808-20.55-13.37-30.336-5.774-10.156-12.555-19-20.165-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.039 5.34-10.972 0-22.086-1.797-33.047-5.34-11.21-3.622-20.296-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.75-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.605 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.059 11.476-3.457 22.363-4.149 32.363A438.821 438.821 0 0 0 0 423.949c0 26.727 8.496 48.363 25.25 64.32 16.547 15.747 38.441 23.735 65.066 23.735h246.532c26.625 0 48.511-7.984 65.062-23.734 16.758-15.946 25.254-37.586 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm0 0"
                                                                data-original="#000000" class="" fill="#8b89a3">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    By - Admin

                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="as_text_color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0"
                                                        viewBox="0 0 48 48"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <path fill-rule="evenodd"
                                                                d="M29.9 39.65a22.465 22.465 0 0 1-5.9.779c-11.358 0-20.5-8.325-20.5-18.467S12.642 3.5 24 3.5s20.5 8.32 20.5 18.462a17.632 17.632 0 0 1-6.55 13.533V43a1.5 1.5 0 0 1-2.442 1.166z"
                                                                fill="#8b89a3" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    0 comments

                                                </a>
                                            </li>
                                        </ul>
                                        <h4 class="as_subheading">
                                            <a href="{{ url('/blogs') }}">
                                                Consectetur adipiscing elit sedeius <br>mod tempor incididunt ut
                                                labore.
                                            </a>
                                        </h4>
                                        <p class="as_text_color">Consectetur adipiscing elit, sed desdo eiusmod
                                            tempor incididuesdeentiut labore etesde magna</p>
                                        <a href="javascript:;" class="as_btn ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->

    <!-- Video section -->
    <section class="as_blog_wrapper as_section_dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 class="as_heading">Latest Videos</h1>
                    <span class="as_title_line">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="193px" height="21px">
                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                d="M188.852,19.425 L185.832,16.418 L177.218,16.418 C176.896,17.339 176.018,18.001 174.984,18.001 C173.949,18.001 173.071,17.339 172.749,16.418 L170.782,16.418 C170.503,16.941 169.951,17.298 169.314,17.298 C168.677,17.298 168.125,16.941 167.846,16.418 L155.583,16.418 C155.261,17.339 154.383,18.001 153.349,18.001 C152.314,18.001 151.436,17.339 151.114,16.418 L149.147,16.418 C148.868,16.941 148.316,17.298 147.679,17.298 C147.042,17.298 146.490,16.941 146.211,16.418 L136.245,16.418 L136.245,14.868 L146.211,14.868 C146.490,14.344 147.042,13.987 147.679,13.987 C148.316,13.987 148.868,14.344 149.147,14.868 L151.114,14.868 C151.436,13.947 152.314,13.284 153.349,13.284 C154.383,13.284 155.261,13.947 155.583,14.868 L167.846,14.868 C168.125,14.344 168.677,13.987 169.314,13.987 C169.951,13.987 170.503,14.344 170.782,14.868 L172.749,14.868 C173.071,13.947 173.949,13.284 174.984,13.284 C176.018,13.284 176.896,13.947 177.218,14.868 L185.132,14.868 L188.852,11.163 L193.000,15.294 L188.852,19.425 ZM128.736,20.194 C127.557,20.835 126.143,21.176 124.757,20.897 C123.398,20.617 122.192,19.831 121.458,18.689 C121.093,18.118 120.880,17.457 120.844,16.780 C120.809,16.099 120.996,15.446 121.304,14.890 C121.612,14.331 122.061,13.865 122.583,13.536 C123.112,13.216 123.735,13.072 124.314,13.128 C123.135,13.282 122.292,14.207 121.963,15.186 C121.611,16.189 121.842,17.221 122.499,17.947 C123.122,18.685 124.082,19.149 125.011,19.213 C125.929,19.277 126.895,18.995 127.693,18.450 C129.309,17.367 130.316,15.431 130.284,13.527 C130.275,12.580 130.047,11.681 129.555,10.915 C129.069,10.146 128.353,9.501 127.544,9.142 C126.749,8.763 125.863,8.660 124.945,8.825 C124.030,8.995 123.112,9.424 122.240,9.989 C120.459,11.079 119.045,12.857 117.271,14.481 C116.393,15.293 115.438,16.096 114.336,16.707 C113.228,17.309 112.050,17.725 110.836,17.941 C108.429,18.352 105.811,17.946 103.952,16.480 C106.100,17.426 108.459,17.375 110.532,16.695 C111.573,16.367 112.559,15.878 113.421,15.260 C114.280,14.631 115.069,13.887 115.814,13.051 C116.561,12.218 117.284,11.324 118.096,10.448 C118.893,9.566 119.808,8.683 120.843,7.946 C121.879,7.205 123.093,6.610 124.456,6.321 C125.811,6.038 127.347,6.167 128.654,6.779 C129.953,7.393 131.008,8.389 131.736,9.583 C132.468,10.783 132.831,12.216 132.759,13.578 C132.636,16.292 131.139,18.911 128.736,20.194 ZM108.887,15.270 C107.246,15.973 105.536,16.364 103.818,16.480 C105.398,15.806 106.932,15.098 108.263,14.157 C109.605,13.238 110.727,12.106 111.473,10.801 C112.196,9.484 112.618,8.019 112.443,6.653 C112.350,5.966 112.191,5.353 111.840,4.783 C111.498,4.220 111.040,3.706 110.498,3.335 C109.965,2.958 109.367,2.674 108.766,2.602 C108.169,2.506 107.579,2.585 106.967,2.830 C105.749,3.307 104.635,4.462 104.008,5.700 C103.700,6.331 103.550,7.018 103.576,7.692 C103.601,8.375 103.829,9.078 104.255,9.630 C104.663,10.207 105.297,10.590 106.058,10.712 C106.809,10.831 107.655,10.671 108.317,10.114 C107.421,11.675 104.822,11.934 103.322,10.512 C102.573,9.839 102.090,8.916 101.874,7.932 C101.657,6.927 101.794,5.891 102.105,4.953 C102.422,4.010 102.933,3.156 103.579,2.426 C104.220,1.692 105.002,1.042 105.943,0.579 C106.874,0.115 108.022,-0.087 109.109,0.046 C110.199,0.173 111.189,0.628 112.036,1.223 C112.875,1.836 113.554,2.628 114.064,3.523 C114.574,4.415 114.869,5.475 114.911,6.469 C114.989,8.493 114.306,10.411 113.178,11.913 C112.066,13.453 110.502,14.545 108.887,15.270 ZM96.222,16.983 C94.201,16.983 92.562,15.351 92.562,13.338 C92.562,11.325 94.201,9.694 96.222,9.694 C98.243,9.694 99.881,11.325 99.881,13.338 C99.881,15.351 98.243,16.983 96.222,16.983 ZM89.677,10.512 C88.177,11.934 85.579,11.675 84.682,10.114 C85.344,10.671 86.191,10.831 86.941,10.712 C87.703,10.590 88.337,10.207 88.744,9.630 C89.171,9.078 89.398,8.375 89.424,7.692 C89.449,7.018 89.299,6.331 88.991,5.700 C88.364,4.462 87.250,3.307 86.032,2.830 C85.421,2.585 84.831,2.506 84.234,2.602 C83.632,2.674 83.034,2.958 82.502,3.335 C81.959,3.706 81.501,4.220 81.159,4.783 C80.808,5.353 80.649,5.966 80.556,6.653 C80.382,8.019 80.803,9.484 81.526,10.801 C82.273,12.106 83.394,13.238 84.736,14.157 C86.068,15.098 87.601,15.806 89.181,16.480 C87.464,16.364 85.754,15.973 84.113,15.270 C82.498,14.545 80.934,13.453 79.822,11.913 C78.693,10.411 78.010,8.493 78.088,6.469 C78.131,5.475 78.426,4.415 78.935,3.523 C79.446,2.628 80.124,1.836 80.964,1.223 C81.810,0.628 82.800,0.173 83.891,0.046 C84.978,-0.087 86.126,0.115 87.057,0.579 C87.998,1.042 88.779,1.692 89.420,2.426 C90.066,3.156 90.577,4.010 90.894,4.953 C91.206,5.891 91.342,6.927 91.125,7.932 C90.909,8.916 90.426,9.839 89.677,10.512 ZM82.468,16.695 C84.541,17.375 86.899,17.426 89.047,16.480 C87.189,17.946 84.571,18.352 82.164,17.941 C80.950,17.725 79.772,17.309 78.663,16.707 C77.562,16.096 76.606,15.293 75.729,14.481 C73.954,12.857 72.541,11.079 70.759,9.989 C69.887,9.424 68.969,8.995 68.054,8.825 C67.136,8.660 66.250,8.763 65.456,9.142 C64.646,9.501 63.931,10.146 63.445,10.915 C62.952,11.681 62.724,12.580 62.715,13.527 C62.683,15.431 63.691,17.367 65.306,18.450 C66.105,18.995 67.070,19.277 67.989,19.213 C68.918,19.149 69.877,18.685 70.500,17.947 C71.157,17.221 71.388,16.189 71.037,15.186 C70.708,14.207 69.864,13.282 68.685,13.128 C69.265,13.072 69.887,13.216 70.417,13.536 C70.938,13.865 71.388,14.331 71.695,14.890 C72.004,15.446 72.191,16.099 72.155,16.780 C72.119,17.457 71.906,18.118 71.541,18.689 C70.808,19.831 69.601,20.617 68.242,20.897 C66.856,21.176 65.443,20.835 64.263,20.194 C61.860,18.911 60.363,16.292 60.240,13.578 C60.169,12.216 60.532,10.783 61.263,9.583 C61.991,8.389 63.047,7.393 64.345,6.779 C65.652,6.167 67.188,6.038 68.543,6.321 C69.906,6.610 71.120,7.205 72.156,7.946 C73.192,8.683 74.106,9.566 74.904,10.448 C75.715,11.324 76.439,12.218 77.185,13.051 C77.930,13.887 78.719,14.631 79.578,15.260 C80.440,15.878 81.426,16.367 82.468,16.695 ZM45.320,17.298 C44.684,17.298 44.131,16.941 43.852,16.418 L41.885,16.418 C41.563,17.339 40.686,18.001 39.651,18.001 C38.616,18.001 37.739,17.339 37.416,16.418 L25.154,16.418 C24.874,16.941 24.322,17.298 23.685,17.298 C23.049,17.298 22.496,16.941 22.217,16.418 L20.250,16.418 C19.928,17.339 19.051,18.001 18.016,18.001 C16.981,18.001 16.104,17.339 15.781,16.418 L7.167,16.418 L4.147,19.425 L-0.001,15.294 L4.147,11.163 L7.867,14.868 L15.781,14.868 C16.103,13.947 16.981,13.284 18.016,13.284 C19.051,13.284 19.928,13.947 20.250,14.868 L22.217,14.868 C22.496,14.344 23.049,13.987 23.685,13.987 C24.322,13.987 24.875,14.344 25.154,14.868 L37.416,14.868 C37.738,13.947 38.616,13.284 39.651,13.284 C40.686,13.284 41.563,13.947 41.885,14.868 L43.852,14.868 C44.131,14.344 44.684,13.987 45.320,13.987 C45.957,13.987 46.510,14.344 46.789,14.868 L56.755,14.868 L56.755,16.418 L46.789,16.418 C46.510,16.941 45.957,17.298 45.320,17.298 Z" />
                        </svg>
                    </span>
                    <p class="as_text_color">
                        It is a long established fact that a reader will be distracted by the readable content of a
                        page <br>when looking at its layout. The point of using Lorem Ipsum .
                    </p>
                    <div class="v3_blog_wrapper">
                        <div class="row text-left">
                                <video class="col-lg-6 mb-2" controls autoplay muted src="./14.Peaks.Nothing.Is.Impossible.2021.720p.NF.WEB-DL.DDP5.1.Atmos.x264-playWEB.x264-ESub.Hollymoviehd.mp4"></video>
                                <video class="col-lg-6 mb-2" controls autoplay muted src="./14.Peaks.Nothing.Is.Impossible.2021.720p.NF.WEB-DL.DDP5.1.Atmos.x264-playWEB.x264-ESub.Hollymoviehd.mp4"></video>
                                <video class="col-lg-6 mb-2" controls autoplay muted src="./14.Peaks.Nothing.Is.Impossible.2021.720p.NF.WEB-DL.DDP5.1.Atmos.x264-playWEB.x264-ESub.Hollymoviehd.mp4"></video>
                                <video class="col-lg-6 mb-2" controls autoplay muted src="./14.Peaks.Nothing.Is.Impossible.2021.720p.NF.WEB-DL.DDP5.1.Atmos.x264-playWEB.x264-ESub.Hollymoviehd.mp4"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video section end -->

    <!-- Testimonial section -->
    <section class="as_testimonial_wrapper as_section_light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="as_heading as_heading_center">Testimonial</h1>
                    <span class="as_title_line">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="193px" height="21px">
                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                d="M188.852,19.425 L185.832,16.418 L177.218,16.418 C176.896,17.339 176.018,18.001 174.984,18.001 C173.949,18.001 173.071,17.339 172.749,16.418 L170.782,16.418 C170.503,16.941 169.951,17.298 169.314,17.298 C168.677,17.298 168.125,16.941 167.846,16.418 L155.583,16.418 C155.261,17.339 154.383,18.001 153.349,18.001 C152.314,18.001 151.436,17.339 151.114,16.418 L149.147,16.418 C148.868,16.941 148.316,17.298 147.679,17.298 C147.042,17.298 146.490,16.941 146.211,16.418 L136.245,16.418 L136.245,14.868 L146.211,14.868 C146.490,14.344 147.042,13.987 147.679,13.987 C148.316,13.987 148.868,14.344 149.147,14.868 L151.114,14.868 C151.436,13.947 152.314,13.284 153.349,13.284 C154.383,13.284 155.261,13.947 155.583,14.868 L167.846,14.868 C168.125,14.344 168.677,13.987 169.314,13.987 C169.951,13.987 170.503,14.344 170.782,14.868 L172.749,14.868 C173.071,13.947 173.949,13.284 174.984,13.284 C176.018,13.284 176.896,13.947 177.218,14.868 L185.132,14.868 L188.852,11.163 L193.000,15.294 L188.852,19.425 ZM128.736,20.194 C127.557,20.835 126.143,21.176 124.757,20.897 C123.398,20.617 122.192,19.831 121.458,18.689 C121.093,18.118 120.880,17.457 120.844,16.780 C120.809,16.099 120.996,15.446 121.304,14.890 C121.612,14.331 122.061,13.865 122.583,13.536 C123.112,13.216 123.735,13.072 124.314,13.128 C123.135,13.282 122.292,14.207 121.963,15.186 C121.611,16.189 121.842,17.221 122.499,17.947 C123.122,18.685 124.082,19.149 125.011,19.213 C125.929,19.277 126.895,18.995 127.693,18.450 C129.309,17.367 130.316,15.431 130.284,13.527 C130.275,12.580 130.047,11.681 129.555,10.915 C129.069,10.146 128.353,9.501 127.544,9.142 C126.749,8.763 125.863,8.660 124.945,8.825 C124.030,8.995 123.112,9.424 122.240,9.989 C120.459,11.079 119.045,12.857 117.271,14.481 C116.393,15.293 115.438,16.096 114.336,16.707 C113.228,17.309 112.050,17.725 110.836,17.941 C108.429,18.352 105.811,17.946 103.952,16.480 C106.100,17.426 108.459,17.375 110.532,16.695 C111.573,16.367 112.559,15.878 113.421,15.260 C114.280,14.631 115.069,13.887 115.814,13.051 C116.561,12.218 117.284,11.324 118.096,10.448 C118.893,9.566 119.808,8.683 120.843,7.946 C121.879,7.205 123.093,6.610 124.456,6.321 C125.811,6.038 127.347,6.167 128.654,6.779 C129.953,7.393 131.008,8.389 131.736,9.583 C132.468,10.783 132.831,12.216 132.759,13.578 C132.636,16.292 131.139,18.911 128.736,20.194 ZM108.887,15.270 C107.246,15.973 105.536,16.364 103.818,16.480 C105.398,15.806 106.932,15.098 108.263,14.157 C109.605,13.238 110.727,12.106 111.473,10.801 C112.196,9.484 112.618,8.019 112.443,6.653 C112.350,5.966 112.191,5.353 111.840,4.783 C111.498,4.220 111.040,3.706 110.498,3.335 C109.965,2.958 109.367,2.674 108.766,2.602 C108.169,2.506 107.579,2.585 106.967,2.830 C105.749,3.307 104.635,4.462 104.008,5.700 C103.700,6.331 103.550,7.018 103.576,7.692 C103.601,8.375 103.829,9.078 104.255,9.630 C104.663,10.207 105.297,10.590 106.058,10.712 C106.809,10.831 107.655,10.671 108.317,10.114 C107.421,11.675 104.822,11.934 103.322,10.512 C102.573,9.839 102.090,8.916 101.874,7.932 C101.657,6.927 101.794,5.891 102.105,4.953 C102.422,4.010 102.933,3.156 103.579,2.426 C104.220,1.692 105.002,1.042 105.943,0.579 C106.874,0.115 108.022,-0.087 109.109,0.046 C110.199,0.173 111.189,0.628 112.036,1.223 C112.875,1.836 113.554,2.628 114.064,3.523 C114.574,4.415 114.869,5.475 114.911,6.469 C114.989,8.493 114.306,10.411 113.178,11.913 C112.066,13.453 110.502,14.545 108.887,15.270 ZM96.222,16.983 C94.201,16.983 92.562,15.351 92.562,13.338 C92.562,11.325 94.201,9.694 96.222,9.694 C98.243,9.694 99.881,11.325 99.881,13.338 C99.881,15.351 98.243,16.983 96.222,16.983 ZM89.677,10.512 C88.177,11.934 85.579,11.675 84.682,10.114 C85.344,10.671 86.191,10.831 86.941,10.712 C87.703,10.590 88.337,10.207 88.744,9.630 C89.171,9.078 89.398,8.375 89.424,7.692 C89.449,7.018 89.299,6.331 88.991,5.700 C88.364,4.462 87.250,3.307 86.032,2.830 C85.421,2.585 84.831,2.506 84.234,2.602 C83.632,2.674 83.034,2.958 82.502,3.335 C81.959,3.706 81.501,4.220 81.159,4.783 C80.808,5.353 80.649,5.966 80.556,6.653 C80.382,8.019 80.803,9.484 81.526,10.801 C82.273,12.106 83.394,13.238 84.736,14.157 C86.068,15.098 87.601,15.806 89.181,16.480 C87.464,16.364 85.754,15.973 84.113,15.270 C82.498,14.545 80.934,13.453 79.822,11.913 C78.693,10.411 78.010,8.493 78.088,6.469 C78.131,5.475 78.426,4.415 78.935,3.523 C79.446,2.628 80.124,1.836 80.964,1.223 C81.810,0.628 82.800,0.173 83.891,0.046 C84.978,-0.087 86.126,0.115 87.057,0.579 C87.998,1.042 88.779,1.692 89.420,2.426 C90.066,3.156 90.577,4.010 90.894,4.953 C91.206,5.891 91.342,6.927 91.125,7.932 C90.909,8.916 90.426,9.839 89.677,10.512 ZM82.468,16.695 C84.541,17.375 86.899,17.426 89.047,16.480 C87.189,17.946 84.571,18.352 82.164,17.941 C80.950,17.725 79.772,17.309 78.663,16.707 C77.562,16.096 76.606,15.293 75.729,14.481 C73.954,12.857 72.541,11.079 70.759,9.989 C69.887,9.424 68.969,8.995 68.054,8.825 C67.136,8.660 66.250,8.763 65.456,9.142 C64.646,9.501 63.931,10.146 63.445,10.915 C62.952,11.681 62.724,12.580 62.715,13.527 C62.683,15.431 63.691,17.367 65.306,18.450 C66.105,18.995 67.070,19.277 67.989,19.213 C68.918,19.149 69.877,18.685 70.500,17.947 C71.157,17.221 71.388,16.189 71.037,15.186 C70.708,14.207 69.864,13.282 68.685,13.128 C69.265,13.072 69.887,13.216 70.417,13.536 C70.938,13.865 71.388,14.331 71.695,14.890 C72.004,15.446 72.191,16.099 72.155,16.780 C72.119,17.457 71.906,18.118 71.541,18.689 C70.808,19.831 69.601,20.617 68.242,20.897 C66.856,21.176 65.443,20.835 64.263,20.194 C61.860,18.911 60.363,16.292 60.240,13.578 C60.169,12.216 60.532,10.783 61.263,9.583 C61.991,8.389 63.047,7.393 64.345,6.779 C65.652,6.167 67.188,6.038 68.543,6.321 C69.906,6.610 71.120,7.205 72.156,7.946 C73.192,8.683 74.106,9.566 74.904,10.448 C75.715,11.324 76.439,12.218 77.185,13.051 C77.930,13.887 78.719,14.631 79.578,15.260 C80.440,15.878 81.426,16.367 82.468,16.695 ZM45.320,17.298 C44.684,17.298 44.131,16.941 43.852,16.418 L41.885,16.418 C41.563,17.339 40.686,18.001 39.651,18.001 C38.616,18.001 37.739,17.339 37.416,16.418 L25.154,16.418 C24.874,16.941 24.322,17.298 23.685,17.298 C23.049,17.298 22.496,16.941 22.217,16.418 L20.250,16.418 C19.928,17.339 19.051,18.001 18.016,18.001 C16.981,18.001 16.104,17.339 15.781,16.418 L7.167,16.418 L4.147,19.425 L-0.001,15.294 L4.147,11.163 L7.867,14.868 L15.781,14.868 C16.103,13.947 16.981,13.284 18.016,13.284 C19.051,13.284 19.928,13.947 20.250,14.868 L22.217,14.868 C22.496,14.344 23.049,13.987 23.685,13.987 C24.322,13.987 24.875,14.344 25.154,14.868 L37.416,14.868 C37.738,13.947 38.616,13.284 39.651,13.284 C40.686,13.284 41.563,13.947 41.885,14.868 L43.852,14.868 C44.131,14.344 44.684,13.987 45.320,13.987 C45.957,13.987 46.510,14.344 46.789,14.868 L56.755,14.868 L56.755,16.418 L46.789,16.418 C46.510,16.941 45.957,17.298 45.320,17.298 Z" />
                        </svg>
                    </span>
                    <p class="as_text_color">
                        Consectetur adipiscing elit, sed do eiusmod tempor incididuesdeentiut labore <br>etesde
                        dolore magna aliquapspendisse and the gravida.
                    </p>
                </div>
                <div class="as_testimonial_slider_inner">
                    <div class="as_testimonial_slider_inner">
                        <div class="swiper as_testimonialSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="as_testimonial_inner_content">
                                        <img src="{{asset('newhome/assets/images/c1.jpg')}}" alt="">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters</p>
                                        <h5>Harry Hank</h5>
                                        <a href="javascript:;" class="as_btn as_astrologer">Astrologer</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="as_testimonial_inner_content">
                                        <img src="{{asset('newhome/assets/images/c2.jpg')}}" alt="">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters</p>
                                        <h5>Harry Hank</h5>
                                        <a href="javascript:;" class="as_btn as_astrologer">Astrologer</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="as_testimonial_inner_content">
                                        <img src="{{asset('newhome/assets/images/c3.jpg')}}" alt="">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters</p>
                                        <h5>Harry Hank</h5>
                                        <a href="javascript:;" class="as_btn as_astrologer">Astrologer</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="as_testimonial_inner_content">
                                        <img src="{{asset('newhome/assets/images/c4.jpg')}}" alt="">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters</p>
                                        <h5>Harry Hank</h5>
                                        <a href="javascript:;" class="as_btn as_astrologer">Astrologer</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="as_testimonial_inner_content">
                                        <img src="{{asset('newhome/assets/images/c5.jpg')}}" alt="">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters</p>
                                        <h5>Harry Hank</h5>
                                        <a href="javascript:;" class="as_btn as_astrologer">Astrologer</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="as_testimonial_inner_content">
                                        <img src="{{asset('newhome/assets/images/c6.jpg')}}" alt="">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters</p>
                                        <h5>Harry Hank</h5>
                                        <a href="javascript:;" class="as_btn as_astrologer">Astrologer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section End -->
    </div>
@endsection
