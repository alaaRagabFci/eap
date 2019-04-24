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
                        <h2> {{ trans('front.news') }}</h2>
                    </section>
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#menu1">
                                <div class="tab-triangle"><span>1</span></div> Download Our Profile
                            </a></li>
                        <li><a data-toggle="tab" href="#menu2">
                                <div class="tab-triangle"><span>2</span></div> News
                            </a></li>
                        <li><a data-toggle="tab" href="#menu3">
                                <div class="tab-triangle"><span>3</span></div> Publications
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
                            <section>
                                <div class="shape">
                                    <div class="path">
                                        <div class="path">
                                            <img src="../assets/logo1.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="path"></div>
                                </div>
                                <div class="data-details">
                                    <h3>Download Our Profile</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                        vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea
                                        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                                        duo
                                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                        Lorem
                                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam
                                        voluptua
                                    </p>
                                    <div class="download-btn">DOWNLOAD</div>
                                </div>
                            </section>
                        </div>

                        <div id="menu2" class="notShow tab-pane fade">
                            <section>
                                <div class="shape h-4">
                                    <div class="path">
                                        <div class="path">
                                            <img src="../assets/logo1.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="data-details">
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
                                    <div class="date">03 July 2018</div>
                                </div>
                            </section>
                            <section>
                                <div class="shape h-4">
                                    <div class="path">
                                        <div class="path">
                                            <img src="../assets/logo1.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="data-details">
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
                                    <div class="date">03 July 2018</div>
                                </div>
                            </section>
                            <section>
                                <div class="shape h-4">
                                    <div class="path">
                                        <div class="path">
                                            <img src="../assets/logo1.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="data-details">
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
                                    <div class="date">03 July 2018</div>
                                </div>
                            </section>
                        </div>
                        <div id="menu3" class="notShow tab-pane fade">
                            <section>
                                <div class="shape h-4">
                                    <div class="path">
                                        <div class="path">
                                            <img src="../assets/logo1.svg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="data-details">
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                        vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea
                                        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                                        duo
                                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                        Lorem
                                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam
                                        voluptua
                                    </p>
                                    <div class="download-btn">REQUEST PUBLICATION</div>
                                </div>
                            </section>
                            <section>
                                <div class="shape h-4">
                                    <div class="path">
                                        <div class="path">
                                            <img src="../assets/logo1.svg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="data-details">
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                        vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea
                                        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                                        duo
                                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                        Lorem
                                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam
                                        voluptua
                                    </p>
                                    <div class="download-btn">REQUEST PUBLICATION</div>
                                </div>
                            </section>
                            <section>
                                <div class="shape h-4">
                                    <div class="path">
                                        <div class="path">
                                            <img src="../assets/logo1.svg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="data-details">
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                        vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea
                                        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                                        duo
                                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                        Lorem
                                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam
                                        voluptua
                                    </p>
                                    <div class="download-btn">REQUEST PUBLICATION</div>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </section>
        </section>
@endsection