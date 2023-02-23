@extends('layouts.main') 

@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <title>{{ __('Permission Example | Laravel Admin Template - Themekit') }}</title>

        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush
    

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-layers bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('PermissionExample ')}}</h5>
                            <span>{{ __('Some examples of predefined roles and permissions')}} </span>
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
                                <a href="#">{{ __('Permission')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Example')}} </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Instruction start -->
            <div class="col-md-12">
                <div class="card table-card proj-t-card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 p-3">
                                    {{ __('For user management: permission and roles we use')}}  <code>larave-permissions</code> {{ __('packge. This package allows for users to be associated with permissions and roles. Every role is associated with multiple permissions. A ')}} <code>Role</code> {{ __('and a')}}  <code>Permission</code> {{ __('are regular Eloquent models.')}} <br><br>

                                    {{ __('Blade directive use:')}}  <br>
                                    <img src="{{ asset('img/blade-syntax.JPG')}}" alt="" class="img-fluid"> <br><br>
                                    {{ __('Read larave-permissions')}}   <a class="text-red" href="https://docs.spatie.be/laravel-permission/v3/introduction/"> {{ __('documentation')}}  </a>. 
                                </div>
                            </div>
                        <h6 class="pt-badge bg-red">{{ __('Spaite')}} </h6>
                    </div>
                </div>
            </div>
            <!-- Instruction end -->
            <!-- product and new customar start -->
            <div class="col-xl-4 col-md-6">
                <div class="card new-cust-card">
                    <div class="card-header">
                        <h3>{{ __('New Customers')}} </h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="align-middle mb-25">
                            <img src="{{ asset('img/users/1.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                            <div class="d-inline-block">
                                <a href="#!"><h6>{{ __('Alex Thompson')}} </h6></a>
                                <p class="text-muted mb-0">{{ __('Cheers!')}}</p>
                                <span class="status active"></span>
                            </div>
                        </div>
                        <div class="align-middle mb-25">
                            <img src="{{ asset('img/users/2.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                            <div class="d-inline-block">
                                <a href="#!"><h6>{{ __('John Doue')}} </h6></a>
                                <p class="text-muted mb-0">{{ __('stay hungry stay foolish!')}} </p>
                                <span class="status active"></span>
                            </div>
                        </div>
                        <div class="align-middle mb-25">
                            <img src="{{ asset('img/users/3.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                            <div class="d-inline-block">
                                <a href="#!"><h6>{{ __('Alex Thompson')}} </h6></a>
                                <p class="text-muted mb-0">{{ __('Cheers!')}}</p>
                                <span class="status deactive text-mute"><i class="far fa-clock mr-10"></i>{{ __('30 min ago')}}</span>
                            </div>
                        </div>
                        <div class="align-middle mb-25">
                            <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                            <div class="d-inline-block">
                                <a href="#!"><h6>{{ __('John Doue')}}</h6></a>
                                <p class="text-muted mb-0">{{ __('Cheers!')}}</p>
                                <span class="status deactive text-mute"><i class="far fa-clock mr-10"></i>{{ __('10 min ago')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>{{ __('New Products')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <p class="mb-0 p-3 ">{{ __('Edit permission will visible only for')}}  <code>Super Admin</code> {{ __('role and')}} <code>manage_sales</code> {{ __('permission')}}</p>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>{{ __('Product Name')}}</th>
                                        <th>{{ __('Image')}}</th>
                                        <th>{{ __('Status')}}</th>
                                        <th>{{ __('Price')}}</th>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <th>{{ __('Action')}}</th>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('Iphone 6')}}</td>
                                        <td><img src="{{ asset('img/widget/p2.jpg')}}" alt="" class="img-fluid img-20"></td>
                                        <td>
                                            <div class="p-status bg-green"></div>
                                        </td>
                                        <td>$20</td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                    <tr>
                                        <td>{{ __('Jacket')}}</td>
                                        <td><img src="{{ asset('img/widget/p3.jpg')}}" alt="" class="img-fluid img-20"></td>
                                        <td>
                                            <div class="p-status bg-green"></div>
                                        </td>
                                        <td>$35</td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                    <tr>
                                        <td>{{ __('Sofa')}}</td>
                                        <td><img src="{{ asset('img/widget/p4.jpg')}}" alt="" class="img-fluid img-20"></td>
                                        <td>
                                            <div class="p-status bg-green"></div>
                                        </td>
                                        <td>$85</td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                    <tr>
                                        <td>{{ __('Iphone 6')}}</td>
                                        <td><img src="{{ asset('img/widget/p2.jpg')}}" alt="" class="img-fluid img-20"></td>
                                        <td>
                                            <div class="p-status bg-green"></div>
                                        </td>
                                        <td>$20</td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- product and new customar end -->

            <!-- top contact and member performance start -->
            <div class="col-xl-6 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>{{ __('Top Contacts')}}</h3>
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
                                        <th>{{ __('Company')}}</th>
                                        <th>{{ __('Start Date')}}</th>
                                        <th>{{ __('End Date')}}</th>
                                        <th>{{ __('Status')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('Apple Company')}}</td>
                                        <td>{{ __('23/05/2017')}}</td>
                                        <td>{{ __('04/08/2018')}}</td>
                                        <td><label class="badge badge-success">{{ __('Paid')}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Envato Pvt Ltd.')}}</td>
                                        <td>{{ __('20/03/2017')}}</td>
                                        <td>{{ __('04/08/2019')}}</td>
                                        <td><label class="badge badge-danger">{{ __('Unpaid')}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Dribble Company')}}</td>
                                        <td>{{ __('13/05/2017')}}</td>
                                        <td>{{ __('03/01/2018')}}</td>
                                        <td><label class="badge badge-success">{{ __('Paid')}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Adobe Family')}}</td>
                                        <td>{{ __('11/01/2016')}}</td>
                                        <td>{{ __('02/03/2017')}}</td>
                                        <td><label class="badge badge-success">{{ __('Paid')}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Apple Company')}}</td>
                                        <td>{{ __('23/05/2017')}}</td>
                                        <td>{{ __('04/08/2018')}}</td>
                                        <td><label class="badge badge-danger">{{ __('Unpaid')}}</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>{{ __('Member’s  performance')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <p class="mb-0 p-3 ">{{ __('Members performance will visible only for')}}  <code>Super Admin</code> {{ __('role and')}} <code>manage_projects</code> {{ __('permission')}}</p>
                        <!--start permitted area for manage_sales permission -->
                        @can('manage_projects')
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 without-header">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0">{{ __('Shirley  Hoe')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , NY')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h6 class="fw-700">$78.001<i class="fas fa-level-down-alt text-red ml-10"></i></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/2.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0">{{ __('James Alexander')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , EL')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h6 class="fw-700">$89.051<i class="fas fa-level-up-alt text-green ml-10"></i></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0">{{ __('Shirley  Hoe')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , NY')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h6 class="fw-700">$89.051<i class="fas fa-level-up-alt text-green ml-10"></i></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/2.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0">{{ __('James Alexander')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , EL')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h6 class="fw-700">$78.001<i class="fas fa-level-down-alt text-red ml-10"></i></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0">{{ __('Shirley  Hoe')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , NY')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h6 class="fw-700">$78.001<i class="fas fa-level-down-alt text-red ml-10"></i></h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endcan

                    </div>
                </div>
            </div>
            <!-- top contact and member performance end -->

            <!-- lettest acivity and statustic card start -->
            <div class="col-xl-4 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h3>{{ __('What’s New')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="scroll-widget">
                            <div class="latest-update-box">
                                <div class="row pt-20 pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15 update-icon">
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('Your Manager Posted.')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Jonny michel')}}</p>
                                    </div>
                                </div>
                                <div class="row pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="ik ik-briefcase bg-red update-icon"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('You have 3 pending Task.')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Hemilton')}}</p>
                                    </div>
                                </div>
                                <!--start permitted area for manage_sales permission -->
                                @can('manage_sales')
                                <div class="row pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="ik ik-check fw-600 bg-green update-icon"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('New Order Received')}}.</h6></a>
                                        <p class="text-muted mb-0">{{ __('Hemilton')}}</p>
                                    </div>
                                </div>
                                @endcan
                                <div class="row pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="ik ik-briefcase bg-red update-icon"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('You have 3 pending Task.')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Hemilton')}}</p>
                                    </div>
                                </div>
                                <!--start permitted area for manage_sales permission -->
                                @can('manage_sales')
                                <div class="row pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="ik ik-check fw-600 bg-green update-icon"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('New Order Received')}}.</h6></a>
                                        <p class="text-muted mb-0">{{ __('Hemilton')}}</p>
                                    </div>
                                </div>
                                @endcan
                                <div class="row">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15 update-icon">
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('Your Manager Posted.')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Jonny michel')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h3>{{ __('Latest Activity')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="scroll-widget">
                            <div class="latest-update-box">
                                <div class="row pt-20 pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="b-primary update-icon ring"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('Devlopment & Update')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Lorem ipsum dolor sit amet')}}, <a href="#!" class="text-blue"> {{ __('More')}}</a></p>
                                    </div>
                                </div>
                                <div class="row pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="b-primary update-icon ring"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('Showcases')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Lorem dolor sit amet,')}} <a href="#!" class="text-blue"> {{ __('More')}}</a></p>
                                    </div>
                                </div>
                                <div class="row pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="b-success update-icon ring"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('Miscellaneous')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Lorem ipsum dolor sit ipsum amet')}}, <a href="#!" class="text-green"> {{ __('More')}}</a></p>
                                    </div>
                                </div>
                                <div class="row pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="b-primary update-icon ring"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('Showcases')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Lorem dolor sit amet')}}, <a href="#!" class="text-blue"> {{ __('More')}}</a></p>
                                    </div>
                                </div>
                                <div class="row pb-30">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="b-success update-icon ring"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('Miscellaneous')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Lorem ipsum dolor sit ipsum amet')}}, <a href="#!" class="text-green"> {{ __('More')}}</a></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto text-right update-meta pr-0">
                                        <i class="b-danger update-icon ring"></i>
                                    </div>
                                    <div class="col pl-5">
                                        <a href="#!"><h6>{{ __('Your Manager Posted.')}}</h6></a>
                                        <p class="text-muted mb-0">{{ __('Lorem ipsum dolor sit amet')}}, <a href="#!" class="text-red"> {{ __('More')}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>{{ __('Campaign  Statistics')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block pb-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 without-header">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3>{{ __('100')}}</h3></td>
                                        <td>
                                            <p>{{ __('Engagement')}}</p>
                                        </td>
                                        <td class="text-right">
                                            <label class="badge badge-warning">{{ __('43')}}%</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>{{ __('480')}}</h3></td>
                                        <td>
                                            <p>{{ __('Likes')}}</p>
                                        </td>
                                        <td class="text-right">
                                            <label class="badge badge-success">{{ __('58')}}%</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>{{ __('230')}}</h3></td>
                                        <td>
                                            <p>{{ __('Clicks')}}</p>
                                        </td>
                                        <td class="text-right">
                                            <label class="badge badge-danger">{{ __('30')}}%</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>{{ __('480')}}</h3></td>
                                        <td>
                                            <p>{{ __('Likes')}}</p>
                                        </td>
                                        <td class="text-right">
                                            <label class="badge badge-danger">{{ __('30')}}%</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- lettest acivity and statustic card end -->

            <!-- Customer overview start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>{{ __('Customer  Overview')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <p class="mb-0 p-3 ">{{ __('Edit permission will visible only for')}}  <code>Super Admin</code> {{ __('role and')}} <code>manage_sales</code> {{ __('permission')}}</p>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>{{ __('Customer')}}</th>
                                        <th>{{ __('Company')}}</th>
                                        <th>{{ __('Lead Score')}}</th>
                                        <th>{{ __('Date')}}</th>
                                        <th>{{ __('Tags')}}</th>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <th>{{ __('Actions')}}</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6>{{ __('Shirley  Hoe')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , NY')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ __('Pinterest')}}</td>
                                        <td>{{ __('223')}}</td>
                                        <td>19-11-2018')}}</td>
                                        <td>
                                            <label class="badge badge-primary">{{ __('Sketch')}}</label>
                                            <label class="badge badge-primary">{{ __('Ui')}}</label>
                                        </td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/2.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6>{{ __('James Alexander')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , EL')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ __('Facebook')}}</td>
                                        <td>{{ __('268')}}</td>
                                        <td>19-11-2018')}}</td>
                                        <td>
                                            <label class="badge badge-primary">{{ __('Ux')}}</label>
                                            <label class="badge badge-danger">{{ __('Ui')}}</label>
                                            <label class="badge badge-danger">{{ __('php')}}</label>
                                        </td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6>{{ __('Shirley  Hoe')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , NY')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ __('Twitter')}}</td>
                                        <td>293</td>
                                        <td>16-03-2018</td>
                                        <td>
                                            <label class="badge badge-danger">{{ __('Sketch')}}</label>
                                            <label class="badge badge-primary">{{ __('Ui')}}</label>
                                        </td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6>{{ __('Shirley  Hoe')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , NY')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ __('Pinterest')}}</td>
                                        <td>{{ __('223')}}</td>
                                        <td>19-11-2018</td>
                                        <td>
                                            <label class="badge badge-primary">{{ __('Ux')}}</label>
                                            <label class="badge badge-success">{{ __('Ui')}}</label>
                                            <label class="badge badge-warning">{{ __('php')}}</label>
                                        </td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/2.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6>{{ __('James Alexander')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , EL')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ __('Facebook')}}</td>
                                        <td>{{ __('268')}}</td>
                                        <td>19-11-2018</td>
                                        <td>
                                            <label class="badge badge-primary">{{ __('Sketch')}}</label>
                                            <label class="badge badge-primary">{{ __('Ui')}}</label>
                                        </td>

                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ asset('img/users/4.jpg')}}" alt="user image" class="rounded-circle img-40 align-top mr-15">
                                                <div class="d-inline-block">
                                                    <h6>{{ __('Shirley  Hoe')}}</h6>
                                                    <p class="text-muted mb-0">{{ __('Sales executive , NY')}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ __('Twitter')}}</td>
                                        <td>{{ __('293')}}</td>
                                        <td>16-03-2018</td>
                                        <td>
                                            <label class="badge badge-danger">{{ __('Sketch')}}</label>
                                            <label class="badge badge-primary">{{ __('Ui')}}</label>
                                        </td>
                                        <!--start permitted area for manage_sales permission -->
                                        @can('manage_sales')
                                        <td>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                        @endcan
                                        <!--end permitted area for manage_sales permission -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Customer overview end -->

            <!-- Project Task start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>{{ __('Project Task List')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <p class="mb-0 p-3 ">{{ __('Project task list will visible only for')}}  <code>Super Admin</code> {{ __('role and')}} <code>manage_projects</code> {{ __('permission')}}</p>
                        <!--start permitted area for manage_sales permission -->
                        @can('manage_projects')
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>{{ __('Subject')}}</th>
                                        <th>{{ __('Regarding')}}</th>
                                        <th>{{ __('Activity Type')}}</th>
                                        <th>{{ __('Activity Status')}}</th>
                                        <th>{{ __('Owner')}}</th>
                                        <th>{{ __('Priority')}}</th>
                                        <th>{{ __('Start Date')}}</th>
                                        <th>{{ __('End Date')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('Building Marketing List')}}</td>
                                        <td>{{ __('Software pro')}}</td>
                                        <td>{{ __('Task')}}</td>
                                        <td><label class="badge badge-danger">Open</label></td>
                                        <td>{{ __('Ken Malit')}}</td>
                                        <td>{{ __('Normal')}}</td>
                                        <td>{{ __('7/8/2017')}}</td>
                                        <td>{{ __('8/9/2018')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Project Task List')}}</td>
                                        <td>{{ __('Software pro')}}</td>
                                        <td>{{ __('Task')}}</td>
                                        <td><label class="badge badge-primary">New</label></td>
                                        <td>{{ __('Ken Mali')}}t</td>
                                        <td>{{ __('Normal')}}</td>
                                        <td>{{ __('7/8/2017')}}</td>
                                        <td>{{ __('8/9/2018')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Building Marketing List')}}</td>
                                        <td>{{ __('Software pro')}}</td>
                                        <td>{{ __('Task')}}</td>
                                        <td><label class="badge badge-danger">Open</label></td>
                                        <td>{{ __('Ken Malit')}}</td>
                                        <td>{{ __('Normal')}}</td>
                                        <td>{{ __('7/8/2017')}}</td>
                                        <td>{{ __('8/9/2018')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Project Task List')}}</td>
                                        <td>{{ __('Software pro')}}</td>
                                        <td>{{ __('Task')}}</td>
                                        <td><label class="badge badge-success">Close</label></td>
                                        <td>{{ __('Ken Malit')}}</td>
                                        <td>{{ __('Normal')}}</td>
                                        <td>{{ __('7/8/2017')}}</td>
                                        <td>{{ __('8/9/2018')}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Building Marketing List')}}</td>
                                        <td>{{ __('Software pro')}}</td>
                                        <td>{{ __('Task')}}</td>
                                        <td><label class="badge badge-primary">New</label></td>
                                        <td>{{ __('Ken Malit')}}</td>
                                        <td>{{ __('Normal')}}</td>
                                        <td>{{ __('7/8/2017')}}</td>
                                        <td>{{ __('8/9/2018')}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endcan
                    </div>
                </div>
            </div>
            <!-- Project Task end -->

            <!-- feed, project, testimonial start -->
            <div class="col-xl-4 col-md-12">
                <div class="card feed-card">
                    <div class="card-header">
                        <h3>{{ __('Feeds')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row mb-30 align-items-center">
                            <div class="col-auto pr-0">
                                <i class="ik ik-bell bg-blue feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!"><h6 class="mb-5">{{ __('You have 3 pending tasks.')}} <span class="text-muted float-right f-14">{{ __('Just Now')}}</span></h6></a>
                            </div>
                        </div>
                        <div class="row mb-30 align-items-center">
                            <div class="col-auto pr-0">
                                <i class="ik ik-shopping-cart bg-red feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!"><h6 class="mb-5">{{ __('New order received')}} <span class="text-muted float-right f-14">{{ __('Just Now')}}</span></h6></a>
                            </div>
                        </div>
                        <div class="row mb-30 align-items-center">
                            <div class="col-auto pr-0">
                                <i class="ik ik-file-text bg-green feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!"><h6 class="mb-5">{{ __('You have 3 pending tasks.')}} <span class="text-muted float-right f-14">{{ __('Just Now')}}</span></h6></a>
                            </div>
                        </div>
                        <div class="row mb-30 align-items-center">
                            <div class="col-auto pr-0">
                                <i class="ik ik-bell bg-blue feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!"><h6 class="mb-5">{{ __('You have 3 pending tasks.')}} <span class="text-muted float-right f-14">Just Now</span></h6></a>
                            </div>
                        </div>
                        <div class="row mb-30 align-items-center">
                            <div class="col-auto pr-0">
                                <i class="ik ik-file-text bg-green feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!"><h6 class="mb-5">{{ __('You have 3 pending tasks.')}} <span class="text-muted float-right f-14">{{ __('Just Now')}}</span></h6></a>
                            </div>
                        </div>
                        <div class="row mb-20 align-items-center">
                            <div class="col-auto pr-0">
                                <i class="ik ik-shopping-cart bg-red feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!"><h6 class="mb-5">{{ __('New order received')}} <span class="text-muted float-right f-14">{{ __('Just Now')}}</span></h6></a>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="#!" class="b-b-primary text-primary">{{ __('View all Feeds')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('My Projects')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block widget-last-task">
                        

                        <p class="mb-10">{{ __('New Dashboard')}} <span class="float-right text-muted f-14">{{ __('5 Mins ago')}}</span></p>
                        <ul class="list-unstyled mb-20">
                            <li class="d-inline-block"><img src="{{ asset('img/users/2.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="{{ asset('img/users/3.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="{{ asset('img/users/2.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                        </ul>
                        <p class="mb-10 ">{{ __('Web Design')}} <span class="float-right text-muted f-14">{{ __('8 Mins ago')}}</span></p>
                        <ul class="list-unstyled  mb-20">
                            <li class="d-inline-block"><img src="{{ asset('img/users/2.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="{{ asset('img/users/3.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                        </ul>
                        <p class="mb-10">{{ __('Android Design')}} <span class="float-right text-muted f-14">{{ __('12 Mins ago')}}</span></p>
                        <ul class="list-unstyled mb-20">
                            <li class="d-inline-block"><img src="{{ asset('img/users/4.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="{{ asset('img/users/2.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="{{ asset('img/users/3.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                        </ul>
                        <p class="mb-10">{{ __('New Dashboard')}} <span class="float-right text-muted f-14">{{ __('5 Mins ago')}}</span></p>
                        <ul class="list-unstyled mb-20">
                            <li class="d-inline-block"><img src="{{ asset('img/users/2.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="{{ asset('img/users/3.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                            <li class="d-inline-block"><img src="{{ asset('img/users/2.jpg')}}" alt="user-image" class="rounded-circle img-30 mr-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                        </ul>
                        <hr>
                        <p class="mb-0">{{ __('Add project button will visible only for')}}  <code>Super Admin</code> {{ __('role and')}} <code>manage_projects</code> {{ __('permission')}}</p>
                        <!--start permitted area for manage_sales permission -->
                        @can('manage_projects')
                        <div class="right-icon-control m-t-15">
                            <div class="input-group input-group-button">
                                <input type="text" class="form-control" placeholder="Add Project">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="ik ik-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        @endcan
                    </div>
                </div>
            </div>
            

            <div class="col-xl-4 col-md-6">
                <div class="card testimonial-card table-card">
                    <div class="card-header">
                        <h3>{{ __('Testimonial')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <p class="mb-0 p-3">{{ __('Testimonial will visible only for')}}  <code>Super Admin</code> {{ __('role and')}} <code>manage_projects</code> {{ __('permission')}}</p>
                        <!--start permitted area for manage_sales permission -->
                        @can('manage_projects')
                        <div class="review-block">
                            <div class="row">
                                <div class="col-sm-auto pr-0">
                                    <img src="{{ asset('img/users/2.jpg')}}" alt="user image" class="rounded-circle profile-img cust-img mb-15">
                                </div>
                                <div class="col">
                                    <h6 class="mb-15">{{ __('John Deo')}}</h6>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="progress">
                                                <div class="progress-bar bg-green" style="width:85%"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="mb-0">3.2</h6></div>
                                    </div>
                                    <p class="mt-15 mb-0 text-muted">{{ __('Lorem Ipsum is simply dummy text of the printing and typesetting.')}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-auto pr-0">
                                    <img src="{{ asset('img/users/1.jpg')}}" alt="user image" class="rounded-circle profile-img cust-img mb-15">
                                </div>
                                <div class="col">
                                    <h6 class="mb-15">{{ __('John Deo')}}</h6>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="progress">
                                                <div class="progress-bar bg-blue" style="width:85%"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="mb-0">3.2</h6></div>
                                    </div>
                                    <p class="mt-15 mb-0 text-muted">{{ __('Lorem Ipsum is simply dummy text of the printing and typesetting.')}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-auto pr-0">
                                    <img src="{{ asset('img/users/1.jpg')}}" alt="user image" class="rounded-circle profile-img cust-img mb-15">
                                </div>
                                <div class="col">
                                    <h6 class="mb-15">{{ __('John Deo')}}</h6>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="progress">
                                                <div class="progress-bar bg-red" style="width:85%"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="mb-0">3.2</h6></div>
                                    </div>
                                    <p class="mt-15 mb-0 text-muted">{{ __('Lorem Ipsum is simply dummy text of the printing and typesetting.')}}</p>
                                </div>
                            </div>
                        </div>
                        @endcan
                    </div>
                </div>
            </div>
            <!-- feed, project,testimonial end -->

            <!-- Application Sales start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>{{ __('Application Sales')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block p-b-0">
                        <p class="mb-0 p-3">{{ __('Sales report will visible only for')}}  <code>Super Admin</code> {{ __('role and')}} <code>manage_sales</code> {{ __('permission')}}</p>
                        <!--start permitted area for manage_sales permission -->
                        @can('manage_sales')
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th>{{ __('Application')}}</th>
                                        <th>{{ __('Sales')}}</th>
                                        <th>{{ __('Change')}}</th>
                                        <th>{{ __('Avg Price')}}</th>
                                        <th>{{ __('Total')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>{{ __('Able Pro')}}</h6>
                                                <p class="text-muted mb-0">{{ __('Powerful Admin Theme')}}</p>
                                            </div>
                                        </td>
                                        <td>16,300</td>
                                        <td>
                                            <div id="app-sale1" style="height:50px"></div>
                                        </td>
                                        <td>$53</td>
                                        <td class="text-blue">$15,652</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>{{ __('Photoshop')}}</h6>
                                                <p class="text-muted mb-0">{{ __('Design Software')}}</p>
                                            </div>
                                        </td>
                                        <td>26,421</td>
                                        <td>
                                            <div id="app-sale2" style="height:50px"></div>
                                        </td>
                                        <td>$35</td>
                                        <td class="text-blue">$18,785</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>{{ __('Guruable')}}</h6>
                                                <p class="text-muted mb-0">{{ __('Best Admin Template')}}</p>
                                            </div>
                                        </td>
                                        <td>8,265</td>
                                        <td>
                                            <div id="app-sale3" style="height:50px"></div>
                                        </td>
                                        <td>$98</td>
                                        <td class="text-blue">$9,652</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>{{ __('Flatable')}}</h6>
                                                <p class="text-muted mb-0">{{ __('Admin App')}}</p>
                                            </div>
                                        </td>
                                        <td>{{ __('10,652')}}</td>
                                        <td>
                                            <div id="app-sale4" style="height:50px"></div>
                                        </td>
                                        <td>$20</td>
                                        <td class="text-blue">$7,856</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endcan
                    </div>
                    <p class="mb-0 p-3">{{ __('View all Sales url will visible only for')}}  <code>Super Admin</code> {{ __('role and')}} <code>manage_sales</code> {{ __('permission')}}</p>
                    <!--start permitted area for manage_sales permission -->
                    @can('manage_sales')
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="#!" class=" b-b-primary text-primary">{{ __('View all Sales')}}</a>
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
            <!-- Application Sales end -->

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
       
        <script src="{{ asset('js/widget-data.js') }}"></script>
    @endpush
@endsection
