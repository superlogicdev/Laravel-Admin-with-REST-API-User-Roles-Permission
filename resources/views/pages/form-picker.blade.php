@extends('layouts.main') 
@section('title', 'Form Picker')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/jquery-minicolors/jquery.minicolors.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datedropper/datedropper.min.css') }}">
    @endpush
       

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-terminal bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Form Picker')}}</h5>
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
                            <li class="breadcrumb-item"><a href="#">{{ __('Forms')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Form Picker')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Default Date-Picker')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Date')}}</h4>
                                <p>{{ __('Add type')}}<code>&lt;input type="date"&gt;</code></p>
                                <input class="form-control" type="date" />
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Month')}}</h4>
                                <p>{{ __('Add type')}}<code>&lt;input type="month"&gt;</code></p>
                                <input class="form-control" type="month" />
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Week')}}</h4>
                                <p>{{ __('Add type')}}<code>&lt;input type="week"&gt;</code></p>
                                <input class="form-control" type="week" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Date-time-local')}}</h4>
                                <p>{{ __('Add type')}}<code>&lt;input type="datetime-local"&gt;</code></p>
                                <input class="form-control" type="datetime-local" />
                            </div>
                            <div class="col-sm-12 col-xl-4">
                                <h4 class="sub-title">{{ __('Time')}}</h4>
                                <p>{{ __('Add type')}}<code>&lt;input type="time"&gt;</code></p>
                                <input class="form-control" type="time" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>{{ __('Date-Dropper')}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Default')}}</h4>
                                <p>{{ __('Add')}} <code>id="#dropper-default"</code></p>
                                <input id="dropper-default" class="form-control" type="text" placeholder="Select your date" />
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">With Animation')}}</h4>
                                <p>{{ __('Add')}} <code>id="#dropper-animation"</code></p>
                                <input id="dropper-animation" class="form-control" type="text" placeholder="Select your animation" />
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Date format')}}</h4>
                                <p>{{ __('Add')}} <code>id="#dropper-format"</code></p>
                                <input id="dropper-format" class="form-control" type="text" placeholder="Select your format" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Language Support')}}</h4>
                                <p>{{ __('Add')}} <code>id="#dropper-lang"</code></p>
                                <input id="dropper-lang" class="form-control" type="text" placeholder="Language Support" />
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Lock Support')}}</h4>
                                <p>{{ __('Add')}} <code>id="#dropper-lock"</code></p>
                                <input id="dropper-lock" class="form-control" type="text" placeholder="Select your date" />
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">{{ __('Max Year')}}</h4>
                                <p>{{ __('Add')}} <code>id="#dropper-max-year"</code></p>
                                <input id="dropper-max-year" class="form-control" type="text" placeholder="Max Year 2020" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">Min Year')}}</h4>
                                <p>{{ __('Add')}} <code>id="#dropper-min-year"</code></p>
                                <input id="dropper-min-year" class="form-control" type="text" placeholder="Min Year 1990" />
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <h4 class="sub-title">Year-range')}}</h4>
                                <p>{{ __('Add')}} <code>id="#year-range"</code></p>
                                <input id="year-range" class="form-control" type="text" placeholder="Select your date" />
                            </div>
                            <div class="col-sm-12 col-xl-4">
                                <h4 class="sub-title">Custom Width')}}</h4>
                                <p>{{ __('Add')}} <code>id="#dropper-width"</code></p>
                                <input id="dropper-width" class="form-control" type="text" placeholder="Select your date" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Inline Datetimepicker')}}</h3></div>
                    <div class="card-body">
                        <div id="inlinedatetimepicker"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-200" >
                    <div class="card-header"><h3>{{ __('Dropdown Datepicker')}}</h3></div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="date">{{ __('Date')}}</label>
                                <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card card-200">
                    <div class="card-header"><h3>{{ __('Dropdown Timepicker')}}</h3></div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="time">{{ __('Time')}}</label>
                                <input type="text" class="form-control datetimepicker-input" id="timepicker" data-toggle="datetimepicker" data-target="#timepicker">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Mini Color')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="sub-title">{{ __('Control-Types')}}</h4>
                                <div class="card-block inner-card-block">
                                    <div class="row">
                                        <div class="col-sm-3">
                                          <h4 class="sub-title">{{ __('Hue (default)')}}</h4>
                                          <input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161">
                                        </div>
                                        <div class="col-sm-3">
                                          <h4 class="sub-title">{{ __('Saturation')}}</h4>
                                          <input type="text" id="saturation-demo" class="form-control demo" data-control="saturation" value="#0088cc">
                                        </div>
                                        <div class="col-sm-3">
                                          <h4 class="sub-title">{{ __('Brightness')}}</h4>
                                          <input type="text" id="brightness-demo" class="form-control demo" data-control="brightness" value="#00ffff">
                                        </div>
                                        <div class="col-sm-3">
                                          <h4 class="sub-title">{{ __('Wheel')}}</h4>
                                          <input type="text" id="wheel-demo" class="form-control demo" data-control="wheel" value="#ff99ee">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="sub-title">{{ __('Input Modes')}}</h4>
                                <div class="card-block inner-card-block">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12 mb-30">
                                                  <h4 class="sub-title">{{ __('Text field ')}}</h4>
                                                  <input type="text" id="text-field" class="form-control demo" value="#70c24a">
                                                </div>
                                                <div class="col-sm-12">
                                                  <h4 class="sub-title">{{ __('Hidden Input')}}</h4>
                                                  <input type="hidden" id="hidden-input" class="demo" value="#db913d">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="sub-title">{{ __('Brightness')}}</h4>
                                            <input type="text" id="inline" class="form-control demo" data-inline="true" value="#4fc8db">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                            <h4 class="sub-title">{{ __('Positions')}}</h4>
                                <div class="card-block inner-card-block">
                                    <div class="row">
                                        <div class="col-sm-3">
                                          <h4 class="sub-title">{{ __('bottom left (default)')}}</h4>
                                          <input type="text" id="position-bottom-left" class="form-control demo" data-position="bottom left" value="#0088cc">
                                        </div>
                                        <div class="col-sm-3">
                                          <h4 class="sub-title">{{ __('top left')}}</h4>
                                          <input type="text" id="position-top-left" class="form-control demo" data-position="top left" value="#0088cc">
                                        </div>
                                        <div class="col-sm-3">
                                          <h4 class="sub-title">{{ __('bottom right')}}</h4>
                                          <input type="text" id="position-bottom-right" class="form-control demo" data-position="bottom right" value="#0088cc">
                                        </div>
                                        <div class="col-sm-3">
                                          <h4 class="sub-title">{{ __('top right')}}</h4>
                                          <input type="text" id="position-top-right" class="form-control demo" data-position="top right" value="#0088cc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="sub-title">{{ __('RGB(A)')}}</h4>
                                <div class="card-block inner-card-block">
                                    <div class="row">
                                        <div class="col-sm-6">
                                          <h4 class="sub-title">{{ __('RGB')}}</h4>
                                          <input type="text" id="rgb" class="form-control demo" data-format="rgb" value="rgb(33, 147, 58)">
                                        </div>
                                        <div class="col-sm-6">
                                          <h4 class="sub-title">{{ __('RGBA')}}</h4>
                                          <input type="text" id="rgba" class="form-control demo" data-format="rgb" data-opacity=".5" value="rgba(52, 64, 158, 0.5)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="sub-title">{{ __('More')}}</h4>
                                <div class="card-block inner-card-block">
                                    <div class="row mb-30">
                                        <div class="col-sm-6">
                                          <h4 class="sub-title">{{ __('Opacity')}}</h4>
                                          <input type="text" id="opacity" class="form-control demo" data-opacity=".5" value="#766fa8">
                                        </div>
                                        <div class="col-sm-6">
                                          <h4 class="sub-title">{{ __('Keywords')}}</h4>
                                          <input type="text" id="keywords" class="form-control demo" data-keywords="transparent, initial, inherit" value="transparent">
                                        </div>
                                    </div>
                                    <div class="row mb-30">
                                        <div class="col-sm-6">
                                          <h4 class="sub-title">{{ __('Default Value')}}</h4>
                                          <input type="text" id="default-value" class="form-control demo" data-defaultValue="#ff6600">
                                        </div>
                                        <div class="col-sm-6">
                                          <h4 class="sub-title">{{ __('Letter Case')}}</h4>
                                          <input type="text" id="letter-case" class="form-control demo" data-letterCase="uppercase" value="#abcdef">
                                        </div>
                                    </div>
                                    <div class="row mb-30">
                                        <div class="col-sm-6">
                                          <h4 class="sub-title">{{ __('Swatches')}}</h4>
                                          <input type="text" id="swatches" class="form-control demo" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|#0ff" value="#abcdef">
                                        </div>
                                        <div class="col-sm-6">
                                          <h4 class="sub-title">{{ __('Swatches and opacity')}}</h4>
                                          <input type="text" id="swatches-2" class="form-control demo" data-format="rgb" data-opacity="1" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)" value="rgba(14, 206, 235, .5)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>

    <!-- push external js -->
    @push('script')

        <script src="{{ asset('plugins/moment/moment.js') }}"></script>
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
        <script src="{{ asset('plugins/datedropper/datedropper.min.js') }}"></script>
        <script src="{{ asset('js/form-picker.js') }}"></script>
    @endpush
@endsection
