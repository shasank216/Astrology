@extends('fronts.layouts.app')
@section('front-title')
    {{ __('messages.web.medical_services') }}
@endsection

@section('front-content')

        <section class="as_breadcrum_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Blog Single</h1> 

                        <ul class="breadcrumb"> 
                            <li><a href="#">Home</a></li>
                            <li>Blog Single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="as_servicedetail_wrapper as_padderBottom80 as_padderTop80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="as_blog_sidebar">
                            <div class="as_search_widget">
                                <input type="text" name="" class="form-control" id="" placeholder="Search...">
                                <a href="#"><img src="assets/images/svg/search.svg" alt=""></a>
                            </div>
                            <div class="as_service_widget as_padderBottom40">
                                <h3 class="as_heading">Categories</h3>

                                <ul> 
                                    <li>
                                        <a href="javascript:;">
                                            <span>Zodiac</span>
                                            <span>( 210 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>Vastu Shastra</span>
                                            <span>( 62 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>Horoscope</span>
                                            <span>( 521 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>StartsPlanets</span>
                                            <span>( 415 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>Gemstone</span>
                                            <span>( 52 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>Numerology</span>
                                            <span>( 75 )</span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="javascript:;">
                                            <span>Tarot Cards</span>
                                            <span>( 20 )</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="as_service_widget as_padderBottom40">
                                <h3 class="as_heading">Recent Posts</h3>

                                 <ul class="as_recentposts">
                                    <li>
                                        <a href="javascript:;">
                                            <div class="as_img">
                                                <img src="assets/images/rpost1.jpg" alt="">
                                            </div>
                                            <div class="as_detail">
                                                <h5>Consectetur adipicing esilit sedeiusm odtempor.</h5>
                                                <span><img src="assets/images/svg/calender1.svg" alt=""> July 29, 2022</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="as_img">
                                                <img src="assets/images/rpost2.jpg" alt="">
                                            </div>
                                            <div class="as_detail">
                                                <h5>Consectetur adipicing esilit sedeiusm odtempor.</h5>
                                                <span><img src="assets/images/svg/calender1.svg" alt=""> July 29, 2022</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="as_img">
                                                <img src="assets/images/rpost3.jpg" alt="">
                                            </div>
                                            <div class="as_detail">
                                                <h5>Consectetur adipicing esilit sedeiusm odtempor.</h5>
                                                <span><img src="assets/images/svg/calender1.svg" alt=""> July 29, 2022</span>
                                            </div>
                                        </a>
                                    </li>
                                 </ul>
                            </div>
                            <div class="as_service_widget as_padderBottom40">
                                <h3 class="as_heading">Archives</h3>

                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <span>October 2022</span>
                                            <span>( 210 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>November 2022</span>
                                            <span>( 62 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>December 2022</span>
                                            <span>( 521 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>January 2022</span>
                                            <span>( 415 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>February 2022</span>
                                            <span>( 52 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>May 2022</span>
                                            <span>( 75 )</span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="javascript:;">
                                            <span>August 2022</span>
                                            <span>( 20 )</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="as_service_widget as_padderBottom40">
                                <h3 class="as_heading">Tags</h3>

                                <div class="as_tag_wrapper">
                                    <a href="javascript:;" class="as_btn">Tarot</a>
                                    <a href="javascript:;" class="as_btn">Zodiac</a>
                                    <a href="javascript:;" class="as_btn">Virgo</a>
                                    <a href="javascript:;" class="as_btn">Vedicastrology</a>
                                    <a href="javascript:;" class="as_btn">Numerology</a>
                                    <a href="javascript:;" class="as_btn">Meditation</a>
                                    <a href="javascript:;" class="as_btn">Astro</a>
                                </div>
                            </div>

                            <div class="as_service_widget as_download_box text-center">
                                <a href="javascript:;"><img src="assets/images/logo1.svg" alt=""></a>
                                <h3 class="as_subheading">Download the app now!</h3>

                                <a href="javascript:;" class="as_gplay"><img src="assets/images/gplay.png" alt=""></a>
                                <a href="javascript:;"><img src="assets/images/appstore.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="as_blog_box as_blog_single as_padderBottom80">
                            <div class="as_blog_img">
                                <img src="assets/images/blog_single.jpg" alt="" class="img-responsive">
                                <span class="as_btn">July 29, 2022</span>
                            </div>
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/svg/user.svg" alt="">By - Admin</a></li>
                                <li><a href="javascript:;"><img src="assets/images/svg/comment.svg" alt="">0 comments</a></li>
                            </ul>
                            <h4 class="as_subheading">Consectetur adipiscing elit sedeiusmodtempor Lorem ipsum dolor siesdet amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore eolore.</h4>
                            <p class="as_font14 as_margin0 as_padderBottom20">Consectetur adipiscing elit sed desdo eiusmod tempor incididuesdeentiut labore etesde doloesire  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                            <p class="as_font14 as_margin0">sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                            <div class="as_customer_box text-center as_bloquote">
                                <p class="as_margin0">Sead desdo eiusmod tempor incididuesdeentiut labore etesde doloesire  Lorem ipsum dolor sitctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ommodo consequat.</p>
                                <h3>David Parker <span>- Astrologer</span></h3> 
                            </div> 

                            <h4 class="as_sybheading">Why Horoscope is Important For Life ?</h4>
                            <p class="as_font14 margin0 as_padderBottom10">Aore etesde doloesire  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt uesit labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e commodo consequesdis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla parer eniam.</p>

                            <div class="row as_padderBottom20">
                                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                                    <img src="assets/images/blog_single1.jpg" alt="">
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                                    <p class="as_font14 as_margin0 as_padderBottom20">Aore etesde doloesire  Lorem ipsum dolor sit amet, consectetur adipisicing elit, seesd do eiusmod tempor incididunt uesit labore et dolore magna aliqua. Uesdeet enim esdi minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ese commodieo consequesdis aute irure dolor in reprehenderit in voluptate velit esse csdea edcllueim dolore eu fugiat nulla pariatur.</p>
                                    <p class="as_font14 as_margin0">Aore etesde doloesire  leorem ipsum dolor sit amet, consectetur adeiipisicing elit, sed do eiusmod tempor incididunt uesit labore eeit dolore magna aliqua. </p>
                                </div>
                            </div>

                            <p class="as_font14 as_margin0 as_padderBottom50">Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error siesdeset voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis eest quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, seesd quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                            <div class="as_tag_wrapper">
                                <ul>
                                    <li><img src="assets/images/svg/tag.svg" alt=""> Tag</li>
                                    <li><a href="javascript:;" class="as_btn">Astrology</a></li>
                                    <li><a href="javascript:;" class="as_btn">Horoscope</a></li>
                                    <li><a href="javascript:;" class="as_btn">Zodiac</a></li>
                                    <li><a href="javascript:;" class="as_btn">Virgo</a></li>
                                    <li><a href="javascript:;" class="as_btn">Numerology</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="as_about_admin">
                            <div class="as_aboutImage">
                                <img src="assets/images/admin.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="as_aboutDetail">
                                <h3 class="as_subheading">About Admin - David Parker</h3>
                                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt uesdet labore eedseest dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risusds commodo viverra maecenas accumsan lacus vel facilisis.</p>  
                            </div>
                        </div>

                        <div class="as_comment_section as_padderTop80">
                            <h1 class="as_heading">Comments ( 03 )</h1>
                            <ul>
                                <li>
                                    <div class="as_comnt_img">
                                        <img src="assets/images/coment1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="as_comnt_detail">
                                        <h4 class="as_subheading as_margin0">Joanne Theresa</h4>
                                        <span class="as_font14"><img src="assets/images/svg/calender1.svg" alt=""> July 29, 2022</span>
                                        <p class="as_font14">Consectetur adipiscing elit, sed do eiusmod tempor incididunt uesdet labore eedseest dolore magna alaeseeuis ipsum suspendisse ultrices gravida. Risusds commodo viverra maecenas Lorem ipsum dolor sit ametonsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                        <a href="javascript:;" class="as_btn"><img src="assets/images/svg/reply.svg" alt=""> reply</a>
                                    </div>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <div class="as_comnt_img">
                                                <img src="assets/images/coment2.jpg" alt="" class="img-responsive">
                                            </div>
                                            <div class="as_comnt_detail">
                                                <h4 class="as_subheading as_margin0">Joanne Theresa</h4>
                                                <span class="as_font14"><img src="assets/images/svg/calender1.svg" alt=""> July 29, 2022</span>
                                                <p class="as_font14">Consectetur adipiscing elit, sed do eiusmod tempor incididunt uesdet labore eedseest dolore magna alaeseeuis ipsum suspendisse ultrices gravida. Risusds commodo viverra maecenas Lorem ipsum dolor sit ametonsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                                <a href="javascript:;" class="as_btn"><img src="assets/images/svg/reply.svg" alt=""> reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="as_comnt_img">
                                        <img src="assets/images/coment3.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="as_comnt_detail">
                                        <h4 class="as_subheading as_margin0">Joanne Theresa</h4>
                                        <span class="as_font14"><img src="assets/images/svg/calender1.svg" alt=""> July 29, 2022</span>
                                        <p class="as_font14">Consectetur adipiscing elit, sed do eiusmod tempor incididunt uesdet labore eedseest dolore magna alaeseeuis ipsum suspendisse ultrices gravida. Risusds commodo viverra maecenas Lorem ipsum dolor sit ametonsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                        <a href="javascript:;" class="as_btn"><img src="assets/images/svg/reply.svg" alt=""> reply</a>
                                    </div>
                                </li>
                               
                                <li>
                                    <div class="as_comnt_img">
                                        <img src="assets/images/coment4.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="as_comnt_detail">
                                        <h4 class="as_subheading as_margin0">Joanne Theresa</h4>
                                        <span class="as_font14"><img src="assets/images/svg/calender1.svg" alt=""> July 29, 2022</span>
                                        <p class="as_font14">Consectetur adipiscing elit, sed do eiusmod tempor incididunt uesdet labore eedseest dolore magna alaeseeuis ipsum suspendisse ultrices gravida. Risusds commodo viverra maecenas Lorem ipsum dolor sit ametonsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                        <a href="javascript:;" class="as_btn"><img src="assets/images/svg/reply.svg" alt=""> reply</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="as_comment_form">
                            <h1 class="as_heading">Leave A Comments</h1>
                            <p class="as_font14 as_padderBottom40">Your email address will not be published. Required fields are marked *</p>
                            <form>
                            <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" id="" placeholder="Enter Name Here...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" id="" placeholder="Enter Email Here...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" id="" placeholder="Enter Website Here...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                           <textarea name="" id="" class="form-control" placeholder="Message Here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <a href="javascript:;" class="as_btn">post comment</a>
                                    </div>
                                
                            </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <section class="as_know_sign_wrapper as_padderBottom80 as_padderTop80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="as_heading as_heading_center">Know Your Zodiac Sign</h1>
                        <p class="as_font14 as_margin0 as_padderBottom50">Consectetur adipiscing elit, sed do eiusmod tempor incididuesdeentiut labore <br>etesde dolore magna aliquapspendisse and the gravida.</p>
                 
                 
                        <div class="as_sign_form text-left">
                            <ul> 
                                <li class="as_form_box">
                                    <h3 class="as_subheading">Date Of Birth</h3>
                                    <div class="as_input_feild">
                                        <input type="text" name="" class="form-control as_datepicker" placeholder="DD/MM/YYYY" id="">
                                        <span><img src="assets/images/svg/date.svg" alt=""></span>
                                    </div>
                                </li>
                                <li class="as_form_box">
                                    <h3 class="as_subheading">Time Of Birth</h3>
                                    <div class="as_input_feild">
                                        <input type="text" name="" class="form-control as_timepicker" placeholder="08:00" id="">
                                        <span><img src="assets/images/svg/time.svg" alt=""></span>
                                    </div>
                                </li>
                                <li class="as_form_box">
                                    <h3 class="as_subheading">Place Of Birth</h3>
                                    <div class="as_input_feild"> 
                                        <input type="text" name="" class="form-control" placeholder="Enter City Name...." id="">
                                        <span><img src="assets/images/svg/place.svg" alt=""></span>
                                    </div> 
                                </li>
                                <li class="as_form_box">
                                   <a href="javascript:;" class="as_btn">find zodiac</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="as_overview_wrapper as_padderBottom80 as_padderTop80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="as_heading as_heading_center">Daily Planetary Overview</h1>
                        <p class="as_font14 as_margin0 as_padderBottom50">Consectetur adipiscing elit, sed do eiusmod tempor incididuesdeentiut labore <br>etesde dolore magna aliquapspendisse and the gravida.</p>



                        <div class="as_overview_slider">
                            <div class="as_overview_inner">
                                <h4 class="as_orange">Mercury in Aries square Mars in Capricorn </h4>
                                <p class="as_font14">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum It has survived not only five rinter took a galley of type and scrambled it centuries, but also the passages,</p>
                                <span class="as_btn"><img src="assets/images/svg/calender.svg" alt=""> July 29, 2022</span> 
                            </div>
                            <div class="as_overview_inner">
                                <h4 class="as_orange">Mercury in Aries square Mars in Capricorn </h4>
                                <p class="as_font14">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum It has survived not only five rinter took a galley of type and scrambled it centuries, but also the passages,</p>
                                <span class="as_btn"><img src="assets/images/svg/calender.svg" alt=""> July 29, 2022</span> 
                            </div>
                            <div class="as_overview_inner">
                                <h4 class="as_orange">Mercury in Aries square Mars in Capricorn </h4>
                                <p class="as_font14">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum It has survived not only five rinter took a galley of type and scrambled it centuries, but also the passages,</p>
                                <span class="as_btn"><img src="assets/images/svg/calender.svg" alt=""> July 29, 2022</span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        
@endsection