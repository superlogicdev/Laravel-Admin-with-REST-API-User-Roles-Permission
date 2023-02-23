@extends('layouts.main') 
@section('title', 'Invoice')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Invoice')}}</h5>
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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Invoice')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header"><h3 class="d-block w-100">{{ __('ThemeKit')}}<small class="float-right">{{ __('Date: 12/11/2018')}}</small></h3></div>
            <div class="card-body">
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From')}}
                        <address>
                            <strong>{{ __('ThemeKit')}},</strong><br>{{ __('795 Folsom Ave, Suite 546')}} <br>{{ __('San Francisco, CA 54656')}} <br>{{ __('Phone: (123) 123-4567')}}<br>{{ __('Email: info@themekit.com')}}
                        </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong>{{ __('John Doe')}}</strong><br>{{ __('795 Folsom Ave, Suite 600')}}<br>{{ __('San Francisco, CA 94107')}}<br>{{ __('Phone: (555) 123-7654')}}<br>{{ __('Email: john.doe@example.com')}}
                        </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                        <b>{{ __('Invoice #007612')}}</b><br>
                        <br>
                        <b>{{ __('Order ID:')}}</b> {{ __('4F3S8J')}}<br>
                        <b>{{ __('Payment Due:')}}</b> {{ __('2/22/2014')}}<br>
                        <b>{{ __('Account:')}}</b> {{ __('968-34567')}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('Qty')}}</th>
                                    <th>{{ __('Product')}}</th>
                                    <th>{{ __('Serial #')}}</th>
                                    <th>{{ __('Description')}}</th>
                                    <th>{{ __('Subtotal')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ __('1')}}</td>
                                    <td>{{ __('Call of Duty')}}</td>
                                    <td>{{ __('455-981-221')}}</td>
                                    <td>{{ __('El snort testosterone trophy driving gloves handsome')}}</td>
                                    <td>{{ __('$64.50')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('1')}}</td>
                                    <td>{{ __('Need for Speed IV')}}</td>
                                    <td>{{ __('247-925-726')}}</td>
                                    <td>{{ __('Wes Anderson umami biodiesel')}}</td>
                                    <td>{{ __('$50.00')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('1')}}</td>
                                    <td>{{ __('Monsters DVD')}}</td>
                                    <td>{{ __('735-845-642')}}</td>
                                    <td>{{ __('Terry Richardson helvetica tousled street art master')}}</td>
                                    <td>{{ __('$10.70')}}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('1')}}</td>
                                    <td>{{ __('Grown Ups Blue Ray')}}</td>
                                    <td>{{ __('422-568-642')}}</td>
                                    <td>{{ __('Tousled lomo letterpress')}}</td>
                                    <td>{{ __('$25.99')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <p class="lead">Payment Methods')}}:</p>
                        <img src="../img/credit/visa.png" alt="Visa">
                        <img src="../img/credit/mastercard.png" alt="Mastercard">
                        <img src="../img/credit/american-express.png" alt="American Express">
                        <img src="../img/credit/paypal2.png" alt="Paypal">
                        
                        <div class="alert alert-secondary mt-20">
                          {{ __('Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.')}}
                        </div>
                    </div>
                    <div class="col-6">
                        <p class="lead">{{ __('Amount Due 10/11/2018')}}</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th class="th-50">{{ __('Subtotal')}}:</th>
                                    <td>{{ __('$250.30')}}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Tax (9.3%)')}}</th>
                                    <td>{{ __('$10.34')}}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Shipping')}}:</th>
                                    <td>{{ __('$5.80')}}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Total')}}:</th>
                                    <td>{{ __('$265.24')}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-12">
                        <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> {{ __('Submit Payment')}}</button>
                        <button type="button" class="btn btn-primary pull-right"><i class="fa fa-download"></i> {{ __('Generate PDF')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

