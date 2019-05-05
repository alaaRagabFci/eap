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
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.8618667310516!2d31.28135011674242!3d29.98339955498936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583862896ee857%3A0x4ccbcaa8d176a111!2z2KfZhNmH2YrYptipINin2YTZhdi12LHZitipINmE2YTYqNiq2LHZiNmE!5e0!3m2!1sar!2seg!4v1556967707815!5m2!1sar!2seg" 
                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </section>
            

          
            </div>
        </section>
@endsection