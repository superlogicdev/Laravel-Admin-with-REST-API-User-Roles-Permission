@extends('layouts.main') 
@section('title', 'Project')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush

    <div class="container-fluid">
    	<div class="row">
    		<!-- Round Chart statustc card start -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-red st-cir-card text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div id="status-round-1" class="chart-shadow st-cir-chart" >
                                    <h5>42%</h5>
                                </div>
                            </div>
                            <div class="col text-center">
                                <h3 class=" fw-700 mb-5">144</h3>
                                <h6 class="mb-0 ">Leads</h6>
                            </div>
                        </div>
                        <span class="st-bt-lbl">42</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-blue st-cir-card text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div id="status-round-2" class="chart-shadow st-cir-chart" >
                                    <h5>56%</h5>
                                </div>
                            </div>
                            <div class="col text-center">
                                <h3 class="fw-700 mb-5">102</h3>
                                <h6 class="mb-0">Goals</h6>
                            </div>
                        </div>
                        <span class="st-bt-lbl">56</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-green st-cir-card text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div id="status-round-3" class="chart-shadow st-cir-chart" >
                                    <h5>83%</h5>
                                </div>
                            </div>
                            <div class="col text-center">
                                <h3 class="fw-700 mb-5">124</h3>
                                <h6 class="mb-0">Contacts</h6>
                            </div>
                        </div>
                        <span class="st-bt-lbl">83</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-yellow st-cir-card text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div id="status-round-4" class="chart-shadow st-cir-chart" >
                                    <h5>42%</h5>
                                </div>
                            </div>
                            <div class="col text-center">
                                <h3 class="fw-700 mb-5">84</h3>
                                <h6 class="mb-0">Accounts</h6>
                            </div>
                        </div>
                        <span class="st-bt-lbl">42</span>
                    </div>
                </div>
            </div>
            <!-- Round Chart statustc card end -->
    		
    	</div>
    	<div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Timeline</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body timeline">
                        <div class="header bg-theme" style="background-image: url('../img/placeholder/placeimg_400_200_nature.jpg')">
                            <div class="color-overlay d-flex align-items-center">
                                <div class="day-number">8</div>
                                <div class="date-right">
                                    <div class="day-name">Monday</div>
                                    <div class="month">February 2018</div>
                                </div>
                            </div>                                
                        </div>
                        <ul>
                            <li>
                                <div class="bullet bg-pink"></div>
                                <div class="time">11am</div>
                                <div class="desc">
                                    <h3>Attendance</h3>
                                    <h4>Computer Class</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet bg-green"></div>
                                <div class="time">12pm</div>
                                <div class="desc">
                                    <h3>Design Team</h3>
                                    <h4>Hangouts</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet bg-orange"></div>
                                <div class="time">2pm</div>
                                <div class="desc">
                                    <h3>Finish</h3>
                                    <h4>Go to Home</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-12">
                <div id="card-412" class="card">
                    <div class="card-header">
                        <h3>Todos</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="task-list">
                            <li class="list">
                                <span></span>
                                <div class="task-details">
                                    <p class="date">
                                        <small class="text-primary">Meeting</small> - Upcoming in 5 days
                                    </p>
                                    <p>Meeting with Sara in the Caffee Caldo for Brunch</p>
                                    <small>Scheduled for 16th Mar, 2017</small>
                                </div>
                            </li>
                            <li class="list">
                                <span></span>
                                <div class="task-details">
                                    <p class="date">
                                        <small class="text-primary">Meeting</small> - Delay 7 days
                                    </p>
                                    <p>Technical management meeting</p>
                                    <small>Completed 15 days ago</small>
                                </div>
                            </li>
                            <li class="list completed">
                                <span></span>
                                <div class="task-details">
                                    <p class="date">
                                        <small class="text-danger">Transfer</small> - Completed
                                    </p>
                                    <p>Transfer all domain names as soon as possible!</p>
                                    <small>Completed 2 days ago</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>My Projects</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block widget-last-task">
                        <p class="mb-10">New Dashboard <span class="float-right text-muted f-14">5 Mins ago</span></p>
                        <ul class="list-unstyled mb-20">
                            <li class="d-inline-block"><img src="../img/users/2.jpg" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="../img/users/3.jpg" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="../img/users/2.jpg" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                        </ul>
                        <p class="mb-10 ">Web Design <span class="float-right text-muted f-14">8 Mins ago</span></p>
                        <ul class="list-unstyled  mb-20">
                            <li class="d-inline-block"><img src="../img/users/2.jpg" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="../img/users/3.jpg" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                        </ul>
                        <p class="mb-10">Android Design <span class="float-right text-muted f-14">12 Mins ago</span></p>
                        <ul class="list-unstyled mb-20">
                            <li class="d-inline-block"><img src="../img/users/4.jpg" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="../img/users/2.jpg" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="../img/users/3.jpg" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                        </ul>
                        <div class="right-icon-control m-t-15">
                            <div class="input-group input-group-button">
                                <input type="text" class="form-control" placeholder="Add Project">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="ik ik-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>Project Task List</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Regarding</th>
                                        <th>Activity Type</th>
                                        <th>Activity Status</th>
                                        <th>Owner</th>
                                        <th>Priority</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Building Marketing List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-danger">Open</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Project Task List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-primary">New</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Building Marketing List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-danger">Open</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Project Task List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-success">Close</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Building Marketing List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-primary">New</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    @push('script')   

        <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-knob/dist/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/gauge.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/pie.js') }}"></script>
        <script src="{{ asset('plugins/ammap3/ammap/ammap.js') }}"></script>
        <script src="{{ asset('plugins/ammap3/ammap/maps/js/usaLow.js') }}"></script>


        <script src="{{ asset('js/widget-chart.js') }}"></script>
    @endpush
@endsection