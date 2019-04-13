@extends('admin_layouts.inc')

@section('title','Admin Dashboard')
@section('header','Admin Dashboard')
@section('head_description','statistics, charts, recent events and reports')
@section('breadcrumb','Dashboard')
@section('content')
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <a href="{{ url('/projects') }}">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                        <span data-counter="counterup" data-value="{{ $projects }}"></span>
                                        </h3>
                                        <small>Projects</small>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: {{ $projects }}%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">{{ $projects }}%</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-number"> {{ $projects }}% </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                             <a href="{{ url('/news') }}">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                        <span data-counter="counterup" data-value="{{ $news }}"></span>
                                        </h3>
                                        <small>News</small>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: {{ $news }}%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">{{ $news }}%</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-number"> {{ $news }}% </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                             <a href="{{ url('/services') }}">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                          <span data-counter="counterup" data-value="{{  $services }}"></span>
                                        </h3>
                                        <small>Services</small>
                                    </div>
                                    <div class="icon">
                                        <i class="fab fa-servicestack"></i>
                                    </div>
                                </div>
                                 <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: {{ $services }}%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">{{ $services }}%</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-number"> {{ $services }}% </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                             <a href="{{ url('/clients') }}">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="{{$clients }}"></span>
                                        </h3>
                                        <small>Clients</small>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: {{ $clients }}%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">{{ $clients }}%</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-number"> {{ $clients }}% </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>

                    <!-- END PAGE BASE CONTENT -->
@endsection