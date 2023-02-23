@extends('layouts.main') 
@section('title', 'Notifications')
@section('content')
    <!-- push external head elements to head -->
    @push('head')

        <link rel="stylesheet" href="{{ asset('plugins/jquery-toast-plugin/dist/jquery.toast.min.css')}}">
    @endpush
 
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-gitlab bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Notifications')}}</h5>
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
                                <a href="#">{{ __('Advanced')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Notifications')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Jquery Toast Styles')}}</h3></div>
                    <div class="card-body">
                        <p>Click on the below buttons for notifications in different styles.</p>
                        <p>The <code>icon</code> property can be used to specify the predefined types of toasts - success, info, warning and danger</p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-success btn-fw" onclick="showSuccessToast()">{{ __('Success')}}</button>
                            <button type="button" class="btn btn-info btn-fw" onclick="showInfoToast()">{{ __('Info')}}</button>
                            <button type="button" class="btn btn-warning btn-fw" onclick="showWarningToast()">{{ __('Warning')}}</button>
                            <button type="button" class="btn btn-danger btn-fw" onclick="showDangerToast()">{{ __('Danger')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Jquery Toast Positions')}}</h3></div>
                    <div class="card-body">
                        <p>The <code>position</code> property can be used to specify the predefined positions of toasts</p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('bottom-left')">{{ __('Bottom Left')}}</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('bottom-right')">{{ __('Bottom Right')}}</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('bottom-center')">{{ __('Bottom Center')}}</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('top-left')">{{ __('Top Left')}}</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('top-right')">{{ __('Top Right')}}</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('top-center')">{{ __('Top Center')}}</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('mid-center')">{{ __('Mid Center')}}</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastInCustomPosition()">{{ __('Custom')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    @push('script')      
        <script src="{{ asset('plugins/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
        
        <script src="{{ asset('js/alerts.js')}}"></script>
    @endpush
@endsection
        