@extends('front.layout')
@section('title')
    {{ trans('front.title') }}
@endsection

@section('content')
        <section id="content">
            <div id="tabs">
                <section class="main-title" data-toggle="tab" href="#menu0">
                    <div></div>
                    <h2>{{ trans('front.expertises_services_projects') }}</h2>
                </section>
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#menu1">
                            <div class="tab-triangle"><span>1</span></div> Our Expertise
                        </a></li>
                    <li><a data-toggle="tab" href="#menu2">
                            <div class="tab-triangle"><span>2</span></div> Our Services
                        </a></li>
                    <li><a data-toggle="tab" href="#menu3">
                            <div class="tab-triangle"><span>3</span></div> Our Projects
                        </a></li>

                </ul>

                <div class="tab-content">
                    <div id="menu0" class="blue-border tab-pane fade active show">
                        <section>
                            <div class="shape">
                                <div class="path">
                                    <div class="path">
                                        <img src="{{ asset($headDescriptions->image) }}" class="icon" alt="">
                                    </div>
                                </div>
                                <div class="path"></div>
                            </div>
                            <div class="data-details">
                                <h3>{{ translation($headDescriptions,'title') }}</h3>
                                <p>{{ translation($headDescriptions,'description') }}</p>
                            </div>
                        </section>

                    </div>
                    <div id="menu1" class="blue-border notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path">
                                    <div class="path">

                                        <img src="{{ asset($headDescriptionsExpertises->image) }}" class="icon" alt="">
                                    </div>
                                </div>
                                <div class="path"></div>
                            </div>

                            <div class="data-details">
                                <h3>{{ translation($headDescriptionsExpertises,'title') }}</h3>
                                <p>{{ translation($headDescriptionsExpertises,'description') }}</p>
                            </div>
                        </section>
                        <section class="extra-data">
                            <img src="../assets/services/icon1-2.svg" alt="">
                            <img src="../assets/services/icon1-1.svg" alt="">
                            <img src="../assets/services/icon1.svg" alt="">
                        </section>
                    </div>
                    <div id="menu2" class="blue-border notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path">
                                    <div class="path">

                                        <img src="{{ asset($headDescriptionsServices->image) }}" class="icon" alt="">
                                    </div>
                                </div>
                                <div class="path"></div>
                            </div>

                            <div class="data-details">
                                <h3>{{ translation($headDescriptionsServices,'title') }}</h3>
                                <p>{{ translation($headDescriptionsServices,'description') }}</p>
                            </div>
                        </section>
                        <section class="extra-data">
                            <div>
                                <img src="../assets/services/icon2-1.svg" alt="">
                                <img src="../assets/services/icon2-2.svg" alt="">
                                <img src="../assets/services/icon2-3.svg" alt="">
                            </div>
                            <div>
                                <img src="../assets/services/icon2-4.svg" alt="">
                                <img src="../assets/services/icon2-5.svg" alt="">
                                <img src="../assets/services/icon2-6.svg" alt="">
                            </div>
                            <div>
                                <img src="../assets/services/icon2-7.svg" alt="">
                                <img src="../assets/services/icon2-8.svg" alt="">
                            </div>
                        </section>
                    </div>
                    <div id="menu3" class="blue-border notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path">
                                    <div class="path">

                                        <img src="{{ asset($headDescriptionsProjects->image) }}" class="icon" alt="">
                                    </div>
                                </div>
                                <div class="path"></div>
                            </div>

                            <div class="data-details">
                                <h3>{{ translation($headDescriptionsProjects,'title') }}</h3>
                                <p>{{ translation($headDescriptionsProjects,'description') }}</p>
                            </div>
                        </section>
                        <section class="extra-data">
                            <div>
                                    <img src="../assets/services/icon3-1.svg" alt="">
                                    <img src="../assets/services/icon3-2.svg" alt="">
                                    <img src="../assets/services/icon3-3.svg" alt="">
                            </div>
                            <div>
                                    <img src="../assets/services/icon3-4.svg" alt="">
                                    <img src="../assets/services/icon3-5.svg" alt="">
                                    <img src="../assets/services/icon3-6.svg" alt="">
                            </div>
                        </section>

                    </div>
                </div>
        </section>
@endsection