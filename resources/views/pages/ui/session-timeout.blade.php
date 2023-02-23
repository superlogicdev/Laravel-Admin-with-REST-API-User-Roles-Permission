@extends('layouts.main') 
@section('title', 'Session Timeout')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <title>{{ __('Session Timeout | Laravel Admin Template - Themekit')}}</title>
    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-package bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Session Timeout')}}</h5>
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
                                <a href="#">{{ __('UI')}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Extra')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Session Timeout')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Session Timeout')}}</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            With these settings, session timeout plugin launches a timeout warning dialog in a fixed amount of time regardless of user activity. In this demo warning dialog appears <b>after 3 seconds</b>                                                            of page load.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- push external js -->
    @push('script')     
        <script src="{{ asset('js/session-time-out.js')}}"></script>
    @endpush
@endsection
       