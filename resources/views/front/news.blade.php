@extends('front.layout')
@section('title')
    {{ trans('front.title') }}
@endsection

@section('content')
        <section id="content">
            <section id="content">
                <div id="tabs">
                    <section class="main-title">
                        <div></div>
                        <h2>NEWS & PUBLICATIONS</h2>
                    </section>
                    <ul class="nav nav-tabs news">

                        <li class="active-tab"> <img src="../assets/baseline-arrow_back-24px.svg" alt="">

                            <a href="../pages/news-publications.html">
                                <div class="tab-triangle"><span>2</span></div> News
                            </a></li>

                    </ul>

                    <div class="tab-content tab-pane">
                        <div class="d-flex justify-content-center mb-5">
                            <img src="../assets/Group 353.svg" alt="">
                            <div class="news-triangle"></div>
                        </div>
                        <div class="new-details text-center mt-5">
                                <div class="date date-news">03 July 2018</div>
                                <h3>Download Our Profile</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                                    amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                    magna aliquyam erat, sed diam voluptua
                                </p>
                            </div>

                    </div>
                </div>
            </section>
        </section>
@endsection