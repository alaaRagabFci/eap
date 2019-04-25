@extends('front.layout')
@section('title')
    {{ trans('front.title') }}
@endsection

@section('content')
    <section id="content">
        <div id="tabs">
            <section class="main-title" data-toggle="tab" href="#menu0">
                <div></div>
                <h2> {{ trans('front.about_us') }}</h2>
            </section>
            <ul class="nav nav-tabs">
                @for ($i = 0; $i < count($aboutUs); $i++)
                    <li><a data-toggle="tab" href="#menu{{$i+1}}">
                            <div class="tab-triangle"><span>{{ $i+1 }}</span></div> {{ translation($aboutUs[$i],'title') }}
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
                @for ($i = 0; $i < count($aboutUs); $i++)
                    <div id="menu{{ $i+1 }}" class="notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path">
                                    <div class="path">
                                        <img src="{{ asset($aboutUs[$i]->image) }}" class="icon" alt="">
                                    </div>
                                </div>
                                <div class="path"></div>
                            </div>
                            <div class="data-details">
                                <h3>{{ translation($aboutUs[$i],'title') }}</h3>
                                <p>{!! translation($aboutUs[$i],'description') !!}</p>
                            </div>
                        </section>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection