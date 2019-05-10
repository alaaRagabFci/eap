@extends('front.layout')
@section('title')
    {{ trans('front.title') }}
@endsection

@section('content')
        <section id="content">
            <section id="content">
                <div id="tabs">
                    <section class="main-title" data-toggle="tab" href="#menu0">
                        <div></div>
                        <h2> {{ trans('front.clients') }}</h2>
                    </section>
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#menu1">
                                <div class="tab-triangle"><span>1</span></div> {{ trans('front.clients1') }}
                                Agencies
                            </a></li>
                        <li><a data-toggle="tab" href="#menu2">
                                <div class="tab-triangle"><span>2</span></div> {{ trans('front.partners1') }}
                            </a></li>

                    </ul>

                    <div class="tab-content">
                        <div id="menu0" class="blue-border tab-pane fade active show">
                            <section>
                                <div class="shape">
                                    <div class="path">
                                        <div class="path">
                                            <img src="{{ asset($headDescriptions->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="path"></div>
                                </div>
                                <div class="data-details" id="height">
                                    <h3>{{ translation($headDescriptions,'title') }}</h3>
                                    <p>{{ translation($headDescriptions,'description') }}</p>
                                </div>
                            </section>

                        </div>
                        <div id="menu1" class="notShow tab-pane fade">
                            <section class="row partners">
                                @for ($i = 0; $i < count($clients); $i++)
                                    <div class="col-5 offset-1">
                                        <div class="triangle-list"><span>{{$i+1}}</span></div>
                                        <h4>{{ translation($clients[$i],'name') }}</h4>
                                    </div>
                                @endfor
                            </section>
                        </div>

                        <div id="menu2" class="notShow tab-pane fade">
                            <section class="row partners">
                                @for ($i = 0; $i < count($partners); $i++)
                                    <div class="col-5 offset-1">
                                        <div class="triangle-list"><span>{{$i+1}}</span></div>
                                        <h4>{{ translation($partners[$i],'name') }}</h4>
                                    </div>
                                @endfor
                            </section>
                        </div>

                    </div>
                </div>
            </section>
        </section>
@endsection