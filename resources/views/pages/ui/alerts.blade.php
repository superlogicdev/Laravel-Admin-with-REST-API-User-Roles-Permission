@extends('layouts.main') 
@section('title', 'Alerts')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-box bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Alerts')}}</h5>
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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Alerts')}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Bootstrap Alert')}}</h3></div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                          {{ __('A simple primary alert—check it out!')}}
                        </div>
                        <div class="alert alert-secondary" role="alert">
                          {{ __('A simple secondary alert—check it out!')}}
                        </div>
                        <div class="alert alert-success" role="alert">
                          {{ __('A simple success alert—check it out!')}}
                        </div>
                        <div class="alert alert-danger" role="alert">
                          {{ __('A simple danger alert—check it out!')}}
                        </div>
                        <div class="alert alert-warning" role="alert">
                          {{ __('A simple warning alert—check it out!')}}
                        </div>
                        <div class="alert alert-info" role="alert">
                          {{ __('A simple info alert—check it out!')}}
                        </div>
                        <div class="alert alert-light" role="alert">
                          {{ __('A simple light alert—check it out!')}}
                        </div>
                        <div class="alert alert-dark" role="alert">
                          {{ __('A simple dark alert—check it out!')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Bootstrap alerts in fill colors')}}</h3></div>
                    <div class="card-body">
                        <div class="alert bg-primary alert-primary text-white" role="alert">
                          {{ __('A simple primary alert—check it out!')}}
                        </div>
                        <div class="alert bg-secondary alert-secondary text-white" role="alert">
                          {{ __('A simple secondary alert—check it out!')}}
                        </div>
                        <div class="alert bg-success alert-success text-white" role="alert">
                          {{ __('A simple success alert—check it out!')}}
                        </div>
                        <div class="alert bg-danger alert-danger text-white" role="alert">
                          {{ __('A simple danger alert—check it out!')}}
                        </div>
                        <div class="alert bg-warning alert-warning text-white" role="alert">
                          {{ __('A simple warning alert—check it out!')}}
                        </div>
                        <div class="alert bg-info alert-info text-white" role="alert">
                          {{ __('A simple info alert—check it out!')}}
                        </div>
                        <div class="alert bg-light alert-light" role="alert">
                          {{ __('A simple light alert—check it out!')}}
                        </div>
                        <div class="alert bg-dark alert-dark text-white" role="alert">
                          {{ __('A simple dark alert—check it out!')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Dismissing Alert')}}</h3></div>
                    <div class="card-body">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ik ik-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
                
