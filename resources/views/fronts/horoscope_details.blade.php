@extends('fronts.layouts.app')
@section('front-title')
    {{ __('messages.web.kundali') }}
@endsection

@section('front-content')
    <div class="as_main_wrapper">
        <section class="as_breadcrum_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Zodiac Details</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>Zodiac Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="as_zodiac_single_wrapper as_padderTop80 as_padderBottom60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="as_zodiac_single_inner">
                            <div class="as_zodiac_heading as_padderBottom50">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign1.svg') }}" alt="">
                                </span>
                                Aries Horoscope
                                <span>( Mar 21 - Apr 19 )</span>
                            </div>
                            <div class="as_tab_wrapper">
                                <ul class="nav nav-horoscope-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="Today" data-bs-toggle="tab"
                                            data-bs-target="#today" type="button" role="tab" aria-controls="today"
                                            aria-selected="true">Today</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="Tomorrow" data-bs-toggle="tab"
                                            data-bs-target="#tomorrow" type="button" role="tab"
                                            aria-controls="tomorrow" aria-selected="false">Tomorrow</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="This-Week" data-bs-toggle="tab"
                                            data-bs-target="#this-week" type="button" role="tab"
                                            aria-controls="this-Week" aria-selected="false">This Week</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="This-Month" data-bs-toggle="tab"
                                            data-bs-target="#this-month" type="button" role="tab"
                                            aria-controls="this-month" aria-selected="false">This Month</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="This-Year" data-bs-toggle="tab"
                                            data-bs-target="#this-year" type="button" role="tab"
                                            aria-controls="this-year" aria-selected="false">This Year</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="today" role="tabpanel"
                                        aria-labelledby="Today">
                                        <div class="as_countdown_wrapper">
                                            <ul>
                                                <li class="text-center">
                                                    <!-- <span>45%</span> -->
                                                    <div class="as_progressbar p1 circular-progress-bar"
                                                        style="height: 150px; width: 150px;">
                                                        <div class="progress-percentage">94%</div>
                                                        <div class="progress-text"></div><canvas height="150"
                                                            width="150"></canvas>
                                                    </div>
                                                    <h3>Love</h3>
                                                </li>
                                                <li class="text-center">
                                                    <div class="as_progressbar p1 circular-progress-bar"
                                                        style="height: 150px; width: 150px;">
                                                        <div class="progress-percentage">94%</div>
                                                        <div class="progress-text"></div><canvas height="150"
                                                            width="150"></canvas>
                                                    </div>
                                                    <h3>career</h3>
                                                </li>
                                                <li class="text-center">
                                                    <div class="as_progressbar p1 circular-progress-bar"
                                                        style="height: 150px; width: 150px;">
                                                        <div class="progress-percentage">94%</div>
                                                        <div class="progress-text"></div><canvas height="150"
                                                            width="150"></canvas>
                                                    </div>
                                                    <h3>money</h3>
                                                </li>
                                                <li class="text-center">
                                                    <div class="as_progressbar p1 circular-progress-bar"
                                                        style="height: 150px; width: 150px;">
                                                        <div class="progress-percentage">94%</div>
                                                        <div class="progress-text"></div><canvas height="150"
                                                            width="150"></canvas>
                                                    </div>
                                                    <h3>health</h3>
                                                </li>
                                                <li class="text-center">
                                                    <div class="as_progressbar p1 circular-progress-bar"
                                                        style="height: 150px; width: 150px;">
                                                        <div class="progress-percentage">94%</div>
                                                        <div class="progress-text"></div><canvas height="150"
                                                            width="150"></canvas>
                                                    </div>
                                                    <h3>business</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim
                                            veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            nisi ut aliquip ex ea commodo consequat.</p>
                                        <h3 class="as_subheading as_orange mb-0">love</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                        <h3 class="as_subheading as_orange mb-0">money</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">Health</h3>
                                        <p class="as_font14 as_padderBottom10">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                    </div>
                                    <div class="tab-pane fade" id="tomorrow" role="tabpanel"
                                        aria-labelledby="Tomorrow">
                                        <div class="as_countdown_wrapper">
                                            <ul>
                                                <li class="text-center">
                                                    <span>45%</span>
                                                    <h3>Love</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>94%</span>
                                                    <h3>career</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>84%</span>
                                                    <h3>money</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>64%</span>
                                                    <h3>health</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>76%</span>
                                                    <h3>business</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim
                                            veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            nisi ut aliquip ex ea commodo consequat.</p>
                                        <h3 class="as_subheading as_orange mb-0">love</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                        <h3 class="as_subheading as_orange mb-0">money</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">Health</h3>
                                        <p class="as_font14 as_padderBottom10">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                    </div>
                                    <div class="tab-pane fade" id="this-week" role="tabpanel"
                                        aria-labelledby="This-Week">
                                        <div class="as_countdown_wrapper">
                                            <ul>
                                                <li class="text-center">
                                                    <span>45%</span>
                                                    <h3>Love</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>94%</span>
                                                    <h3>career</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>84%</span>
                                                    <h3>money</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>64%</span>
                                                    <h3>health</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>76%</span>
                                                    <h3>business</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim
                                            veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            nisi ut aliquip ex ea commodo consequat.</p>
                                        <h3 class="as_subheading as_orange mb-0">love</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                        <h3 class="as_subheading as_orange mb-0">money</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">Health</h3>
                                        <p class="as_font14 as_padderBottom10">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                    </div>
                                    <div class="tab-pane fade" id="this-month" role="tabpanel"
                                        aria-labelledby="This-Month">
                                        <div class="as_countdown_wrapper">
                                            <ul>
                                                <li class="text-center">
                                                    <span>45%</span>
                                                    <h3>Love</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>94%</span>
                                                    <h3>career</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>84%</span>
                                                    <h3>money</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>64%</span>
                                                    <h3>health</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>76%</span>
                                                    <h3>business</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim
                                            veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            nisi ut aliquip ex ea commodo consequat.</p>
                                        <h3 class="as_subheading as_orange mb-0">love</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                        <h3 class="as_subheading as_orange mb-0">money</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">Health</h3>
                                        <p class="as_font14 as_padderBottom10">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                    </div>
                                    <div class="tab-pane fade" id="this-year" role="tabpanel"
                                        aria-labelledby="This-Year">
                                        <div class="as_countdown_wrapper">
                                            <ul>
                                                <li class="text-center">
                                                    <span>45%</span>
                                                    <h3>Love</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>94%</span>
                                                    <h3>career</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>84%</span>
                                                    <h3>money</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>64%</span>
                                                    <h3>health</h3>
                                                </li>
                                                <li class="text-center">
                                                    <span>76%</span>
                                                    <h3>business</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim aed minsdeim
                                            veniames desde, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duiess aute irure dolor in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            nisi ut aliquip ex ea commodo consequat.</p>
                                        <h3 class="as_subheading as_orange mb-0">love</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                        <h3 class="as_subheading as_orange mb-0">money</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <h3 class="as_subheading as_orange mb-0">Health</h3>
                                        <p class="as_font14 as_padderBottom10">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident, sunt isden culpa quesdei officia deserunt mollit anim id est
                                            laborumc ommodo consequat. Duiess aute irure.</p>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupsitate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <h3 class="as_subheading as_orange mb-0">career</h3>
                                        <p class="as_font14 as_padderBottom20">Consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt uest labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            sequis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duiess aute irure dolor in reprehenderit in volupisitate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            noeseiin proident.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="as_zodiac_sidebar">
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign1.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Aries</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign2.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Taurus </h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign3.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Gemini</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign4.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Cancer</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign5.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Leo</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign6.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Virgo</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign7.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Libra</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign8.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Scorpio</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign9.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Sagittarius</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign10.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Capricorn</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign11.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Capricorn</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                            <div class="as_horoscope_box">
                                <span class="as_sign">
                                    <img src="{{ url('newhome/assets/images/svg/sign12.svg') }}" alt="">
                                </span>
                                <div>
                                    <h5>Pisces</h5>
                                    <p>Mar 21 - Apr 19</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="as_overview_wrapper as_padderBottom80 as_padderTop80 as_section_light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="as_heading as_heading_center">Daily Planetary Overview</h1>
                        <p class="as_font14 as_margin0 as_padderBottom50">
                            Consectetur adipiscing elit, sed do eiusmod tempor incididuesdeentiut labore <br>etesde dolore
                            magna aliquapspendisse and the gravida.
                        </p>
                        <div class="as_overview_slider">
                            <div class="as_overview_inner">
                                <h4 class="as_orange">Mercury in Aries square Mars in Capricorn </h4>
                                <p class="as_font14">Simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum It has survived not only five rinter took a
                                    galley of type and scrambled it centuries, but also the passages,</p>
                                <span class="as_btn">
                                    <img src="{{ url('newhome/assets/images/svg/calender.svg') }}" alt="">July
                                    29, 2020
                                </span>
                            </div>
                            <div class="as_overview_inner">
                                <h4 class="as_orange">Mercury in Aries square Mars in Capricorn </h4>
                                <p class="as_font14">Simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum It has survived not only five rinter took a
                                    galley of type and scrambled it centuries, but also the passages,</p>
                                <span class="as_btn">
                                    <img src="{{ url('newhome/assets/images/svg/calender.svg') }}" alt="">July
                                    29, 2020
                                </span>
                            </div>
                            <div class="as_overview_inner">
                                <h4 class="as_orange">Mercury in Aries square Mars in Capricorn </h4>
                                <p class="as_font14">Simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum It has survived not only five rinter took a
                                    galley of type and scrambled it centuries, but also the passages,</p>
                                <span class="as_btn">
                                    <img src="{{ url('newhome/assets/images/svg/calender.svg') }}" alt="">July
                                    29, 2020
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
