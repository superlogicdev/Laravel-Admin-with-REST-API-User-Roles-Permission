@extends('layouts.main') 
@section('title', 'Flot Chart')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-pie-chart bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Flot Chart')}}</h5>
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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Flot Chart')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Categories chart')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="placeholder" class="demo-placeholder h-300" ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Stracking chart')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="placeholder1" class="demo-placeholder h-300" ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Pie chart ( without legend ) ')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="placeholder2" class="demo-placeholder h-400" ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Image plots')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="placeholder3" class="demo-placeholder h-300" ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Series types')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="seriestypes" class="demo-placeholder h-400"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Real-time update')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="realtimeupdate" class="demo-placeholder h-400"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Percentiles')}}</h3>
                    </div>
                    <div class="card-block">
                        <div id="percentiles" class="demo-placeholder h-400"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('js/chart-flot.js')}}"></script>
    @endpush
@endsection
