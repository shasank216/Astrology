@extends('fronts.layouts.app')
@section('front-title')
    {{ __('messages.web.medical_services') }}
@endsection

@section('front-content')
    <section class="as_breadcrum_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Service Single</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Service single</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="as_blog_wrapper   as_section_light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="as_shop_sidebar">
                        <div class="as_widget as_search_widget as_section_dark">
                            <input type="text" name="" class="form-control" id="" placeholder="Search" />
                            <span><img src="assets/images/svg/search.svg" alt=""></span>
                        </div>
                        <div class="as_widget as_category_widget as_section_dark">
                            <h3 class="as_widget_title">Categories</h3>
                            <ul>
                                <li><a href="javascript:;">Kundali Dosha</a></li>
                                <li><a href="javascript:;">Face Reading</a></li>
                                <li><a href="javascript:;">Daily Horoscope</a></li>
                                <li><a href="javascript:;">Personal Consultation</a></li>
                                <li><a href="javascript:;">gem & Stone</a></li>
                                <li><a href="javascript:;">Manglik Dosha</a></li>
                                <li><a href="javascript:;">Vastu Shastra</a></li>
                                <li><a href="javascript:;">planets</a></li>
                                <li><a href="javascript:;">Numerology</a></li>
                                <li><a href="javascript:;">tarot cards</a></li>
                            </ul>
                        </div>
                        <div class="as_widget as_category_widget as_section_dark">
                            <h3 class="as_widget_title">Archives</h3>
                            <ul class="as_archives_flex">
                                <li><a href="javascript:;">January 2023<span> (20)</span></a></li>
                                <li><a href="javascript:;">February 2023<span> (15)</span></a></li>
                                <li><a href="javascript:;">March 2023<span> (5)</span></a></li>
                                <li><a href="javascript:;">April 2023<span> (3)</span></a></li>
                                <li><a href="javascript:;">May 2023 <span>(18)</span></a></li>
                                <li><a href="javascript:;">June 2023 <span>(7)</span></a></li>
                            </ul>
                        </div>
                        <div class="as_widget as_workinghours_widget as_section_dark">
                            <h3 class="as_widget_title">Working Hours</h3>
                            <ul>
                                <li><a href="javascript:;"><span>Monday</span> <span>09:00 - 12:00</span></a></li>
                                <li><a href="javascript:;"><span>Tuesday</span> <span>09:00 - 12:00</span></a></li>
                                <li><a href="javascript:;"><span>Wednesday</span> <span>09:00 - 12:00</span></a>
                                </li>
                                <li><a href="javascript:;"><span>Thursday</span> <span>09:00 - 12:00</span></a></li>
                                <li><a href="javascript:;"><span>Friday</span> <span>09:00 - 12:00</span></a></li>
                                <li><a href="javascript:;"><span>Saturday</span> <span>09:00 - 12:00</span></a></li>
                                <li><a href="javascript:;"><span>Sunday</span> <span>09:00 - 12:00</span></a></li>
                            </ul>
                        </div>
                        <div class="as_widget as_product_widget as_post_widget as_section_dark">
                            <h3 class="as_widget_title">Recent Posts</h3>
                            <ul class="as_Recent_post_ul">
                                <li class="as_product">
                                    <a href="shop_single.html">
                                        <span class="as_productimg">
                                            <img src="assets/images/blog_single2.jpg" alt="">
                                        </span>
                                        <span class="as_product_detail">
                                            <span class="as_text_color"><img src="assets/images/svg/calendar.svg"
                                                    alt=""> 14/01/2023</span>
                                            <span class="as_text_color">Lorem ipsum dolor sit amet,
                                                consectetur.</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="as_product">
                                    <a href="shop_single.html">
                                        <span class="as_productimg">
                                            <img src="assets/images/post2.jpg" alt="">
                                        </span>
                                        <span class="as_product_detail">
                                            <span class="as_text_color"><img src="assets/images/svg/calendar.svg"
                                                    alt=""> 14/01/2023</span>
                                            <span class="as_text_color">Lorem ipsum dolor sit amet,
                                                consectetur.</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="as_product">
                                    <a href="shop_single.html">
                                        <span class="as_productimg">
                                            <img src="assets/images/post3.jpg" alt="">
                                        </span>
                                        <span class="as_product_detail">
                                            <span class="as_text_color"><img src="assets/images/svg/calendar.svg"
                                                    alt=""> 14/01/2023</span>
                                            <span class="as_text_color">Lorem ipsum dolor sit amet,
                                                consectetur.</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="as_widget as_faq_widget as_section_dark">
                            <h3 class="as_widget_title">FAQ</h3>
                            <div class="accordion as_accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingOne">
                                        <h2 class="mb-0">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                What is 'the zodiac'
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <h2 class="mb-0">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                What is a Rising Sign?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingThree">
                                        <h2 class="mb-0">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                What is 'the house' ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingFour">
                                        <h2 class="mb-0">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                What is a Ascendant?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingFour">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="as_widget as_share_widget as_share_box as_section_dark">
                            <h3 class="as_widget_title">Social Share</h3>
                            <ul>
                                <li>
                                    <a href="javascript:;">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="19px">
                                            <path fill-rule="evenodd"
                                                d="M6.491,19.000 L6.491,10.333 L9.439,10.333 L9.881,6.956 L6.491,6.956 L6.491,4.799 C6.491,3.821 6.765,3.155 8.188,3.155 L10.000,3.154 L10.000,0.132 C9.687,0.092 8.611,-0.000 7.359,-0.000 C4.746,-0.000 2.956,1.574 2.956,4.464 L2.956,6.956 L-0.000,6.956 L-0.000,10.333 L2.956,10.333 L2.956,19.000 L6.491,19.000 Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="16px">
                                            <path fill-rule="evenodd"
                                                d="M20.000,1.892 C19.257,2.213 18.464,2.426 17.637,2.530 C18.487,2.030 19.137,1.244 19.442,0.298 C18.649,0.764 17.774,1.092 16.842,1.276 C16.089,0.487 15.017,-0.002 13.847,-0.002 C11.576,-0.002 9.748,1.812 9.748,4.037 C9.748,4.357 9.776,4.664 9.843,4.957 C6.435,4.794 3.418,3.184 1.392,0.734 C1.038,1.338 0.831,2.030 0.831,2.775 C0.831,4.173 1.562,5.413 2.652,6.130 C1.993,6.118 1.347,5.930 0.800,5.633 C0.800,5.645 0.800,5.661 0.800,5.677 C0.800,7.639 2.221,9.269 4.085,9.644 C3.751,9.734 3.387,9.777 3.010,9.777 C2.747,9.777 2.482,9.763 2.233,9.708 C2.765,11.307 4.272,12.483 6.065,12.521 C4.670,13.595 2.898,14.243 0.981,14.243 C0.645,14.243 0.322,14.228 -0.000,14.187 C1.816,15.341 3.968,15.999 6.290,15.999 C13.835,15.999 17.960,9.845 17.960,4.510 C17.960,4.332 17.954,4.160 17.945,3.989 C18.759,3.420 19.442,2.709 20.000,1.892 Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="17px">
                                            <path fill-rule="evenodd"
                                                d="M16.995,16.998 L16.995,16.999 L13.477,16.999 L13.477,11.474 C13.477,10.157 13.450,8.469 11.645,8.469 C9.813,8.469 9.532,9.899 9.532,11.379 L9.532,16.998 L6.013,16.998 L6.013,5.650 L9.393,5.650 L9.393,7.197 L9.442,7.197 C9.912,6.306 11.062,5.365 12.777,5.365 C16.342,5.365 16.998,7.714 16.998,10.764 L16.998,16.998 L16.995,16.998 ZM2.041,4.102 C0.914,4.102 -0.000,3.169 -0.000,2.042 C-0.000,0.915 0.914,0.001 2.041,0.001 C3.167,0.001 4.082,0.915 4.082,2.042 C4.082,3.169 3.168,4.102 2.041,4.102 ZM3.804,16.999 L0.280,16.999 L0.280,5.650 L3.804,5.650 L3.804,16.999 Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="21px" height="14px">
                                            <path fill-rule="evenodd"
                                                d="M20.107,1.349 C19.538,0.366 18.920,0.186 17.661,0.117 C16.404,0.034 13.242,-0.000 10.503,-0.000 C7.758,-0.000 4.595,0.034 3.339,0.116 C2.083,0.186 1.463,0.365 0.889,1.349 C0.302,2.330 -0.000,4.020 -0.000,6.996 C-0.000,6.999 -0.000,7.000 -0.000,7.000 C-0.000,7.003 -0.000,7.004 -0.000,7.004 L-0.000,7.006 C-0.000,9.969 0.302,11.672 0.889,12.643 C1.463,13.626 2.082,13.804 3.338,13.887 C4.595,13.958 7.758,14.000 10.503,14.000 C13.242,14.000 16.404,13.958 17.662,13.888 C18.921,13.805 19.539,13.627 20.109,12.645 C20.701,11.673 21.000,9.970 21.000,7.007 C21.000,7.007 21.000,7.004 21.000,7.001 C21.000,7.001 21.000,6.999 21.000,6.997 C21.000,4.020 20.701,2.330 20.107,1.349 ZM7.875,10.818 L7.875,3.182 L14.437,7.000 L7.875,10.818 Z" />
                                            <path fill="url(#PSgrad_0)"
                                                d="M20.107,1.349 C19.538,0.366 18.920,0.186 17.661,0.117 C16.404,0.034 13.242,-0.000 10.503,-0.000 C7.758,-0.000 4.595,0.034 3.339,0.116 C2.083,0.186 1.463,0.365 0.889,1.349 C0.302,2.330 -0.000,4.020 -0.000,6.996 C-0.000,6.999 -0.000,7.000 -0.000,7.000 C-0.000,7.003 -0.000,7.004 -0.000,7.004 L-0.000,7.006 C-0.000,9.969 0.302,11.672 0.889,12.643 C1.463,13.626 2.082,13.804 3.338,13.887 C4.595,13.958 7.758,14.000 10.503,14.000 C13.242,14.000 16.404,13.958 17.662,13.888 C18.921,13.805 19.539,13.627 20.109,12.645 C20.701,11.673 21.000,9.970 21.000,7.007 C21.000,7.007 21.000,7.004 21.000,7.001 C21.000,7.001 21.000,6.999 21.000,6.997 C21.000,4.020 20.701,2.330 20.107,1.349 ZM7.875,10.818 L7.875,3.182 L14.437,7.000 L7.875,10.818 Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                    <div class="as_service_single as_service_single_new as_section_dark">
                        <div class="as_service_img">
                            <img src="assets/images/blog_single1.jpg" alt="" class="img-responsive">
                        </div>
                        <h3 class="as_white_color_default as_top_30 as_bottom_20">Rahu Enters Cancer and Ketu Enters
                            Capricorn.
                        </h3>
                        <p class="as_margin0 as_text_color">It is a long established fact that a reader will be
                            distracted by the readable content of a page when looking at its layout. The point of
                            using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                            opposed to using 'Content here, content here', making it look like readable English.
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                            their infancy that walks through our doors.
                        </p>
                        <p class="as_text_color">Many desktop publishing packages and web page editors now use Lorem
                            Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                            their infancy.Various versions have evolved over the years, sometimes by accident,
                            sometimes on purpose.
                        </p>
                        <ul>
                            <li class="as_text_color">Uncover many web sites still in their infancy.Various versions
                                have evolved over the
                                years, sometimes by accident, sometimes on purpose.
                            </li>
                            <li class="as_text_color">There are many variations of passages of Lorem Ipsum
                                available, but the majority
                                have suffered alteration in some form.
                            </li>
                            <li class="as_text_color">Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots in a
                                piece of classical Latin literature.
                            </li>
                        </ul>
                        <p class="as_margin0 as_bottom_20 as_text_color">All the Lorem Ipsum generators on the
                            Internet tend to
                            repeat predefined chunks as necessary, making this the first true generator on the
                            Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
                            sentence structures, to generate Lorem Ipsum which looks reasonable.
                        </p>
                        <div class="as_bookingform as_booking_heading">
                            <h1 class="as_heading">Select Your Booking</h1>
                            <div class="as_booking_section ">
                                <h3 class="as_bookingheading as_white_color_default"><img
                                        src="assets/images/svg/user2.svg" alt=""> Our Astrologer</h3>
                                <div class="row as_appointment_form">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <label class="as_astro text-center ">
                                            <input type="checkbox" name="" id="" class="hide">
                                            <span>
                                                <span><img src="assets/images/astro1.jpg" alt=""
                                                        class="img-responsive"></span>
                                                <h5 class=" as_text_color">Jhon morker</h5>
                                            </span>
                                        </label>
                                    </div>
                                    
                                    <div class="as_astrologer_form row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="" value="" placeholder="Name"
                                                    class="form-control">
                                                <span><img src="assets/images/svg/user1.svg" alt=""></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Booking Of Date"
                                                    class="form-control as_datepicker">
                                                <span><img src="assets/images/svg/calendar.svg" alt=""></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Phone Number" class="form-control">
                                                <span><img src="assets/images/svg/phone1.svg" alt=""></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="" value="" placeholder="Email"
                                                    class="form-control">
                                                <span><img src="assets/images/svg/mail1.svg" alt=""></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Booking Of Time"
                                                    class="form-control as_timepicker">
                                                <span><img src="assets/images/svg/clock.svg" alt=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="as_booking_section ">
                                <h3 class="as_bookingheading as_white_color_default"><img src="assets/images/svg/info.svg"
                                        alt=""> Booking Information</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="as_total_amount">
                                            <li class="as_text_color">
                                                <span>GST</span>
                                                <span>100</span>
                                            </li>
                                            <li class="as_text_color">
                                                <span>Service Charge</span>
                                                <span>350</span>
                                            </li>
                                            <li class="as_text_color">
                                                <span>Tax paid</span>
                                                <span>50</span>
                                            </li>
                                            <li class="as_text_color">
                                                <span>Total Amount</span>
                                                <span>500</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul>
                                            <li class="as_text_color">
                                                <span>Expert</span>
                                                <span>John Morker</span>
                                            </li>
                                            <li class="as_text_color">
                                                <span>Date</span>
                                                <span>14-01-2023</span>
                                            </li>
                                            <li class="as_text_color">
                                                <span>Time</span>
                                                <span>09.00 AM</span>
                                            </li>
                                            <li class="as_text_color">
                                                <span>Service</span>
                                                <span>Kundli Dosha</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="as_comment_section as_all_comment_heading">
                            <h1 class="as_heading">All Comments</h1>
                            <ul>
                                <li>
                                    <div class="as_comnt_img">
                                        <img src="assets/images/coment1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="as_comnt_detail">
                                        <div class="as_comnt_title">
                                            <h4 class="as_subheading as_margin0 as_white_color_default">Peter Lee
                                            </h4>
                                            <span class=" as_time">
                                                <!-- <img src="assets/images/svg/clock.svg" alt=""> -->
                                                <svg height="15px" width="15px" fill="#ffffff" viewBox="0 0 512 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm121.75 388.414062c-4.160156 4.160157-9.621094 6.253907-15.082031 6.253907-5.460938 0-10.925781-2.09375-15.082031-6.253907l-106.667969-106.664062c-4.011719-3.988281-6.25-9.410156-6.25-15.082031v-138.667969c0-11.796875 9.554687-21.332031 21.332031-21.332031s21.332031 9.535156 21.332031 21.332031v129.835938l100.417969 100.414062c8.339844 8.34375 8.339844 21.824219 0 30.164062zm0 0">
                                                    </path>
                                                </svg>
                                                09:25 AM
                                            </span>
                                            <span class=" as_date">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                    y="0px" width="15px" height="15px" fill="#ffffff"
                                                    viewBox="0 0 488.152 488.152"
                                                    style="enable-background:new 0 0 488.152 488.152;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
                                              c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z">
                                                            </path>
                                                            <path
                                                                d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
                                              c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z">
                                                            </path>
                                                            <path
                                                                d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
                                              c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z">
                                                            </path>
                                                            <path
                                                                d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
                                              c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z">
                                                            </path>
                                                            <path
                                                                d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
                                              c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z">
                                                            </path>
                                                            <path
                                                                d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
                                              c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z">
                                                            </path>
                                                            <path
                                                                d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
                                              h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
                                              C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
                                              c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
                                              c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
                                              h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z">
                                                            </path>
                                                            <path
                                                                d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
                                              C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z">
                                                            </path>
                                                            <path
                                                                d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
                                              c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                July 29,
                                                2023
                                            </span>
                                            <span class=" as_date"><img src="assets/images/rating-white.png"
                                                    alt=""></span>
                                            <a class=" as_reply"><img src="assets/images/svg/reply.svg"
                                                    alt=""></a>
                                        </div>
                                        <p class="as_text_color">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                                            accumsan lacus vel facilisis.”
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <div class="as_comnt_img">
                                                <img src="assets/images/coment2.jpg" alt=""
                                                    class="img-responsive">
                                            </div>
                                            <div class="as_comnt_detail">
                                                <div class="as_comnt_title">
                                                    <h4 class="as_subheading as_margin0 as_white_color_default">
                                                        Peter Lee
                                                    </h4>
                                                    <span class=" as_time">
                                                        <!-- <img src="assets/images/svg/clock.svg" alt=""> -->
                                                        <svg height="15px" width="15px" fill="#ffffff"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm121.75 388.414062c-4.160156 4.160157-9.621094 6.253907-15.082031 6.253907-5.460938 0-10.925781-2.09375-15.082031-6.253907l-106.667969-106.664062c-4.011719-3.988281-6.25-9.410156-6.25-15.082031v-138.667969c0-11.796875 9.554687-21.332031 21.332031-21.332031s21.332031 9.535156 21.332031 21.332031v129.835938l100.417969 100.414062c8.339844 8.34375 8.339844 21.824219 0 30.164062zm0 0">
                                                            </path>
                                                        </svg>
                                                        09:25 AM
                                                    </span>
                                                    <span class=" as_date">
                                                        <svg version="1.1" id="Capa_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                            y="0px" width="15px" height="15px" fill="#ffffff"
                                                            viewBox="0 0 488.152 488.152"
                                                            style="enable-background:new 0 0 488.152 488.152;"
                                                            xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
                                                    c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z">
                                                                    </path>
                                                                    <path
                                                                        d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
                                                    c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z">
                                                                    </path>
                                                                    <path
                                                                        d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
                                                    c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z">
                                                                    </path>
                                                                    <path
                                                                        d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
                                                    c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z">
                                                                    </path>
                                                                    <path
                                                                        d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
                                                    c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z">
                                                                    </path>
                                                                    <path
                                                                        d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
                                                    c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z">
                                                                    </path>
                                                                    <path
                                                                        d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
                                                    h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
                                                    C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
                                                    c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
                                                    c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
                                                    h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z">
                                                                    </path>
                                                                    <path
                                                                        d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
                                                    C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z">
                                                                    </path>
                                                                    <path
                                                                        d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
                                                    c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        July 29,
                                                        2023
                                                    </span>
                                                    <span class=" as_date"><img src="assets/images/rating-white.png"
                                                            alt=""></span>
                                                    <a class=" as_reply"><img src="assets/images/svg/reply.svg"
                                                            alt=""></a>
                                                </div>
                                                <p class="as_text_color">“Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                                    Risus commodo viverra maecenas accumsan lacus vel facilisis.”
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="as_comnt_img">
                                        <img src="assets/images/coment3.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="as_comnt_detail">
                                        <div class="as_comnt_title">
                                            <h4 class="as_subheading as_margin0 as_white_color_default">Peter Lee
                                            </h4>
                                            <span class=" as_time">
                                                <!-- <img src="assets/images/svg/clock.svg" alt=""> -->
                                                <svg height="15px" width="15px" fill="#ffffff" viewBox="0 0 512 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm121.75 388.414062c-4.160156 4.160157-9.621094 6.253907-15.082031 6.253907-5.460938 0-10.925781-2.09375-15.082031-6.253907l-106.667969-106.664062c-4.011719-3.988281-6.25-9.410156-6.25-15.082031v-138.667969c0-11.796875 9.554687-21.332031 21.332031-21.332031s21.332031 9.535156 21.332031 21.332031v129.835938l100.417969 100.414062c8.339844 8.34375 8.339844 21.824219 0 30.164062zm0 0">
                                                    </path>
                                                </svg>
                                                09:25 AM
                                            </span>
                                            <span class=" as_date">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                    y="0px" width="15px" height="15px" fill="#ffffff"
                                                    viewBox="0 0 488.152 488.152"
                                                    style="enable-background:new 0 0 488.152 488.152;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
                                              c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z">
                                                            </path>
                                                            <path
                                                                d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
                                              c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z">
                                                            </path>
                                                            <path
                                                                d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
                                              c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z">
                                                            </path>
                                                            <path
                                                                d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
                                              c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z">
                                                            </path>
                                                            <path
                                                                d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
                                              c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z">
                                                            </path>
                                                            <path
                                                                d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
                                              c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z">
                                                            </path>
                                                            <path
                                                                d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
                                              h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
                                              C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
                                              c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
                                              c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
                                              h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z">
                                                            </path>
                                                            <path
                                                                d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
                                              C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z">
                                                            </path>
                                                            <path
                                                                d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
                                              c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                July 29,
                                                2023
                                            </span>
                                            <span class=" as_date"><img src="assets/images/rating-white.png"
                                                    alt=""></span>
                                            <a class=" as_reply"><img src="assets/images/svg/reply.svg"
                                                    alt=""></a>
                                        </div>
                                        <p class="as_text_color">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                                            accumsan lacus vel facilisis.”
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="as_comment_form">
                            <div class="as_comment_form_heading">
                                <h1 class="as_heading">Leave a Reply</h1>
                            </div>
                            <div class="as_comment_form_row">
                                <form class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" id=""
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" id=""
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="" id="" class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 ">
                                        <a href="javascript:;" class="as_btn">send</a>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
