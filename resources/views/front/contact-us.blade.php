@extends('front.layout')
@section('title')
    {{ trans('front.title') }}
@endsection

@section('content')
        <section id="content">
            <div id="tabs">
                <section class="main-title">
                    <div></div>
                    <h2>CONTACT US FOR PUBLICATIONS</h2>
                </section>
                <section class="contact">
                    <form>
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Phone">
                        <textarea name="msg" id="" cols="30" rows="10" placeholder="Details"></textarea>
                        <button class="btn w-100" type="button">SEND MESSAGE</button>
                    </form>
                    <div class="map"></div>
                </section>
            

          
            </div>
        </section>
@endsection