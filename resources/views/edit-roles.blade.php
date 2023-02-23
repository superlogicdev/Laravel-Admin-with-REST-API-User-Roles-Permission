@extends('layouts.main')
@section('title', $role->name.' - Edit Role')
@section('content')

<div class="container-fluid">
    <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-award bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Role')}}</h5>
                            <span>{{ __('Edit role & associate permissions')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Role')}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <!-- clean unescaped data is to avoid potential XSS risk -->
                                {{ clean($role->name, 'titles')}}
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
	<div class="row clearfix">
        <!-- start message area-->
        @include('include.message')
        <!-- end message area-->
		<div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>{{ __('Edit Role')}}</h3></div>
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{url('role/update')}}">
                    	@csrf
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="role">{{ __('Role')}}<span class="text-red">*</span></label>
                                    <input type="text" class="form-control is-valid" id="role" name="name" value="{{ clean($role->name, 'titles')}}" placeholder="Insert Role">
                                    <input type="hidden" name="id" value="{{$role->id}}" required>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <label for="exampleInputEmail3">{{ __('Assign Permission')}} </label>
                                <div class="row">
                                	@foreach($permissions as $key => $permission)
                                	<div class="col-sm-4">

                                        <label class="custom-control custom-checkbox">
                                            <!-- check permission exist -->
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="permissions[]" value="{{$key}}"
                                            @if(in_array($key, $role_permission))
                                                checked
                                            @endif>
                                            <span class="custom-control-label">
                                                <!-- clean unescaped data is to avoid potential XSS risk -->
                                                {{ clean($permission, 'titles')}}
                                            </span>
                                        </label>
                                	</div>
                                	@endforeach
                                </div>

                                <div class="form-group">
                                	<button type="submit" class="btn btn-primary btn-rounded">{{ __('Update')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</div>

@endsection
