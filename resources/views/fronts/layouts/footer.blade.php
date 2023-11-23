<!-- Footer section -->
<section class="as_footer_wrapper as_section_dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="as_footer_inner  ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="as_footer_widget">
                                <div class="as_footer_logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{asset('newhome/assets/images/logo1.svg')}}" alt="">
                                    </a>
                                </div>
                                <p>There are many variations of this passages of Lorem Ipsum.</p>
                                <ul class="as_contact_list">
                                    <li>
                                        <img src="{{asset('newhome/assets/images/svg/map.svg')}}" alt="">
                                        <p>Biratnagar, Nepal</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('newhome/assets/images/svg/phone.svg')}}" alt="">
                                        <p>
                                            <a href="javascript:;">+977 - 9874563210</a>
                                        </p>
                                    </li>
                                    <li>
                                        <img src="{{asset('newhome/assets/images/svg/mail.svg')}}" alt="">
                                        <p>
                                            <a href="javascript:;">astrology@gmail.com</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="as_footer_widget">
                                <h3 class="as_footer_heading">Quick Links</h3>
                                <ul>
                                    <li>
                                        <a href="{{ url('medical-about-us') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    {{-- <li>
                                        <a href="astrologer.html">Astrologers</a>
                                    </li> --}}
                                    <li>
                                        <a href="medical-appointment">Appointment</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('medical-contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="as_footer_widget">
                                <h3 class="as_footer_heading">Horoscope Forecasts</h3>
                                <ul>
                                    <li>
                                        <a href="{{ url('/horoscope_details') }}">My Daily Horoscope</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/horoscope_details') }}">My Weekly Horoscope</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/horoscope_details') }}">My Monthly Horoscope</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/horoscope_details') }}">My Love Horoscope</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/horoscope_details') }}">My Career Horoscop</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="as_footer_widget">
                                <h3 class="as_footer_heading">Our Newsletter</h3>
                                <p>Lorem ipsum dolor amet, consectetur adipiscing elit,sed eiusmod tempor. </p>
                                <div class="as_newsletter_wrapper">
                                    <div class="as_newsletter_box">
                                        <input type="text" name="" id="" class="form-control"
                                            placeholder="Email...">
                                        <a href="javascript:;" class="as_btn as_btn_newsletter">
                                            <img src="{{asset('newhome/assets/images/svg/plane.svg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="as_login_data">
                                    <label>
                                        I agree that my submitted data is
                                        being collected and stored.
                                        <input type="checkbox" name="as_remember_me" value="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="as_copyright_wrapper text-center">
        <p>Copyright &copy;2023 Astrology. All Right Reserved.</p>
    </div>
</section>
<!-- Footer section End -->