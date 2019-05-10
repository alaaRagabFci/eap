@extends('front.layout')
@section('title')
    {{ trans('front.title') }}
@endsection

@section('content')
        <section id="content">
            <div id="tabs">
                <section class="main-title" data-toggle="tab" href="#menu0">
                    <div></div>
                    <h2> {{ trans('front.consultancy') }}</h2>
                </section>
                <ul class="nav nav-tabs">
                    @for ($i = 0; $i < count($consultancies); $i++)
                        <li>
                            <a data-toggle="tab" href="#menu{{ $i+1 }}">
                            <div class="tab-triangle"><span>{{ $i+1 }}</span></div> {{ translation($consultancies[$i],'title') }}
                            </a>
                        </li>
                    @endfor
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
                    @for ($i = 0; $i < count($consultancies); $i++)
                        <div id="menu{{$i+1}}" class="notShow  tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path">
                                    <div class="path">
                                        <img src="{{ asset($consultancies[$i]->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="path"></div>
                            </div>
                            <div class="data-details" id="height">
                                <h3>{{ translation($consultancies[$i],'title') }}</h3>
                                <p>{{ translation($consultancies[$i],'description') }}</p>
                            </div>
                        </section>
                    </div>
                    @endfor
                </div>
            </div>
        </section>
@endsection