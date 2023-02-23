@extends('layouts.main') 
@section('title', 'Profile')
@section('content')
    

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Profile')}}</h5>
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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Profile')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center"> 
                            <img src="../img/user.jpg" class="rounded-circle" width="150" />
                            <h4 class="card-title mt-10">{{ __('John Doe')}}</h4>
                            <p class="card-subtitle">{{ __('Front End Developer')}}</p>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="ik ik-user"></i> <font class="font-medium">254</font></a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="ik ik-image"></i> <font class="font-medium">54</font></a></div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-0"> 
                    <div class="card-body"> 
                        <small class="text-muted d-block">{{ __('Email address')}} </small>
                        <h6>johndoe@admin.com</h6> 
                        <small class="text-muted d-block pt-10">{{ __('Phone')}}</small>
                        <h6>(123) 456 7890</h6> 
                        <small class="text-muted d-block pt-10">{{ __('Address')}}</small>
                        <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                        <div class="map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.886539092!2d77.49085452149588!3d12.953959988118836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1542005497600" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> 
                        <small class="text-muted d-block pt-30">{{ __('Social Profile')}}</small>
                        <br/>
                        <button class="btn btn-icon btn-facebook"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-icon btn-twitter"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-icon btn-instagram"><i class="fab fa-instagram"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">{{ __('Timeline')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('Profile')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">{{ __('Setting')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                            <div class="card-body">
                                <div class="profiletimeline mt-0">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="../img/users/1.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 mb-20"><img src="../img/big/img2.jpg" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 mb-20"><img src="../img/big/img3.jpg" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 mb-20"><img src="../img/big/img4.jpg" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 mb-20"><img src="../img/big/img5.jpg" class="img-fluid rounded" /></div>
                                                </div>
                                                <div class="like-comm"> 
                                                    <a href="javascript:void(0)" class="link mr-10">2 comment</a> 
                                                    <a href="javascript:void(0)" class="link mr-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="../img/users/2.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <div class="mt-20 row">
                                                    <div class="col-md-3 col-xs-12"><img src="../img/big/img6.jpg" alt="user" class="img-fluid rounded" /></div>
                                                    <div class="col-md-9 col-xs-12">
                                                        <p> {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.')}}</p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a>
                                                    </div>
                                                </div>
                                                <div class="like-comm mt-20"> 
                                                    <a href="javascript:void(0)" class="link mr-10">2 comment</a> 
                                                    <a href="javascript:void(0)" class="link mr-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="../img/users/3.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="mt-10">{{ __(' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper')}} </p>
                                            </div>
                                            <div class="like-comm mt-20"> 
                                                <a href="javascript:void(0)" class="link mr-10">2 comment</a> 
                                                <a href="javascript:void(0)" class="link mr-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="../img/users/4.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <blockquote class="mt-10">
                                                    {{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt')}}
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-6"> <strong>{{ __('Full Name')}}</strong>
                                        <br>
                                        <p class="text-muted">Johnathan Deo</p>
                                    </div>
                                    <div class="col-md-3 col-6"> <strong>{{ __('Mobile')}}</strong>
                                        <br>
                                        <p class="text-muted">(123) 456 7890</p>
                                    </div>
                                    <div class="col-md-3 col-6"> <strong>{{ __('Email')}}</strong>
                                        <br>
                                        <p class="text-muted">johnathan@admin.com</p>
                                    </div>
                                    <div class="col-md-3 col-6"> <strong>{{ __('Location')}}</strong>
                                        <br>
                                        <p class="text-muted">London</p>
                                    </div>
                                </div>
                                <hr>
                                <p class="mt-30">{{ __('Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.')}}</p>
                                <p>{{ __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries')}} </p>
                                <p>{{ __('It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.')}}</p>
                                <h4 class="mt-30">{{ __('Skill Set')}}</h4>
                                <hr>
                                <h6 class="mt-30">{{ __('Wordpress')}} <span class="pull-right">80%</span></h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h6 class="mt-30">{{ __('HTML 5')}} <span class="pull-right">90%</span></h6>
                                <div class="progress  progress-sm">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h6 class="mt-30">{{ __('jQuery')}} <span class="pull-right">50%</span></h6>
                                <div class="progress  progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h6 class="mt-30">{{ __('Photoshop')}} <span class="pull-right">70%</span></h6>
                                <div class="progress  progress-sm">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="example-name">{{ __('Full Name')}}</label>
                                        <input type="text" placeholder="Johnathan Doe" class="form-control" name="example-name" id="example-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">{{ __('Email')}}</label>
                                        <input type="email" placeholder="johnathan@admin.com" class="form-control" name="example-email" id="example-email">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-password">{{ __('Password')}}</label>
                                        <input type="password" value="password" class="form-control" name="example-password" id="example-password">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-phone">{{ __('Phone No')}}</label>
                                        <input type="text" placeholder="123 456 7890" id="example-phone" name="example-phone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-message">{{ __('Message')}}</label>
                                        <textarea name="example-message" name="example-message" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-country">{{ __('Select Country')}}</label>
                                        <select name="example-message" id="example-message" class="form-control">
                                            <option>{{ __('London')}}</option>
                                            <option>{{ __('India')}}</option>
                                            <option>{{ __('Usa')}}</option>
                                            <option>{{ __('Canada')}}</option>
                                            <option>{{ __('Thailand')}}</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
