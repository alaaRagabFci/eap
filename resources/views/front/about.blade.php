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
                    <li><a data-toggle="tab" href="#menu1">
                            <div class="tab-triangle"><span>1</span></div> Who we are
                        </a></li>
                    <li><a data-toggle="tab" href="#menu2">
                            <div class="tab-triangle"><span>2</span></div> Our Purpose
                        </a></li>
                    <li><a data-toggle="tab" href="#menu3">
                            <div class="tab-triangle"><span>3</span></div> Our Vision
                        </a></li>
                    <li><a data-toggle="tab" href="#menu4">
                            <div class="tab-triangle"><span>4</span></div> Our Business Principles
                        </a></li>
                    <li><a data-toggle="tab" href="#menu5">
                            <div class="tab-triangle"><span>5</span></div> Our Management Team
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
                    <div id="menu1" class="notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path">
                                    <div class="path">
                                        <img src="../assets/logo1.svg" class="icon" alt="">
                                    </div>
                                </div>
                                <div class="path"></div>
                            </div>
                            <div class="data-details">
                                <h3>Who we are</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Laborum molestiae, provident dolore harum ab nihil consequuntur ratione cum
                                    velit vero iste expedita totam dolorem ipsum dignissimos sapiente placeat? At,
                                    ullam.
                                </p>
                            </div>
                        </section>

                    </div>
                    <div id="menu2" class="notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path"><img src="" class="icon" alt=""></div>
                                <div class="path"></div>
                            </div>

                            <div class="data-details">
                                <h3>Our Purpose</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                    eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                    rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                                </p>
                            </div>
                        </section>
                    </div>
                    <div id="menu3" class="notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path"><img src="" class="icon" alt=""></div>
                                <div class="path"></div>
                            </div>
                            <div class="data-details">
                                <h3>Our Vision</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                    rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                                </p>
                            </div>
                        </section>
                    </div>
                    <div id="menu4" class="notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path"><img src="" class="icon" alt=""></div>
                                <div class="path"></div>
                            </div>
                            <div class="data-details">
                                <h3>Our Business Principles</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                    eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergSren, no sea
                                    takimata
                                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                    rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                            </div>
                        </section>
                    </div>
                    <div id="menu5" class="notShow tab-pane fade">
                        <section>
                            <div class="shape">
                                <div class="path"><img src="" class="icon" alt=""></div>
                                <div class="path"></div>
                            </div>
                            <div class="data-details">
                                <h3>Our Management Team</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Laborum molestiae, provident dolore harum ab nihil consequuntur ratione cum
                                    velit vero iste expedita totam dolorem ipsum dignissimos sapiente placeat? At,
                                    ullam.</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
@endsection