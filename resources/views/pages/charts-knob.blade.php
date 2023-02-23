@extends('layouts.main') 
@section('title', 'Knob Chart')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-pie-chart bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Knob Chart')}}</h5>
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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Knob Chart')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Overloaded "draw" method')}}</h3>
                    </div>
                    <div class="card-block text-center">
                        <input type="text" class="dial" value="24" data-width="200" data-height="200" data-fgColor="#1abc9c" data-skin="tron" data-thickness=".1" data-angleOffset="180">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Angle offset and arc')}}</h3>
                    </div>
                    <div class="card-block text-center">
                        <input type="text" class="dial" value="35" data-width="200" data-height="200" data-fgColor="#FF9F55" data-angleOffset="-125" data-angleArc="250" data-rotation="anticlockwise">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Cursor mode')}}</h3>
                    </div>
                    <div class="card-block text-center">
                        <input type="text" class="dial" value="70" data-width="200" data-height="200" data-cursor="true" data-thickness=".1" data-fgColor="#9b59b6">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Disable display input')}}</h3>
                    </div>
                    <div class="card-block text-center">
                        <input type="text" class="dial" value="50" data-width="200" data-height="200" data-linecap="round" data-displayInput="false" data-fgColor="#40c4ff">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Display previous value ')}}</h3>
                    </div>
                    <div class="card-block text-center">
                        <input type="text" class="dial" value="32" data-width="200" data-height="200" data-linecap="round" data-displayprevious="true" data-displayInput="true" data-fgColor="#34495e">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Read only and size')}} </h3>
                    </div>
                    <div class="card-block text-center">
                        <input type="text" class="dial" value="48" data-width="100" data-height="200" data-linecap="round" data-displayprevious="true" data-displayInput="true" data-readonly="true" data-fgColor="#4ECDC4">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- push external js -->
    @push('script')

        <script src="{{ asset('plugins/jquery-knob/dist/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('js/chart-knob.js') }}"></script>
    @endpush
@endsection