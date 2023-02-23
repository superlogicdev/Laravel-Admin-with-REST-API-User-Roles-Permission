@extends('layouts.main') 
@section('title', 'Editable Datatable')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}">
    @endpush

    
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-pie-chart bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Editable Datatable') }}</h5>
                            <span>{{ __('Make cells within a DataTable to be editable.') }}</span>
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
                                <a href="#">{{ __('Tables') }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Editable Datatable') }}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card table-card proj-t-card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 p-3">
                                    <code>{{ __('CellEdit') }}</code> {{ __('plugin allows cells within a DataTable to be editable. When a') }} <span class="text-red">cell</span> {{ __('is click on, an input field will appear. When focus is lost on the input and the underlying DataTable object will be updated and the table will be redrawn. The new value is passed to a callback function, along with its row, allowing for easy server-side data updates.') }}<br><br>

                                    {{ __('Example:') }} <br>
                                    <img src="{{ asset('img/editable-datatable.JPG')}}" alt="" class="img-fluid"> <br><br>
                                    {{ __('Read CellEdit') }}  <a class="text-red" href="https://github.com/ejbeaty/CellEdit"> {{ __('documentation') }} </a>. 
                                </div>
                            </div>
                        <h6 class="pt-badge bg-red">{{ __('ejbeaty') }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Editable Data Table') }}</h3></div>
                    <div class="card-body">
                        <table id="myAdvancedTable" class="table p-3">
                            <thead>
                                <tr>
                                    <th>{{ __('First Name') }}</th>
                                    <th>{{ __('Last Name') }}</th>
                                    <th>{{ __('DOB') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ __('Elliott') }}</td>
                                    <td>{{ __('Beaty') }}</td>
                                    <td>{{ __('01/14/2011') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Joe') }}</td>
                                    <td>{{ __('Dirt') }}</td>
                                    <td>{{ __('01/14/2004') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('John') }}</td>
                                    <td>{{ __('Doe') }}</td>
                                    <td>{{ __('01/14/2003') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jane') }}</td>
                                    <td>{{ __('Doe') }}</td>
                                    <td>{{ __('01/11/2001') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Billy') }}</td>
                                    <td>{{ __('Bob') }}</td>
                                    <td>{{ __('02/14/1947') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bobby') }}</td>
                                    <td>{{ __('Axlerod') }}</td>
                                    <td>{{ __('01/27/2001') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Elliott') }}</td>
                                    <td>{{ __('Beaty') }}</td>
                                    <td>{{ __('01/13/2007') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Joe') }}</td>
                                    <td>{{ __('Dirt') }}</td>
                                    <td>{{ __('01/14/2001') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('John') }}</td>
                                    <td>{{ __('Doe') }}</td>
                                    <td>{{ __('01/14/2001') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jane') }}</td>
                                    <td>{{ __('Doe') }}</td>
                                    <td>{{ __('01/14/2001') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Billy') }}</td>
                                    <td>{{ __('Bob') }}</td>
                                    <td>{{ __('01/14/2001') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bobby') }}</td>
                                    <td>{{ __('Axlerod') }}</td>
                                    <td>{{ __('01/14/2001') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <!-- push external js -->
    @push('script')
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/Cell-edit/dataTables.cellEdit.js') }}"></script>
    <!--get editable datatable script-->
    <script src="{{ asset('js/editable-datatable.js') }}"></script>
    @endpush
@endsection
