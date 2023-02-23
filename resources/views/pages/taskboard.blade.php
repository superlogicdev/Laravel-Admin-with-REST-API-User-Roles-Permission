@extends('layouts.main') 
@section('title', 'Taskboard')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-server bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Taskboard')}}</h5>
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
                                <a href="#">{{ __('Apps')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Taskboard')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card task-board">
                    <div class="card-header">
                        <h3>{{ __('Todos')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body todo-task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <h6>{{ __('Dashbaord')}}</h6>
                                        <p>{{ __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.')}}</p>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                        <h6>{{ __('New project')}}</h6>
                                        <p>{{ __('It is a long established fact that a reader will be distracted.')}}</p>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="3">
                                    <div class="dd-handle">
                                        <h6>{{ __('Feed Details')}}</h6>
                                        <p>{{ __('here are many variations of passages of Lorem Ipsum available, but the majority have suffered.')}}</p>
                                    </div>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>In Progress</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body progress-task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <h6>{{ __('New Code Update')}}</h6>
                                        <p>{{ __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.')}}</p>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                        <h6>{{ __('Meeting')}}</h6>
                                        <p>{{ __('The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero')}}</p>
                                    </div>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Completed</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body completed-task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">                                   
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">                                        
                                        <h6>{{ __('Job title')}}</h6>
                                        <p>{{ __("If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.")}}</p>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                        <h6>{{ __('Event Done')}}</h6>
                                        <p>{{ __('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical')}}</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
               
    
    <!-- push external js -->
    @push('script')

        <script src="{{ asset('plugins/nestable/jquery.nestable.js') }}"></script>
        <script src="{{ asset('js/taskboard.js') }}"></script>
    @endpush
@endsection