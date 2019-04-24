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
                                <div class="tab-triangle"><span>1</span></div> Technical Assistance and Financing
                                Agencies
                            </a></li>
                        <li><a data-toggle="tab" href="#menu2">
                                <div class="tab-triangle"><span>2</span></div> Some Beneficiary Organizations
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
                                <div class="data-details">
                                    <h3>{{ translation($headDescriptions,'title') }}</h3>
                                    <p>{{ translation($headDescriptions,'description') }}</p>
                                </div>
                            </section>

                        </div>
                        <div id="menu1" class="notShow tab-pane fade">
                            <section class="row">
                                <div class="col-6">
                                    <div class="triangle-list"><span>1</span></div>
                                    <h4>hello alaa</h4>
                                </div>
                                <div class="col-6">
                                    <div class="triangle-list"><span>2</span></div>
                                    <h4>hello alaa</h4>
                                </div>
                            </section>
                        </div>

                        <div id="menu2" class="notShow tab-pane fade">
                            <section class="row">
                                <div class="col-6">
                                    <div class="triangle-list"><span>1</span></div>
                                    <h4>hello alaa</h4>
                                </div>
                                <div class="col-6">
                                    <div class="triangle-list"><span>2</span></div>
                                    <h4>hello alaa</h4>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </section>
        </section>
@endsection