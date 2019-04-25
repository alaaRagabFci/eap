@extends('front.layout')
@section('title')
    {{ trans('front.title') }}
@endsection

@section('content')
        <section id="content">
            <div id="tabs">
                <section class="main-title">
                    <div></div>
                    <h2>{{ trans('front.contactUsForPublications') }}</h2>
                </section>
                <section class="contact">
                    <form>
                        <input type="text" placeholder="{{ trans('front.name') }}">
                        <input type="email" placeholder="{{ trans('front.email') }}">
                        <input type="text" placeholder="{{ trans('front.phone') }}">
                        <textarea name="msg" id="" cols="30" rows="10" placeholder="{{ trans('front.details') }}"></textarea>
                        <button class="btn w-100" type="button">{{ trans('front.send') }}</button>
                    </form>
                    <div class="map"></div>
                </section>
            

          
            </div>
        </section>
@endsection