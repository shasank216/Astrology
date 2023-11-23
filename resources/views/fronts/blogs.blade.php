@extends('fronts.layouts.app')
{{--
@section('front-title')
    {{ __('messages.web.medical') }}
@endsection
--}}
@section('front-content')
    @php
        $styleCss = 'style';
    @endphp

<section class="as_breadcrum_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Blogs</h1>

                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="as_blog_wrapper as_padderTop80 as_padderBottom80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="as_blog_box">
                            <div class="as_blog_img">
                                <a href="url {{ url('blog_details') }}"><img src="assets/images/blog1.jpg" alt=""
                                        class="img-responsive"></a>
                                <span class="appointment_btn">July 29, 2022</span>
                            </div>
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/svg/user.svg" alt="">By -
                                        Admin</a></li>
                                <li><a href="javascript:;"><img src="assets/images/svg/comment.svg" alt="">0
                                        comments</a></li>
                            </ul>
                            <h4 class="as_subheading"><a href="blog_left_detail.html"> Consectetur adipiscing
                                    elit sedeius mod tempor incididunt ut labore.</a></h4>
                            <p class="as_font14 as_margin0">Consectetur adipiscing elit, sed desdo eiusmod
                                tempor incididuesdeentiut labore etesde doloesire esdesdeges magna
                                aliquapspendisse and the gravida.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="as_blog_box">
                            <div class="as_blog_img">
                                <a href="url {{ url('blog_details') }}"><img src="assets/images/blog2.jpg" alt=""
                                        class="img-responsive"></a>
                                <span class="appointment_btn">July 29, 2022</span>
                            </div>
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/svg/user.svg" alt="">By -
                                        Admin</a></li>
                                <li><a href="javascript:;"><img src="assets/images/svg/comment.svg" alt="">0
                                        comments</a></li>
                            </ul>
                            <h4 class="as_subheading"><a href="blog_left_detail.html"> Consectetur adipiscing
                                    elit sedeius mod tempor incididunt ut labore.</a></h4>
                            <p class="as_font14 as_margin0">Consectetur adipiscing elit, sed desdo eiusmod
                                tempor incididuesdeentiut labore etesde doloesire esdesdeges magna
                                aliquapspendisse and the gravida.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="as_blog_box">
                            <div class="as_blog_img">
                                <a href="url {{ url('blog_details') }}"><img src="assets/images/blog3.jpg" alt=""
                                        class="img-responsive"></a>
                                <span class="appointment_btn">July 29, 2022</span>
                            </div>
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/svg/user.svg" alt="">By -
                                        Admin</a></li>
                                <li><a href="javascript:;"><img src="assets/images/svg/comment.svg" alt="">0
                                        comments</a></li>
                            </ul>
                            <h4 class="as_subheading"><a href="blog_left_detail.html"> Consectetur adipiscing
                                    elit sedeius mod tempor incididunt ut labore.</a></h4>
                            <p class="as_font14 as_margin0">Consectetur adipiscing elit, sed desdo eiusmod
                                tempor incididuesdeentiut labore etesde doloesire esdesdeges magna
                                aliquapspendisse and the gravida.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="as_blog_box">
                            <div class="as_blog_img">
                                <a href="url {{ url('blog_details') }}"><img src="assets/images/blog4.jpg" alt=""
                                        class="img-responsive"></a>
                                <span class="appointment_btn">July 29, 2022</span>
                            </div>
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/svg/user.svg" alt="">By -
                                        Admin</a></li>
                                <li><a href="javascript:;"><img src="assets/images/svg/comment.svg" alt="">0
                                        comments</a></li>
                            </ul>
                            <h4 class="as_subheading"><a href="blog_left_detail.html"> Consectetur adipiscing
                                    elit sedeius mod tempor incididunt ut labore.</a></h4>
                            <p class="as_font14 as_margin0">Consectetur adipiscing elit, sed desdo eiusmod
                                tempor incididuesdeentiut labore etesde doloesire esdesdeges magna
                                aliquapspendisse and the gravida.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="as_blog_box">
                            <div class="as_blog_img">
                                <a href="url {{ url('blog_details') }}"><img src="assets/images/blog5.jpg" alt=""
                                        class="img-responsive"></a>
                                <span class="appointment_btn">July 29, 2022</span>
                            </div>
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/svg/user.svg" alt="">By -
                                        Admin</a></li>
                                <li><a href="javascript:;"><img src="assets/images/svg/comment.svg" alt="">0
                                        comments</a></li>
                            </ul>
                            <h4 class="as_subheading"><a href="blog_left_detail.html"> Consectetur adipiscing
                                    elit sedeius mod tempor incididunt ut labore.</a></h4>
                            <p class="as_font14 as_margin0">Consectetur adipiscing elit, sed desdo eiusmod
                                tempor incididuesdeentiut labore etesde doloesire esdesdeges magna
                                aliquapspendisse and the gravida.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="as_blog_box">
                            <div class="as_blog_img">
                                <a href="url {{ url('blog_details') }}"><img src="assets/images/blog6.jpg" alt=""
                                        class="img-responsive"></a>
                                <span class="appointment_btn">July 29, 2022</span>
                            </div>
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/svg/user.svg" alt="">By -
                                        Admin</a></li>
                                <li><a href="javascript:;"><img src="assets/images/svg/comment.svg" alt="">0
                                        comments</a></li>
                            </ul>
                            <h4 class="as_subheading"><a href="blog_left_detail.html"> Consectetur adipiscing
                                    elit sedeius mod tempor incididunt ut labore.</a></h4>
                            <p class="as_font14 as_margin0">Consectetur adipiscing elit, sed desdo eiusmod
                                tempor incididuesdeentiut labore etesde doloesire esdesdeges magna
                                aliquapspendisse and the gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection