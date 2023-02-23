@extends('layouts.main') 
@section('title', 'Data Tables')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
    @endpush
 


    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Data Table')}}</h5>
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
                                <a href="#">Tables</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Data Table')}}</h3></div>
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('Id')}}</th>
                                    <th class="nosort">{{ __('Avatar')}}</th>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Email')}}</th>
                                    <th class="nosort">{{ __('&nbsp;')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ __('001')}}</td>
                                    <td><img src="../img/users/1.jpg" class="table-user-thumb" alt=""></td>
                                    <td>{{ __('Erich Heaney')}}</td>
                                    <td>{{ __('erich@example.com')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('002')}}</td>
                                    <td><img src="../img/users/2.jpg" class="table-user-thumb" alt=""></td>
                                    <td>{{ __('Abraham Douglas')}}</td>
                                    <td>{{ __('jgraham@example.com')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('003')}}</td>
                                    <td><img src="../img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                    <td>{{ __('Roderick Simonis')}}</td>
                                    <td>{{ __('grant.simonis@example.com')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('004')}}</td>
                                    <td><img src="../img/users/4.jpg" class="table-user-thumb" alt=""></td>
                                    <td>{{ __('Christopher Henry')}}</td>
                                    <td>{{ __('henry.chris@example.com')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('005')}}</td>
                                    <td><img src="../img/users/5.jpg" class="table-user-thumb" alt=""></td>
                                    <td>{{ __('Sonia Wilkinson')}}</td>
                                    <td>{{ __('boyle.aglea@example.com')}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('Zero Configuration')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('Tiger Nixon')}}</td>
                                        <td>{{ __('System Architect')}}</td>
                                        <td>{{ __('Edinburgh')}}</td>
                                        <td>{{ __('61')}}</td>
                                        <td>{{ __('2011/04/25')}}</td>
                                        <td>{{ __('$320,800')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Garrett Winters')}}</td>
                                        <td>{{ __('Accountant')}}</td>
                                        <td>{{ __('Tokyo')}}</td>
                                        <td>{{ __('63')}}</td>
                                        <td>{{ __('2011/07/25')}}</td>
                                        <td>{{ __('$170,750')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Ashton Cox')}}</td>
                                        <td>{{ __('Junior Technical Author')}}</td>
                                        <td>{{ __('San Francisco')}}</td>
                                        <td>{{ __('66')}}</td>
                                        <td>{{ __('2009/01/12')}}</td>
                                        <td>{{ __('$86,000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Cedric Kelly')}}</td>
                                        <td>{{ __('Senior Javascript Developer')}}</td>
                                        <td>{{ __('Edinburgh')}}</td>
                                        <td>{{ __('22')}}</td>
                                        <td>{{ __('2012/03/29')}}</td>
                                        <td>{{ __('$433,060')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Airi Satou')}}</td>
                                        <td>{{ __('Accountant')}}</td>
                                        <td>{{ __('Tokyo')}}</td>
                                        <td>{{ __('33')}}</td>
                                        <td>{{ __('2008/11/28')}}</td>
                                        <td>{{ __('$162,700')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Brielle Williamson')}}</td>
                                        <td>{{ __('Integration Specialist')}}</td>
                                        <td>{{ __('New York')}}</td>
                                        <td>{{ __('61')}}</td>
                                        <td>{{ __('2012/12/02')}}</td>
                                        <td>{{ __('$372,000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Herrod Chandler')}}</td>
                                        <td>{{ __('Sales Assistant')}}</td>
                                        <td>{{ __('San Francisco')}}</td>
                                        <td>{{ __('59')}}</td>
                                        <td>{{ __('2012/08/06')}}</td>
                                        <td>{{ __('$137,500')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Rhona Davidson')}}</td>
                                        <td>{{ __('Integration Specialist')}}</td>
                                        <td>{{ __('Tokyo')}}</td>
                                        <td>{{ __('55')}}</td>
                                        <td>{{ __('2010/10/14')}}</td>
                                        <td>{{ __('$327,900')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Colleen Hurst')}}</td>
                                        <td>{{ __('Javascript Developer')}}</td>
                                        <td>{{ __('San Francisco')}}</td>
                                        <td>{{ __('39')}}</td>
                                        <td>{{ __('2009/09/15')}}</td>
                                        <td>{{ __('$205,500')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Sonya Frost')}}</td>
                                        <td>{{ __('Software Engineer')}}</td>
                                        <td>{{ __('Edinburgh')}}</td>
                                        <td>{{ __('23')}}</td>
                                        <td>{{ __('2008/12/13')}}</td>
                                        <td>{{ __('$103,600')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Jena Gaines')}}</td>
                                        <td>{{ __('Office Manager')}}</td>
                                        <td>{{ __('London')}}</td>
                                        <td>{{ __('30')}}</td>
                                        <td>{{ __('2008/12/19')}}</td>
                                        <td>{{ __('$90,560')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Quinn Flynn')}}</td>
                                        <td>{{ __('Support Lead')}}</td>
                                        <td>{{ __('Edinburgh')}}</td>
                                        <td>{{ __('22')}}</td>
                                        <td>{{ __('2013/03/03')}}</td>
                                        <td>{{ __('$342,000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Charde Marshall')}}</td>
                                        <td>{{ __('Regional Director')}}</td>
                                        <td>{{ __('San Francisco')}}</td>
                                        <td>{{ __('36')}}</td>
                                        <td>{{ __('2008/10/16')}}</td>
                                        <td>{{ __('$470,600')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Haley Kennedy')}}</td>
                                        <td>{{ __('Senior Marketing Designer')}}</td>
                                        <td>{{ __('London')}}</td>
                                        <td>{{ __('43')}}</td>
                                        <td>{{ __('2012/12/18')}}</td>
                                        <td>{{ __('$313,500')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                        <td>{{ __('Regional Director')}}</td>
                                        <td>{{ __('London')}}</td>
                                        <td>{{ __('19')}}</td>
                                        <td>{{ __('2010/03/17')}}</td>
                                        <td>{{ __('$385,750')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Michael Silva')}}</td>
                                        <td>{{ __('Marketing Designer')}}</td>
                                        <td>{{ __('London')}}</td>
                                        <td>{{ __('66')}}</td>
                                        <td>{{ __('2012/11/27')}}</td>
                                        <td>{{ __('$198,500')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Paul Byrd')}}</td>
                                        <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                        <td>{{ __('New York')}}</td>
                                        <td>{{ __('64')}}</td>
                                        <td>{{ __('2010/06/09')}}</td>
                                        <td>{{ __('$725,000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Gloria Little')}}</td>
                                        <td>{{ __('Systems Administrator')}}</td>
                                        <td>{{ __('New York')}}</td>
                                        <td>{{ __('59')}}</td>
                                        <td>{{ __('2009/04/10')}}</td>
                                        <td>{{ __('$237,500')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Bradley Greer')}}</td>
                                        <td>{{ __('Software Engineer')}}</td>
                                        <td>{{ __('London')}}</td>
                                        <td>{{ __('41')}}</td>
                                        <td>{{ __('2012/10/13')}}</td>
                                        <td>{{ __('$132,000')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Dai Rios')}}</td>
                                        <td>{{ __('Personnel Lead')}}</td>
                                        <td>{{ __('Edinburgh')}}</td>
                                        <td>{{ __('35')}}</td>
                                        <td>{{ __('2012/09/26')}}</td>
                                        <td>{{ __('$217,500')}}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('Default Ordering')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="order-table"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ __('Tiger Nixon')}}</td>
                                    <td>{{ __('System Architect')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2011/04/25')}}</td>
                                    <td>{{ __('$320,800')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Garrett Winters')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('63')}}</td>
                                    <td>{{ __('2011/07/25')}}</td>
                                    <td>{{ __('$170,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Ashton Cox')}}</td>
                                    <td>{{ __('Junior Technical Author')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2009/01/12')}}</td>
                                    <td>{{ __('$86,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Cedric Kelly')}}</td>
                                    <td>{{ __('Senior Javascript Developer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2012/03/29')}}</td>
                                    <td>{{ __('$433,060')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Airi Satou')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('33')}}</td>
                                    <td>{{ __('2008/11/28')}}</td>
                                    <td>{{ __('$162,700')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Brielle Williamson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2012/12/02')}}</td>
                                    <td>{{ __('$372,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Herrod Chandler')}}</td>
                                    <td>{{ __('Sales Assistant')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2012/08/06')}}</td>
                                    <td>{{ __('$137,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Rhona Davidson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('55')}}</td>
                                    <td>{{ __('2010/10/14')}}</td>
                                    <td>{{ __('$327,900')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Colleen Hurst')}}</td>
                                    <td>{{ __('Javascript Developer')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('39')}}</td>
                                    <td>{{ __('2009/09/15')}}</td>
                                    <td>{{ __('$205,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Sonya Frost')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('23')}}</td>
                                    <td>{{ __('2008/12/13')}}</td>
                                    <td>{{ __('$103,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jena Gaines')}}</td>
                                    <td>{{ __('Office Manager')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('30')}}</td>
                                    <td>{{ __('2008/12/19')}}</td>
                                    <td>{{ __('$90,560')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Quinn Flynn')}}</td>
                                    <td>{{ __('Support Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2013/03/03')}}</td>
                                    <td>{{ __('$342,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Charde Marshall')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('36')}}</td>
                                    <td>{{ __('2008/10/16')}}</td>
                                    <td>{{ __('$470,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Haley Kennedy')}}</td>
                                    <td>{{ __('Senior Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('43')}}</td>
                                    <td>{{ __('2012/12/18')}}</td>
                                    <td>{{ __('$313,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('19')}}</td>
                                    <td>{{ __('2010/03/17')}}</td>
                                    <td>{{ __('$385,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Michael Silva')}}</td>
                                    <td>{{ __('Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2012/11/27')}}</td>
                                    <td>{{ __('$198,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Paul Byrd')}}</td>
                                    <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('64')}}</td>
                                    <td>{{ __('2010/06/09')}}</td>
                                    <td>{{ __('$725,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Gloria Little')}}</td>
                                    <td>{{ __('Systems Administrator')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2009/04/10')}}</td>
                                    <td>{{ __('$237,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bradley Greer')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('41')}}</td>
                                    <td>{{ __('2012/10/13')}}</td>
                                    <td>{{ __('$132,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Dai Rios')}}</td>
                                    <td>{{ __('Personnel Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('35')}}</td>
                                    <td>{{ __('2012/09/26')}}</td>
                                    <td>{{ __('$217,500')}}</td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('Multi-Column Ordering')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="multi-colum-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ __('Tiger Nixon')}}</td>
                                    <td>{{ __('System Architect')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2011/04/25')}}</td>
                                    <td>{{ __('$320,800')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Garrett Winters')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('63')}}</td>
                                    <td>{{ __('2011/07/25')}}</td>
                                    <td>{{ __('$170,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Ashton Cox')}}</td>
                                    <td>{{ __('Junior Technical Author')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2009/01/12')}}</td>
                                    <td>{{ __('$86,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Cedric Kelly')}}</td>
                                    <td>{{ __('Senior Javascript Developer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2012/03/29')}}</td>
                                    <td>{{ __('$433,060')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Airi Satou')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('33')}}</td>
                                    <td>{{ __('2008/11/28')}}</td>
                                    <td>{{ __('$162,700')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Brielle Williamson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2012/12/02')}}</td>
                                    <td>{{ __('$372,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Herrod Chandler')}}</td>
                                    <td>{{ __('Sales Assistant')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2012/08/06')}}</td>
                                    <td>{{ __('$137,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Rhona Davidson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('55')}}</td>
                                    <td>{{ __('2010/10/14')}}</td>
                                    <td>{{ __('$327,900')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Colleen Hurst')}}</td>
                                    <td>{{ __('Javascript Developer')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('39')}}</td>
                                    <td>{{ __('2009/09/15')}}</td>
                                    <td>{{ __('$205,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Sonya Frost')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('23')}}</td>
                                    <td>{{ __('2008/12/13')}}</td>
                                    <td>{{ __('$103,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jena Gaines')}}</td>
                                    <td>{{ __('Office Manager')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('30')}}</td>
                                    <td>{{ __('2008/12/19')}}</td>
                                    <td>{{ __('$90,560')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Quinn Flynn')}}</td>
                                    <td>{{ __('Support Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2013/03/03')}}</td>
                                    <td>{{ __('$342,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Charde Marshall')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('36')}}</td>
                                    <td>{{ __('2008/10/16')}}</td>
                                    <td>{{ __('$470,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Haley Kennedy')}}</td>
                                    <td>{{ __('Senior Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('43')}}</td>
                                    <td>{{ __('2012/12/18')}}</td>
                                    <td>{{ __('$313,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('19')}}</td>
                                    <td>{{ __('2010/03/17')}}</td>
                                    <td>{{ __('$385,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Michael Silva')}}</td>
                                    <td>{{ __('Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2012/11/27')}}</td>
                                    <td>{{ __('$198,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Paul Byrd')}}</td>
                                    <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('64')}}</td>
                                    <td>{{ __('2010/06/09')}}</td>
                                    <td>{{ __('$725,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Gloria Little')}}</td>
                                    <td>{{ __('Systems Administrator')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2009/04/10')}}</td>
                                    <td>{{ __('$237,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bradley Greer')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('41')}}</td>
                                    <td>{{ __('2012/10/13')}}</td>
                                    <td>{{ __('$132,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Dai Rios')}}</td>
                                    <td>{{ __('Personnel Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('35')}}</td>
                                    <td>{{ __('2012/09/26')}}</td>
                                    <td>{{ __('$217,500')}}</td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('Complex Headers')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="complex-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th rowspan="2">Name')}}</th>
                                    <th colspan="2">HR Information')}}</th>
                                    <th colspan="3">Contact')}}</th>
                                </tr>
                                <tr>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Extn.')}}</th>
                                    <th>{{ __('E-mail')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ __('Tiger Nixon')}}</td>
                                    <td>{{ __('System Architect')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2011/04/25')}}</td>
                                    <td>{{ __('$320,800')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Garrett Winters')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('63')}}</td>
                                    <td>{{ __('2011/07/25')}}</td>
                                    <td>{{ __('$170,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Ashton Cox')}}</td>
                                    <td>{{ __('Junior Technical Author')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2009/01/12')}}</td>
                                    <td>{{ __('$86,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Cedric Kelly')}}</td>
                                    <td>{{ __('Senior Javascript Developer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2012/03/29')}}</td>
                                    <td>{{ __('$433,060')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Airi Satou')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('33')}}</td>
                                    <td>{{ __('2008/11/28')}}</td>
                                    <td>{{ __('$162,700')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Brielle Williamson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2012/12/02')}}</td>
                                    <td>{{ __('$372,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Herrod Chandler')}}</td>
                                    <td>{{ __('Sales Assistant')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2012/08/06')}}</td>
                                    <td>{{ __('$137,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Rhona Davidson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('55')}}</td>
                                    <td>{{ __('2010/10/14')}}</td>
                                    <td>{{ __('$327,900')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Colleen Hurst')}}</td>
                                    <td>{{ __('Javascript Developer')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('39')}}</td>
                                    <td>{{ __('2009/09/15')}}</td>
                                    <td>{{ __('$205,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Sonya Frost')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('23')}}</td>
                                    <td>{{ __('2008/12/13')}}</td>
                                    <td>{{ __('$103,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jena Gaines')}}</td>
                                    <td>{{ __('Office Manager')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('30')}}</td>
                                    <td>{{ __('2008/12/19')}}</td>
                                    <td>{{ __('$90,560')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Quinn Flynn')}}</td>
                                    <td>{{ __('Support Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2013/03/03')}}</td>
                                    <td>{{ __('$342,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Charde Marshall')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('36')}}</td>
                                    <td>{{ __('2008/10/16')}}</td>
                                    <td>{{ __('$470,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Haley Kennedy')}}</td>
                                    <td>{{ __('Senior Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('43')}}</td>
                                    <td>{{ __('2012/12/18')}}</td>
                                    <td>{{ __('$313,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('19')}}</td>
                                    <td>{{ __('2010/03/17')}}</td>
                                    <td>{{ __('$385,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Michael Silva')}}</td>
                                    <td>{{ __('Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2012/11/27')}}</td>
                                    <td>{{ __('$198,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Paul Byrd')}}</td>
                                    <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('64')}}</td>
                                    <td>{{ __('2010/06/09')}}</td>
                                    <td>{{ __('$725,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Gloria Little')}}</td>
                                    <td>{{ __('Systems Administrator')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2009/04/10')}}</td>
                                    <td>{{ __('$237,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bradley Greer')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('41')}}</td>
                                    <td>{{ __('2012/10/13')}}</td>
                                    <td>{{ __('$132,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Dai Rios')}}</td>
                                    <td>{{ __('Personnel Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('35')}}</td>
                                    <td>{{ __('2012/09/26')}}</td>
                                    <td>{{ __('$217,500')}}</td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Extn.')}}</th>
                                    <th>{{ __('E-mail')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('DOM Positioning')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="DOM-dt" class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ __('Tiger Nixon')}}</td>
                                    <td>{{ __('System Architect')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2011/04/25')}}</td>
                                    <td>{{ __('$320,800')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Garrett Winters')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('63')}}</td>
                                    <td>{{ __('2011/07/25')}}</td>
                                    <td>{{ __('$170,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Ashton Cox')}}</td>
                                    <td>{{ __('Junior Technical Author')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2009/01/12')}}</td>
                                    <td>{{ __('$86,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Cedric Kelly')}}</td>
                                    <td>{{ __('Senior Javascript Developer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2012/03/29')}}</td>
                                    <td>{{ __('$433,060')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Airi Satou')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('33')}}</td>
                                    <td>{{ __('2008/11/28')}}</td>
                                    <td>{{ __('$162,700')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Brielle Williamson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2012/12/02')}}</td>
                                    <td>{{ __('$372,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Herrod Chandler')}}</td>
                                    <td>{{ __('Sales Assistant')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2012/08/06')}}</td>
                                    <td>{{ __('$137,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Rhona Davidson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('55')}}</td>
                                    <td>{{ __('2010/10/14')}}</td>
                                    <td>{{ __('$327,900')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Colleen Hurst')}}</td>
                                    <td>{{ __('Javascript Developer')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('39')}}</td>
                                    <td>{{ __('2009/09/15')}}</td>
                                    <td>{{ __('$205,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Sonya Frost')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('23')}}</td>
                                    <td>{{ __('2008/12/13')}}</td>
                                    <td>{{ __('$103,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jena Gaines')}}</td>
                                    <td>{{ __('Office Manager')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('30')}}</td>
                                    <td>{{ __('2008/12/19')}}</td>
                                    <td>{{ __('$90,560')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Quinn Flynn')}}</td>
                                    <td>{{ __('Support Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2013/03/03')}}</td>
                                    <td>{{ __('$342,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Charde Marshall')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('36')}}</td>
                                    <td>{{ __('2008/10/16')}}</td>
                                    <td>{{ __('$470,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Haley Kennedy')}}</td>
                                    <td>{{ __('Senior Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('43')}}</td>
                                    <td>{{ __('2012/12/18')}}</td>
                                    <td>{{ __('$313,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('19')}}</td>
                                    <td>{{ __('2010/03/17')}}</td>
                                    <td>{{ __('$385,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Michael Silva')}}</td>
                                    <td>{{ __('Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2012/11/27')}}</td>
                                    <td>{{ __('$198,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Paul Byrd')}}</td>
                                    <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('64')}}</td>
                                    <td>{{ __('2010/06/09')}}</td>
                                    <td>{{ __('$725,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Gloria Little')}}</td>
                                    <td>{{ __('Systems Administrator')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2009/04/10')}}</td>
                                    <td>{{ __('$237,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bradley Greer')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('41')}}</td>
                                    <td>{{ __('2012/10/13')}}</td>
                                    <td>{{ __('$132,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Dai Rios')}}</td>
                                    <td>{{ __('Personnel Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('35')}}</td>
                                    <td>{{ __('2012/09/26')}}</td>
                                    <td>{{ __('$217,500')}}</td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Extn.')}}</th>
                                    <th>{{ __('E-mail')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('Alternative Pagination')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="alt-pg-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ __('Tiger Nixon')}}</td>
                                    <td>{{ __('System Architect')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2011/04/25')}}</td>
                                    <td>{{ __('$320,800')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Garrett Winters')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('63')}}</td>
                                    <td>{{ __('2011/07/25')}}</td>
                                    <td>{{ __('$170,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Ashton Cox')}}</td>
                                    <td>{{ __('Junior Technical Author')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2009/01/12')}}</td>
                                    <td>{{ __('$86,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Cedric Kelly')}}</td>
                                    <td>{{ __('Senior Javascript Developer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2012/03/29')}}</td>
                                    <td>{{ __('$433,060')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Airi Satou')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('33')}}</td>
                                    <td>{{ __('2008/11/28')}}</td>
                                    <td>{{ __('$162,700')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Brielle Williamson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2012/12/02')}}</td>
                                    <td>{{ __('$372,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Herrod Chandler')}}</td>
                                    <td>{{ __('Sales Assistant')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2012/08/06')}}</td>
                                    <td>{{ __('$137,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Rhona Davidson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('55')}}</td>
                                    <td>{{ __('2010/10/14')}}</td>
                                    <td>{{ __('$327,900')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Colleen Hurst')}}</td>
                                    <td>{{ __('Javascript Developer')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('39')}}</td>
                                    <td>{{ __('2009/09/15')}}</td>
                                    <td>{{ __('$205,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Sonya Frost')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('23')}}</td>
                                    <td>{{ __('2008/12/13')}}</td>
                                    <td>{{ __('$103,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jena Gaines')}}</td>
                                    <td>{{ __('Office Manager')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('30')}}</td>
                                    <td>{{ __('2008/12/19')}}</td>
                                    <td>{{ __('$90,560')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Quinn Flynn')}}</td>
                                    <td>{{ __('Support Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2013/03/03')}}</td>
                                    <td>{{ __('$342,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Charde Marshall')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('36')}}</td>
                                    <td>{{ __('2008/10/16')}}</td>
                                    <td>{{ __('$470,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Haley Kennedy')}}</td>
                                    <td>{{ __('Senior Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('43')}}</td>
                                    <td>{{ __('2012/12/18')}}</td>
                                    <td>{{ __('$313,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('19')}}</td>
                                    <td>{{ __('2010/03/17')}}</td>
                                    <td>{{ __('$385,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Michael Silva')}}</td>
                                    <td>{{ __('Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2012/11/27')}}</td>
                                    <td>{{ __('$198,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Paul Byrd')}}</td>
                                    <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('64')}}</td>
                                    <td>{{ __('2010/06/09')}}</td>
                                    <td>{{ __('$725,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Gloria Little')}}</td>
                                    <td>{{ __('Systems Administrator')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2009/04/10')}}</td>
                                    <td>{{ __('$237,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bradley Greer')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('41')}}</td>
                                    <td>{{ __('2012/10/13')}}</td>
                                    <td>{{ __('$132,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Dai Rios')}}</td>
                                    <td>{{ __('Personnel Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('35')}}</td>
                                    <td>{{ __('2012/09/26')}}</td>
                                    <td>{{ __('$217,500')}}</td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3>{{ __('Scroll - Vertical')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="scr-vrt-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ __('Tiger Nixon')}}</td>
                                    <td>{{ __('System Architect')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2011/04/25')}}</td>
                                    <td>{{ __('$320,800')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Garrett Winters')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('63')}}</td>
                                    <td>{{ __('2011/07/25')}}</td>
                                    <td>{{ __('$170,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Ashton Cox')}}</td>
                                    <td>{{ __('Junior Technical Author')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2009/01/12')}}</td>
                                    <td>{{ __('$86,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Cedric Kelly')}}</td>
                                    <td>{{ __('Senior Javascript Developer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2012/03/29')}}</td>
                                    <td>{{ __('$433,060')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Airi Satou')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('33')}}</td>
                                    <td>{{ __('2008/11/28')}}</td>
                                    <td>{{ __('$162,700')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Brielle Williamson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2012/12/02')}}</td>
                                    <td>{{ __('$372,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Herrod Chandler')}}</td>
                                    <td>{{ __('Sales Assistant')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2012/08/06')}}</td>
                                    <td>{{ __('$137,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Rhona Davidson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('55')}}</td>
                                    <td>{{ __('2010/10/14')}}</td>
                                    <td>{{ __('$327,900')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Colleen Hurst')}}</td>
                                    <td>{{ __('Javascript Developer')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('39')}}</td>
                                    <td>{{ __('2009/09/15')}}</td>
                                    <td>{{ __('$205,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Sonya Frost')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('23')}}</td>
                                    <td>{{ __('2008/12/13')}}</td>
                                    <td>{{ __('$103,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jena Gaines')}}</td>
                                    <td>{{ __('Office Manager')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('30')}}</td>
                                    <td>{{ __('2008/12/19')}}</td>
                                    <td>{{ __('$90,560')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Quinn Flynn')}}</td>
                                    <td>{{ __('Support Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2013/03/03')}}</td>
                                    <td>{{ __('$342,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Charde Marshall')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('36')}}</td>
                                    <td>{{ __('2008/10/16')}}</td>
                                    <td>{{ __('$470,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Haley Kennedy')}}</td>
                                    <td>{{ __('Senior Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('43')}}</td>
                                    <td>{{ __('2012/12/18')}}</td>
                                    <td>{{ __('$313,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('19')}}</td>
                                    <td>{{ __('2010/03/17')}}</td>
                                    <td>{{ __('$385,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Michael Silva')}}</td>
                                    <td>{{ __('Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2012/11/27')}}</td>
                                    <td>{{ __('$198,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Paul Byrd')}}</td>
                                    <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('64')}}</td>
                                    <td>{{ __('2010/06/09')}}</td>
                                    <td>{{ __('$725,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Gloria Little')}}</td>
                                    <td>{{ __('Systems Administrator')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2009/04/10')}}</td>
                                    <td>{{ __('$237,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bradley Greer')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('41')}}</td>
                                    <td>{{ __('2012/10/13')}}</td>
                                    <td>{{ __('$132,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Dai Rios')}}</td>
                                    <td>{{ __('Personnel Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('35')}}</td>
                                    <td>{{ __('2012/09/26')}}</td>
                                    <td>{{ __('$217,500')}}</td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Scroll - Vertical, Dynamic Height')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="scr-vtr-dynamic"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ __('Tiger Nixon')}}</td>
                                    <td>{{ __('System Architect')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2011/04/25')}}</td>
                                    <td>{{ __('$320,800')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Garrett Winters')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('63')}}</td>
                                    <td>{{ __('2011/07/25')}}</td>
                                    <td>{{ __('$170,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Ashton Cox')}}</td>
                                    <td>{{ __('Junior Technical Author')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2009/01/12')}}</td>
                                    <td>{{ __('$86,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Cedric Kelly')}}</td>
                                    <td>{{ __('Senior Javascript Developer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2012/03/29')}}</td>
                                    <td>{{ __('$433,060')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Airi Satou')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('33')}}</td>
                                    <td>{{ __('2008/11/28')}}</td>
                                    <td>{{ __('$162,700')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Brielle Williamson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2012/12/02')}}</td>
                                    <td>{{ __('$372,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Herrod Chandler')}}</td>
                                    <td>{{ __('Sales Assistant')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2012/08/06')}}</td>
                                    <td>{{ __('$137,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Rhona Davidson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('55')}}</td>
                                    <td>{{ __('2010/10/14')}}</td>
                                    <td>{{ __('$327,900')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Colleen Hurst')}}</td>
                                    <td>{{ __('Javascript Developer')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('39')}}</td>
                                    <td>{{ __('2009/09/15')}}</td>
                                    <td>{{ __('$205,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Sonya Frost')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('23')}}</td>
                                    <td>{{ __('2008/12/13')}}</td>
                                    <td>{{ __('$103,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jena Gaines')}}</td>
                                    <td>{{ __('Office Manager')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('30')}}</td>
                                    <td>{{ __('2008/12/19')}}</td>
                                    <td>{{ __('$90,560')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Quinn Flynn')}}</td>
                                    <td>{{ __('Support Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2013/03/03')}}</td>
                                    <td>{{ __('$342,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Charde Marshall')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('36')}}</td>
                                    <td>{{ __('2008/10/16')}}</td>
                                    <td>{{ __('$470,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Haley Kennedy')}}</td>
                                    <td>{{ __('Senior Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('43')}}</td>
                                    <td>{{ __('2012/12/18')}}</td>
                                    <td>{{ __('$313,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('19')}}</td>
                                    <td>{{ __('2010/03/17')}}</td>
                                    <td>{{ __('$385,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Michael Silva')}}</td>
                                    <td>{{ __('Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2012/11/27')}}</td>
                                    <td>{{ __('$198,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Paul Byrd')}}</td>
                                    <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('64')}}</td>
                                    <td>{{ __('2010/06/09')}}</td>
                                    <td>{{ __('$725,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Gloria Little')}}</td>
                                    <td>{{ __('Systems Administrator')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2009/04/10')}}</td>
                                    <td>{{ __('$237,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bradley Greer')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('41')}}</td>
                                    <td>{{ __('2012/10/13')}}</td>
                                    <td>{{ __('$132,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Dai Rios')}}</td>
                                    <td>{{ __('Personnel Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('35')}}</td>
                                    <td>{{ __('2012/09/26')}}</td>
                                    <td>{{ __('$217,500')}}</td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Language - Comma Decimal Place')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="lang-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ __('Tiger Nixon')}}</td>
                                    <td>{{ __('System Architect')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2011/04/25')}}</td>
                                    <td>{{ __('$320,800')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Garrett Winters')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('63')}}</td>
                                    <td>{{ __('2011/07/25')}}</td>
                                    <td>{{ __('$170,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Ashton Cox')}}</td>
                                    <td>{{ __('Junior Technical Author')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2009/01/12')}}</td>
                                    <td>{{ __('$86,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Cedric Kelly')}}</td>
                                    <td>{{ __('Senior Javascript Developer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2012/03/29')}}</td>
                                    <td>{{ __('$433,060')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Airi Satou')}}</td>
                                    <td>{{ __('Accountant')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('33')}}</td>
                                    <td>{{ __('2008/11/28')}}</td>
                                    <td>{{ __('$162,700')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Brielle Williamson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('61')}}</td>
                                    <td>{{ __('2012/12/02')}}</td>
                                    <td>{{ __('$372,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Herrod Chandler')}}</td>
                                    <td>{{ __('Sales Assistant')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2012/08/06')}}</td>
                                    <td>{{ __('$137,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Rhona Davidson')}}</td>
                                    <td>{{ __('Integration Specialist')}}</td>
                                    <td>{{ __('Tokyo')}}</td>
                                    <td>{{ __('55')}}</td>
                                    <td>{{ __('2010/10/14')}}</td>
                                    <td>{{ __('$327,900')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Colleen Hurst')}}</td>
                                    <td>{{ __('Javascript Developer')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('39')}}</td>
                                    <td>{{ __('2009/09/15')}}</td>
                                    <td>{{ __('$205,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Sonya Frost')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('23')}}</td>
                                    <td>{{ __('2008/12/13')}}</td>
                                    <td>{{ __('$103,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Jena Gaines')}}</td>
                                    <td>{{ __('Office Manager')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('30')}}</td>
                                    <td>{{ __('2008/12/19')}}</td>
                                    <td>{{ __('$90,560')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Quinn Flynn')}}</td>
                                    <td>{{ __('Support Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('22')}}</td>
                                    <td>{{ __('2013/03/03')}}</td>
                                    <td>{{ __('$342,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Charde Marshall')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('San Francisco')}}</td>
                                    <td>{{ __('36')}}</td>
                                    <td>{{ __('2008/10/16')}}</td>
                                    <td>{{ __('$470,600')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Haley Kennedy')}}</td>
                                    <td>{{ __('Senior Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('43')}}</td>
                                    <td>{{ __('2012/12/18')}}</td>
                                    <td>{{ __('$313,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Tatyana Fitzpatrick')}}</td>
                                    <td>{{ __('Regional Director')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('19')}}</td>
                                    <td>{{ __('2010/03/17')}}</td>
                                    <td>{{ __('$385,750')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Michael Silva')}}</td>
                                    <td>{{ __('Marketing Designer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('66')}}</td>
                                    <td>{{ __('2012/11/27')}}</td>
                                    <td>{{ __('$198,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Paul Byrd')}}</td>
                                    <td>{{ __('Chief Financial Officer (CFO)')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('64')}}</td>
                                    <td>{{ __('2010/06/09')}}</td>
                                    <td>{{ __('$725,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Gloria Little')}}</td>
                                    <td>{{ __('Systems Administrator')}}</td>
                                    <td>{{ __('New York')}}</td>
                                    <td>{{ __('59')}}</td>
                                    <td>{{ __('2009/04/10')}}</td>
                                    <td>{{ __('$237,500')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Bradley Greer')}}</td>
                                    <td>{{ __('Software Engineer')}}</td>
                                    <td>{{ __('London')}}</td>
                                    <td>{{ __('41')}}</td>
                                    <td>{{ __('2012/10/13')}}</td>
                                    <td>{{ __('$132,000')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('Dai Rios')}}</td>
                                    <td>{{ __('Personnel Lead')}}</td>
                                    <td>{{ __('Edinburgh')}}</td>
                                    <td>{{ __('35')}}</td>
                                    <td>{{ __('2012/09/26')}}</td>
                                    <td>{{ __('$217,500')}}</td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Position')}}</th>
                                    <th>{{ __('Office')}}</th>
                                    <th>{{ __('Age')}}</th>
                                    <th>{{ __('Start date')}}</th>
                                    <th>{{ __('Salary')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Language - Comma Decimal Place table end -->
            </div>
        </div>
    </div>
               

    <!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('js/datatables.js') }}"></script>
    @endpush
@endsection
      
