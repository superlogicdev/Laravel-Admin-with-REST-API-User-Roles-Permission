@extends('layouts.main') 
@section('title', 'Badges')
@section('content')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-box bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Badges')}}</h5>
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
                                <a href="#">{{ __('Basic')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Badges')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Colors</h3></div>
                    <div class="card-body">
                        <span class="badge badge-pill badge-primary mb-1">{{ __('Primary')}}</span>
                        <span class="badge badge-pill badge-secondary mb-1">{{ __('Secondary')}}</span>
                        <span class="badge badge-pill badge-success mb-1">{{ __('Success')}}</span>
                        <span class="badge badge-pill badge-danger mb-1">{{ __('Danger')}}</span>
                        <span class="badge badge-pill badge-warning mb-1">{{ __('Warning')}}</span>
                        <span class="badge badge-pill badge-info mb-1">{{ __('Info')}}</span>
                        <span class="badge badge-pill badge-light mb-1">{{ __('Light')}}</span>
                        <span class="badge badge-pill badge-dark mb-1">{{ __('Dark')}}</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h3>Links</h3></div>
                    <div class="card-body">
                        <a href="#" class="badge badge-primary mb-1">{{ __('Primary')}}</a>
                        <a href="#" class="badge badge-secondary mb-1">{{ __('Secondary')}}</a>
                        <a href="#" class="badge badge-success mb-1">{{ __('Success')}}</a>
                        <a href="#" class="badge badge-danger mb-1">{{ __('Danger')}}</a>
                        <a href="#" class="badge badge-warning mb-1">{{ __('Warning')}}</a>
                        <a href="#" class="badge badge-info mb-1">{{ __('Info')}}</a>
                        <a href="#" class="badge badge-light mb-1">{{ __('Light')}}</a>
                        <a href="#" class="badge badge-dark mb-1">{{ __('Dark')}}</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h3>{{ __('Counter Badges')}}</h3></div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">
                            {{ __('Notifications')}}&nbsp;
                            <span class="badge badge-light">4</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
               