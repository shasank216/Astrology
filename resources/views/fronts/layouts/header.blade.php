<!-- Loader -->
<div class="as_loader">
    <div class="">
        <img src="{{asset('newhome/assets/images/loader.gif')}}" alt="" class="img-responsive">
    </div>
</div>
<!-- Loader End -->

<div class="as_main_wrapper">
    <!-- Navbar section -->
    <section class="as_header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="as_logo">
                        <a href="{{ url('/') }}">
                            <img src="{{asset('newhome/assets/images/logo1.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6">
                    <div class="as_right_info">
                        <div class="as_menu_wrapper">
                            <span class="as_toggle">
                                <img src="{{asset('newhome/assets/images/svg/menu.svg')}}" alt="">
                            </span>
                            <div class="as_menu">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}" class="active">home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('medical-about-us') }}">about us</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">pages</a>
                                        <span class="as_submenu_arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" width="15" height="15" x="0"
                                                y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve" class="">
                                                <g>
                                                    <path
                                                        d="M54.921 20.297a1 1 0 0 0-.92-.611H10a1 1 0 0 0-.718 1.698l22 22.627a1 1 0 0 0 1.434 0l22-22.628a1 1 0 0 0 .204-1.086z"
                                                        fill="#ffffff" data-original="#000000" class=""></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <ul class="as_submenu">
                                            <li>
                                                <a href="service.html">service</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('horoscope_details') }}">service single</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('medical-appointment') }}">appointment</a>
                                            </li>
                                            <li>
                                                <a href="pricing.html">pricing plans</a>
                                            </li>
                                            <li>
                                                <a href="error.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">blog</a>
                                        <span class="as_submenu_arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" width="15" height="15" x="0"
                                                y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve" class="">
                                                <g>
                                                    <path
                                                        d="M54.921 20.297a1 1 0 0 0-.92-.611H10a1 1 0 0 0-.718 1.698l22 22.627a1 1 0 0 0 1.434 0l22-22.628a1 1 0 0 0 .204-1.086z"
                                                        fill="#ffffff" data-original="#000000" class=""></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <ul class="as_submenu">
                                            <li>
                                                <a href="{{ url('/blogs') }}">blog</a>
                                            </li>
                                            <li>
                                                <a href="url {{ url('blog_details') }}">blog single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/medical-contact') }}">contact</a>
                                    </li>
                                    <li>
                                        <div id="google_translate_element"></div>
                                    </li>
                                    <li>
                                        @if(getLogInUser())
                                        
                                        <a href="javascript:;">Login</a>
                                        <span class="as_submenu_arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" width="15" height="15" x="0"
                                                y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve" class="">
                                                <g>
                                                    <path
                                                        d="M54.921 20.297a1 1 0 0 0-.92-.611H10a1 1 0 0 0-.718 1.698l22 22.627a1 1 0 0 0 1.434 0l22-22.628a1 1 0 0 0 .204-1.086z"
                                                        fill="#ffffff" data-original="#000000" class=""></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <ul class="as_submenu">
                                            @if(getLogInUser()->hasRole('doctor'))
                                            <li>
                                                <a href="{{ route('doctors.dashboard') }}">dashboard</a>
                                            </li>
                                            @elseif(getLogInUser()->hasRole('patient'))
                                            <li>
                                                <a href="{{ route('patients.dashboard') }}">dashboard</a>
                                            </li>
                                            @else
                                            <li>
                                                <a href="{{ route('admin.dashboard') }}">dashboard</a>
                                            </li> 
                                            @endif
                                        @else
                                            <li>
                                                <a href="{{ route('login')}}">login</a>
                                            </li>
                                        @endif            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Navbar section End -->
