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
                                <h2> {{ trans('front.managment') }}</h2>
                            </section>
                            <ul class="nav nav-tabs">
                                <li><a data-toggle="tab" href="#menu1">
                                        <div class="tab-triangle"><span>1</span></div> Overall Consultancy Approach
                                    </a></li>
                                <li><a data-toggle="tab" href="#menu2">
                                        <div class="tab-triangle"><span>2</span></div> Capacity Support” and “Performance
                                        Improvement
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
                                <div id="menu1" class="notShow  tab-pane fade">
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
                                            <h3>Overall Quality Management</h3>
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
                                            <div class="path">
                                                <div class="path">
                                                    <img src="../assets/logo1.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="path"></div>
                                        </div>
                                        <div class="data-details">
                                            <h3>Programmes/ Projects Quality Management</h3>
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
        </section>
@endsection