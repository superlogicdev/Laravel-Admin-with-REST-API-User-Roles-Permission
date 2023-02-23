@extends('layouts.main') 
@section('title', 'Pricing')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-dollar-sign bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Pricing')}}</h5>
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
                            <li class="breadcrumb-item"><a href="#">{{ __('Pricing')}}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        
        <section class="pricing">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                    <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                    </ul>
                    <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                  </div>
                </div>
              </div>
              <!-- Plus Tier -->
              <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                    <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                      <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                    </ul>
                    <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                  </div>
                </div>
              </div>
              <!-- Pro Tier -->
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                    <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                    </ul>
                    <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
 
    </div>
@endsection
