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
                            <div class="item">
                            <img src="admin_ui/assets/services/icon2-1.svg" alt="">
                            <span>Public Sector</span>
                            </div>
                            <div class="item">
                            <img src="admin_ui/assets/services/icon2-2.svg" alt="">
                            <span>Private Sector</span></div>
                            <div class="item">
                            <img src="admin_ui/assets/services/icon2.svg" alt="">
                            <span>Non-Governmental Sector</span></div>
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
                                <div class="item">
                                <img src="admin_ui/assets/services/icon1.svg" alt="">
                                <span>Project Management</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon2-3.svg" alt="">
                                <span>Strategic Management</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon1-3.svg" alt="">
                                <span>ID & OD</span>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon2-7.svg" alt="">
                                <span>HRM</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon2-5.svg" alt="">
                                <span>HR Development</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon2-6.svg" alt="">
                                <span>Economic & Financial Analysis</span>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon1-2.svg" alt="">
                                <span>Socio-Economic Studies</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon2-4.svg" alt="">
                                <span>Databases, MIS & GIS</span>
                                </div>
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
                                <div class="item">                                    
                                <img src="admin_ui/assets/services/icon3.svg" alt="">
                                <span>Public Sector: <br/> ID, OD & Systems Developments</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon3-3.svg" alt="">
                                <span>Private Sector: <br/> ID, OD & Systems Developments</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon3-2.svg" alt="">
                                <span>NGOs Related</span>
                                </div>
                            </div>
                            <div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon3-1.svg" alt="">
                                <span>Capacity Building & Awareness</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon3-5.svg" alt="">
                                <span>Participatory Development/ Local Urban and Rual Development</span>
                                </div>
                                <div class="item">
                                <img src="admin_ui/assets/services/icon3-4.svg" alt="">
                                <span>Others(sector specific, strategies and policies related, etc)</span>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
        </section>
@endsection