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
                            <div class="tab-triangle"><span>1</span></div> {{ trans('front.ourExpertise') }}
                        </a></li>
                    <li><a data-toggle="tab" href="#menu2">
                            <div class="tab-triangle"><span>2</span></div> {{ trans('front.ourServices') }}
                        </a></li>
                    <li><a data-toggle="tab" href="#menu3">
                            <div class="tab-triangle"><span>3</span></div> {{ trans('front.ourProjects') }}
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
                            @foreach($expertises as $expertise)
                            <div class="item">
                            <img src="{{ asset($expertise->icon) }}" alt="">
                            <span>{{ translation($expertise,'title') }}</span>
                            </div>
                            @endforeach
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
                                @for($i = 0; $i < count($services); $i++)
                                <div class="item">
                                    <img src="{{ asset($services[$i]->icon) }}" alt="">
                                    <span>{{ translation($services[$i],'title') }}</span>
                                </div>
                                    @if($i == 2)
                                        @break;
                                    @endif
                                @endfor
                            </div>
                            <div>
                                @for($i = 3; $i < count($services); $i++)
                                    <div class="item">
                                        <img src="{{ asset($services[$i]->icon) }}" alt="">
                                        <span>{{ translation($services[$i],'title') }}</span>
                                    </div>
                                    @if($i == 5)
                                        @break;
                                    @endif
                                 @endfor
                            </div>
                            <div>
                                @for($i = 6; $i < count($services); $i++)
                                    <div class="item">
                                        <img src="{{ asset($services[$i]->icon) }}" alt="">
                                        <span>{{ translation($services[$i],'title') }}</span>
                                    </div>
                                    @if($i == 7)
                                        @break;
                                    @endif
                                @endfor
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
                                @for($i = 0; $i < count($projects); $i++)
                                    <div class="item">
                                        <img src="{{ asset($projects[$i]->icon) }}" alt="">
                                        <span>{{ translation($projects[$i],'title') }}</span>
                                    </div>
                                    @if($i == 2)
                                        @break;
                                    @endif
                                @endfor
                            </div>
                            <div>
                                @for($i = 3; $i < count($projects); $i++)
                                    <div class="item">
                                        <img src="{{ asset($projects[$i]->icon) }}" alt="">
                                        <span>{{ translation($projects[$i],'title') }}</span>
                                    </div>
                                @endfor
                            </div>
                        </section>

                    </div>
                </div>
        </section>
@endsection