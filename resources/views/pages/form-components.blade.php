@extends('layouts.main') 
@section('title', 'Form Components')
@section('content')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Components')}}</h5>
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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Components')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Default form')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">{{ __('Username')}}</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('Email address')}}</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{ __('Password')}}</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">{{ __('Confirm Password')}}</label>
                                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input">
                                    <span class="custom-control-label">&nbsp;{{ __('Remember me')}}</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <button class="btn btn-light">{{ __('Cancel')}}</button>
                          </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-484">
                    <div class="card-header"><h3>{{ __('Horizontal Form')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{ __('Username')}}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">{{ __('Email')}}</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">{{ __('Mobile')}}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">{{ __('Password')}}</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">{{ __('Re Password')}}</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input">
                                    <span class="custom-control-label">&nbsp;{{ __('Remember me')}}</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <button class="btn btn-light">{{ __('Cancel')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Basic form elements')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">{{ __('Name')}}</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">{{ __('Email address')}}</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">{{ __('Gender')}}</label>
                                        <select class="form-control" id="exampleSelectGender">
                                            <option>{{ __('Male')}}</option>
                                            <option>{{ __('Female')}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">{{ __('Password')}}</label>
                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                            </div>
                            
                            <div class="form-group">
                                <label>{{ __('File upload')}}</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">{{ __('Upload')}}</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">{{ __('Textarea')}}</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <button class="btn btn-light">{{ __('Cancel')}}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Input Sizes')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder=".form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h3>{{ __('Text-color')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control form-txt-primary" placeholder=".form-txt-primary">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-txt-warning" placeholder=".form-txt-warning">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-txt-default" placeholder=".form-txt-default">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-txt-danger" placeholder=".form-txt-danger">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-txt-success" placeholder=".form-txt-success">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-txt-inverse" placeholder=".form-txt-inverse">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-txt-info" placeholder=".form-txt-info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Color Inputs')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-primary" placeholder=".form-control-primary">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-warning" placeholder=".form-control-warning">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-default" placeholder=".form-control-default">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-danger" placeholder=".form-control-danger">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-success" placeholder=".form-control-success">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-inverse" placeholder=".form-control-inverse">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-info" placeholder=".form-control-info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Background-color')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control form-bg-primary" placeholder=".form-bg-primary">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-bg-warning" placeholder=".form-bg-warning">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-bg-default" placeholder=".form-bg-default">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-bg-danger" placeholder=".form-bg-danger">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-bg-success" placeholder=".form-bg-success">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-bg-inverse" placeholder=".form-bg-inverse">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-bg-info" placeholder=".form-bg-info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-180">
                    <div class="card-header"><h3>{{ __('Inline forms')}}</h3></div>
                    <div class="card-body">
                        <form class="form-inline">
                            <label class="sr-only" for="inlineFormInputName2">{{ __('Name')}}</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Shanker Raj">
                          
                            <label class="sr-only" for="inlineFormInputGroupUsername2">{{ __('Username')}}</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                            </div>
                            <div class="form-check mx-sm-2">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked>
                                    <span class="custom-control-label">&nbsp; {{ __('Remember Me')}}</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">{{ __('Submit')}}</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Validation States')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">{{ __('Name')}}</label>
                                        <input type="text" class="form-control is-valid" id="exampleInputName1" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">{{ __('Email address')}}</label>
                                        <input type="email" class="form-control is-invalid" id="exampleInputEmail3" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Input Grid')}}</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" placeholder="col-sm-1">
                                </div>
                                <div class="col-sm-11">
                                    <input type="text" class="form-control" placeholder="col-sm-11">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" placeholder="col-sm-2">
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="col-sm-10">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" placeholder="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="col-sm-9">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="col-sm-4">
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="col-sm-8">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="col-sm-5">
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" placeholder="col-sm-7">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="col-sm-6">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="col-sm-6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="col-sm-12">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- push external js -->
    @push('script')
        <script src="{{ asset('js/form-components.js') }}"></script>
    @endpush
@endsection