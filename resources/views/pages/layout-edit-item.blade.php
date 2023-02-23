@extends('layouts.main') 
@section('title', 'Layout Item')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/summernote/dist/summernote-bs4.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Edit Layout Item')}}</h5>
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
                                <a href="#">{{ __('Pages')}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Layouts')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Layout Item')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputTitle">{{ __('Title')}}</label>
                                <input type="text" class="form-control" id="exampleInputTitle" placeholder="Name" value="Donec felis urna, commodo eget velit interdum, malesuada lacinia eros.">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSubtitle">{{ __('Subtitle')}}</label>
                                <input type="text" class="form-control" id="exampleInputSubtitle" placeholder="Name" value="Nullam elementum aliquam porta.">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">{{ __('Description')}}</label>
                                <textarea class="form-control html-editor" rows="10">
                                    <p>{{ __('Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus fermentum imperdiet ligula, et mollis quam sagittis ac. In quis interdum sem. Vivamus blandit fringilla hendrerit. Suspendisse vulputate sapien vitae mi convallis dictum. Sed blandit felis ut quam accumsan, at condimentum nibh varius. Mauris ornare ultricies ipsum.')}}</p>
                                    <div class="jumbotron pt-30 pb-30 mt-30">
                                        <h2 class="mt-0">{{ __('Hello, world!')}}</h2>
                                        <p class="lead">{{ __('This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.')}}</p>
                                    </div>
                                    <p>{{ __('Praesent eleifend ac felis dignissim mattis. Suspendisse eget congue enim, ac fermentum risus. Donec eget risus lacus. Nullam nec lectus quis tortor ultrices consectetur. Etiam dui erat, tristique vel quam a, maximus porttitor enim. Ut molestie turpis in est iaculis, ut congue massa porta.')}}</p>
                                </textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>{{ __('Images upload')}}</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">{{ __('Upload')}}</button>
                                    </span>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-secondary mr-2">{{ __('Save Changes')}}</button>
                        <button class="btn btn-dark">{{ __('Cancel')}}</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
                

    <div class="modal fade edit-layout-modal" id="editLayoutItem" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLayoutItemLabel">{{ __('Sed id mi non quam iaculis pulvinar.')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="lead">{{ __('Nullam elementum aliquam porta.')}}</p>
                    <p>{{ __('Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus fermentum imperdiet ligula, et mollis quam sagittis ac. In quis interdum sem. Vivamus blandit fringilla hendrerit. Suspendisse vulputate sapien vitae mi convallis dictum. Sed blandit felis ut quam accumsan, at condimentum nibh varius. Mauris ornare ultricies ipsum.')}}</p>
                    <div class="row">
                        <div class="col-md-6"><img src="../img/portfolio-1.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-6"><img src="../img/portfolio-8.jpg" class="img-fluid" alt=""></div>
                    </div>
                    <div class="jumbotron pt-30 pb-30 mt-30">
                        <h2 class="mt-0">{{ __('Hello, world!')}}</h2>
                        <p class="lead">{{ __('This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.')}}</p>
                    </div>
                    <p>{{ __('Praesent eleifend ac felis dignissim mattis. Suspendisse eget congue enim, ac fermentum risus. Donec eget risus lacus. Nullam nec lectus quis tortor ultrices consectetur. Etiam dui erat, tristique vel quam a, maximus porttitor enim. Ut molestie turpis in est iaculis, ut congue massa porta.')}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close</button>
                    <button type="button" class="btn btn-primary">{{ __('Edit')}}</button>
                    <button type="button" class="btn btn-danger list-delete">{{ __('Delete')}}</button>
                </div>
            </div>
        </div>
    </div>
    
        
    <!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
        <script src="{{ asset('plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('js/layouts.js') }}"></script>
    @endpush
@endsection