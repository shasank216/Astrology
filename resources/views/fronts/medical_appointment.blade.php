@extends('fronts.layouts.app')
@section('front-title')
    {{ __('messages.web.medical_appointment') }}
@endsection
@section('front-content')
    @php
        $styleCss = 'style';
    @endphp

    <section class="as_breadcrum_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Appointment</h1>

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="as_appointment_wrapper as_padderTop80 as_padderBottom80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="as_heading as_heading_center text-center">Make Your Appointment To Discuss Any Problem.</h2>
                    <p class="as_font14 as_padderBottom10 text-center">There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in some form, by injected humour, or randomised
                        words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                        you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                        Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the
                        first true generator on the Internet.</p>
                    <p class="as_font14 as_padderBottom20 text-center">It uses a dictionary of over 200 Latin words,
                        combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
                        reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                        non-characteristic words etc.</p>



                    <div class="as_journal_box_wrapper">
                        <form>
                            <h3 class="text-center as_subheading">Appointment Form</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>name</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>email</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>mobile number</label>

                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>gender</label>
                                    <div class="form-group as_select_box">
                                        <select class="form-control" data-placeholder="Gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>time of day</label>
                                    <div class="form-group as_select_box" data-placeholder="Time of day">
                                        <select class="form-control">
                                            <option value="1"> Morning </option>
                                            <option value="2">Afternoon</option>
                                            <option value="3">Evening </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>way to reach</label>
                                    <div class="form-group as_select_box" data-placeholder="Way to reach">
                                        <select class="form-control">
                                            <option value="1">Phone </option>
                                            <option value="2">Email</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Preferred Date</label>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Month">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Year">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Preferred Time</label>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Hrs">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Mins">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Sec">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>address</label>
                                    <div class="form-group">
                                        <textarea placeholder="Address" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Reason for appointment</label>
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center as_padderTop20">
                                    <a href="javascript:;" class="as_btn">make an appointment</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>


    <!-- Modal -->
    <div id="as_login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="as_login_box active">
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="" placeholder="Enter email" class="form-control"
                                    id="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="" placeholder="Enter password here"
                                    class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <div class="as_login_data">
                                    <label>Remember me
                                        <input type="checkbox" name="as_remember_me" value="">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#">Forgot password ?</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="javascript:;" class="as_btn">login</a>
                            </div>
                        </form>
                        <p class="text-center as_margin0 as_padderTop20">Create An Account ? <a href="javascript:;"
                                class="as_orange as_signup">SignUp</a></p>
                    </div>
                    <div class="as_signup_box">
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="" placeholder="Enter name" class="form-control"
                                    id="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="" placeholder="Enter email" class="form-control"
                                    id="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="" placeholder="Enter password here"
                                    class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="" placeholder="Enter mobile number"
                                    class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <select name="" class="form-control" id="">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <a href="javascript:;" class="as_btn">Sign Up</a>
                            </div>
                        </form>
                        <p class="text-center as_margin0 as_padderTop20">Have An Account ? <a href="javascript:;"
                                class="as_orange as_login">Login</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
