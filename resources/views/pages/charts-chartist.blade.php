@extends('layouts.main')
@section('title', 'Chartist')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-pie-chart bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Chartist')}}</h5>
                            <span>{{ __('lorem ipsum dolor sit amet, consectetur adipisicing elit')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Charts')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Chartist')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Slimple Line Chart')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="lineChart" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Line Chart with area')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="lineChart_area" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Advanced Smil Animations')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="lineChart_animation" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Bi Polar Bar Chart')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="barChart_bipolar" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Overlapping Bars on mobile')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="barChart_overlapping" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Extreme Responsive Configuaration')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="barChart_responsive" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Pie Chart')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="pieChart" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Gauge Chart')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="guageChart" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Animated Donut Chart')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="donutChart_animated" class="chart-shadow st-cir-chart"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- push external js -->
    @push('script')

        <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('js/chart-chartist.js') }}"></script>
    @endpush
@endsection

