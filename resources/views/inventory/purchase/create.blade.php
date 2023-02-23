@extends('inventory.layout') 
@section('title', 'Add Purchase')
@section('content')
	<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-truck bg-blue"></i>
                        <div class="d-inline">
                            <h5>Add Purchase</h5>
                            <span>Purchase Entry</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Add Purchase</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            <div class="col-md-12">
        </div>            <!-- end message area-->
            <div class="col-md-12">
                <form class="forms-sample" method="POST" action="">
                    <input type="hidden" name="_token" value="k4JC0rIKsVlV9AR9NCn4JfVS7hvobvmKTZm9pwR6">                    <div class="row">
                        
                        <div class="col-md-3 pr-0">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" placeholder="Select Date">
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-10 pr-0">
                                                <label>Supplier</label>
                                                <select class="form-control select2">
                                                	<option selected="selected" value="" data-select2-id="3">Select Supplier</option>
                                                	<option value="1">Alex Ferguson</option>
                                                	<option value="2">John Doe</option></select>
                                                
                                            </div>
                                            <div class="col-sm-2 pl-1 pt-1">
                                                <button type="button" class="mt-4 btn btn-sm btn-primary" data-toggle="modal" data-target="#supplierAdd">+</button>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Tax (%)</label>
                                        <input type="text" class="form-control" placeholder="Enter Tax" value="10">
                                    </div>
                                    <div class="form-group">
                                        <label>Purchase Note</label>
                                        <textarea class="form-control h-123" name="note" placeholder="Enter Note"></textarea> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">

                                                <select class="form-control select2">
                                                	<option selected="selected" value="" data-select2-id="6">Select Warehouse</option>
                                                	<option value="1">Warehouse 1</option>
                                                	<option value="2">Warehouse 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group"> <select class="form-control select2">
                                                	<option selected="selected" value="" data-select2-id="9">Select Product</option>
                                                	<option value="1">HeadPhone</option>
                                                	<option value="2">Iphone 6</option>
                                                	<option value="3">Leather Bag</option>
                                                	<option value="4">Camera</option>
                                                	<option value="5">Joystick</option>
                                                	<option value="6">Jacket</option>
                                                	<option value="7">Smart Watch</option>
                                                	<option value="8">T-shirt</option>
                                                	<option value="9">Helmet</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 pl-1 pt-1">
                                            <a class="btn btn-sm btn-primary" href="/products/create">+</a>
                                        </div>
                                    </div>
                                                
                                    <div class="Purchasestable">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="wp-10">SL</th>
                                                    <th class="wp-40">Product</th>
                                                    <th class="wp-20 text-center">Unit Price</th>
                                                    <th class="wp-15">Qty</th>
                                                    <th class="wp-15">Sub Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td> <img src="../img/widget/p1.jpg" alt="" class="img-fluid img-20"> HeadPhone</td>
                                                    <td><input type="text" name="price[]" class="form-control w-100 text-center hm-30" value="10.00"></td>
                                                    <td><input type="text" name="shiping" class="form-control w-60 text-center hm-30" value="5"></td>
                                                    <td class="text-right">$ 50.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td> <img src="../img/widget/p2.jpg" alt="" class="img-fluid img-20"> Iphone 6</td>
                                                    <td><input type="text" name="price[]" class="form-control w-100 text-center hm-30" value="570.00"></td>
                                                    <td><input type="text" name="shiping" class="form-control w-60 text-center hm-30" value="1"></td>
                                                    <td class="text-right">$ 570.00</td>
                                                </tr>
                                                <tr>
                                                    <th class="border-0" colspan="3"></th>
                                                    <th>Total</th>
                                                    <th class="text-right">$ 620.00</th>
                                                </tr>
                                                <tr>
                                                    <td class="border-0" colspan="3"></td>
                                                    <td>Tax (<span id="tax-per">10.00</span>%)</td>
                                                    <td class="text-right">$ 62.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0" colspan="3"></td>
                                                    <td>Shipping</td>
                                                    <td class="text-right"><input type="text" name="shiping" class="form-control w-60 text-center hm-30 ml-auto" value="50.00"></td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0" colspan="3"></td>
                                                    <td>Discount</td>
                                                    <td class="text-right"><input type="text" name="discount" class="form-control w-60 text-center hm-30 ml-auto" value="0.00"></td>
                                                </tr>
                                                <tr>
                                                    <th class="border-0" colspan="3"></th>
                                                    <th>Grand Total</th>
                                                    <th class="text-right">$ 732.00</th>
                                                </tr>
                                                <tr>
                                                    <td class="border-0" colspan="2"></td>
                                                    <td class="border-0" colspan="2">
                                                        <div class="form-group">
                                                            <select class="form-control" name="Purchase_status">
                                                                <option selected="">Select Status</option>
                                                                <option value="ordered">Ordered</option>
                                                                <option value="recived">Recieved</option>
                                                                <option value="pending">Pending</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="border-0">
                                                        <div class="form-group">
                                                            <div type="submit" class="btn btn-primary wp-100">Save</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                        
            </div>

                            
        </div>
    </div>
    <div class="modal fade edit-layout-modal pr-0" id="supplierAdd" role="dialog" aria-labelledby="supplierAddLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog w-300" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supplierAddLabel">Add Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="d-block">Supplier Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Supplier Name">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Code</label>
                            <input type="text" name="code" class="form-control" placeholder="Enter Code">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        
                        <div class="form-group">
                            <label>Country</label>
                            <select class="form-control select2" name="country">
                            	<option selected="selected" value="">Select Country</option>
                            	<option value="AF">Afghanistan</option>
                            	<option value="AL">Albania</option>
                            	<option value="DZ">Algeria</option>
                            	<option value="AS">American Samoa</option>
                            	<option value="AD">Andorra</option>
                            	<option value="AO">Angola</option>
                            	<option value="AI">Anguilla</option>
                            	<option value="AQ">Antarctica</option>
                            	<option value="AG">Antigua and Barbuda</option>
                            	<option value="AR">Argentina</option>
                            	<option value="AM">Armenia</option>
                            	<option value="AW">Aruba</option>
                            	<option value="AU">Australia</option>
                            	<option value="AT">Austria</option>
                            	<option value="AZ">Azerbaijan</option>
                            	<option value="BS">Bahamas</option>
                            	<option value="BH">Bahrain</option>
                            	<option value="BD">Bangladesh</option>
                            	<option value="BB">Barbados</option>
                            	<option value="BY">Belarus</option>
                            	<option value="BE">Belgium</option>
                            	<option value="BZ">Belize</option>
                            	<option value="BJ">Benin</option>
                            	<option value="BM">Bermuda</option>
                            	<option value="BT">Bhutan</option>
                            	<option value="BO">Bolivia</option>
                            	<option value="BA">Bosnia and Herzegovina</option>
                            	<option value="BW">Botswana</option>
                            	<option value="BV">Bouvet Island</option>
                            	<option value="BR">Brazil</option>
                            	<option value="BQ">British Antarctic Territory</option>
                            	<option value="IO">British Indian Ocean Territory</option>
                            	<option value="VG">British Virgin Islands</option>
                            	<option value="BN">Brunei</option>
                            	<option value="BG">Bulgaria</option>
                            	<option value="BF">Burkina Faso</option>
                            	<option value="BI">Burundi</option>
                            	<option value="KH">Cambodia</option>
                            	<option value="CM">Cameroon</option>
                            	<option value="CA">Canada</option>
                            	<option value="CT">Canton and Enderbury Islands</option>
                            	<option value="CV">Cape Verde</option>
                            	<option value="KY">Cayman Islands</option>
                            	<option value="CF">Central African Republic</option>
                            	<option value="TD">Chad</option>
                            	<option value="CL">Chile</option>
                            	<option value="CN">China</option>
                            	<option value="CX">Christmas Island</option>
                            	<option value="CC">Cocos [Keeling] Islands</option>
                            	<option value="CO">Colombia</option>
                            	<option value="KM">Comoros</option>
                            	<option value="CG">Congo - Brazzaville</option>
                            	<option value="CD">Congo - Kinshasa</option>
                            	<option value="CK">Cook Islands</option>
                            	<option value="CR">Costa Rica</option>
                            	<option value="HR">Croatia</option>
                            	<option value="CU">Cuba</option>
                            	<option value="CY">Cyprus</option>
                            	<option value="CZ">Czech Republic</option>
                            	<option value="CI">Côte d’Ivoire</option>
                            	<option value="DK">Denmark</option>
                            	<option value="DJ">Djibouti</option>
                            	<option value="DM">Dominica</option>
                            	<option value="DO">Dominican Republic</option>
                            	<option value="NQ">Dronning Maud Land</option>
                            	<option value="DD">East Germany</option>
                            	<option value="EC">Ecuador</option>
                            	<option value="EG">Egypt</option>
                            	<option value="SV">El Salvador</option>
                            	<option value="GQ">Equatorial Guinea</option>
                            	<option value="ER">Eritrea</option>
                            	<option value="EE">Estonia</option>
                            	<option value="ET">Ethiopia</option>
                            	<option value="FK">Falkland Islands</option>
                            	<option value="FO">Faroe Islands</option>
                            	<option value="FJ">Fiji</option>
                            	<option value="FI">Finland</option>
                            	<option value="FR">France</option>
                            	<option value="GF">French Guiana</option>
                            	<option value="PF">French Polynesia</option>
                            	<option value="TF">French Southern Territories</option>
                            	<option value="FQ">French Southern and Antarctic Territories</option>
                            	<option value="GA">Gabon</option>
                            	<option value="GM">Gambia</option>
                            	<option value="GE">Georgia</option>
                            	<option value="DE">Germany</option>
                            	<option value="GH">Ghana</option>
                            	<option value="GI">Gibraltar</option>
                            	<option value="GR">Greece</option>
                            	<option value="GL">Greenland</option>
                            	<option value="GD">Grenada</option>
                            	<option value="GP">Guadeloupe</option>
                            	<option value="GU">Guam</option>
                            	<option value="GT">Guatemala</option>
                            	<option value="GG">Guernsey</option>
                            	<option value="GN">Guinea</option>
                            	<option value="GW">Guinea-Bissau</option>
                            	<option value="GY">Guyana</option>
                            	<option value="HT">Haiti</option>
                            	<option value="HM">Heard Island and McDonald Islands</option>
                            	<option value="HN">Honduras</option>
                            	<option value="HK">Hong Kong SAR China</option>
                            	<option value="HU">Hungary</option>
                            	<option value="IS">Iceland</option>
                            	<option value="IN">India</option>
                            	<option value="ID">Indonesia</option>
                            	<option value="IR">Iran</option>
                            	<option value="IQ">Iraq</option>
                            	<option value="IE">Ireland</option>
                            	<option value="IM">Isle of Man</option>
                            	<option value="IL">Israel</option>
                            	<option value="IT">Italy</option>
                            	<option value="JM">Jamaica</option>
                            	<option value="JP">Japan</option>
                            	<option value="JE">Jersey</option>
                            	<option value="JT">Johnston Island</option>
                            	<option value="JO">Jordan</option>
                            	<option value="KZ">Kazakhstan</option>
                            	<option value="KE">Kenya</option>
                            	<option value="KI">Kiribati</option>
                            	<option value="KW">Kuwait</option>
                            	<option value="KG">Kyrgyzstan</option>
                            	<option value="LA">Laos</option>
                            	<option value="LV">Latvia</option>
                            	<option value="LB">Lebanon</option>
                            	<option value="LS">Lesotho</option>
                            	<option value="LR">Liberia</option>
                            	<option value="LY">Libya</option>
                            	<option value="LI">Liechtenstein</option>
                            	<option value="LT">Lithuania</option>
                            	<option value="LU">Luxembourg</option>
                            	<option value="MO">Macau SAR China</option>
                            	<option value="MK">Macedonia</option>
                            	<option value="MG">Madagascar</option>
                            	<option value="MW">Malawi</option>
                            	<option value="MY">Malaysia</option>
                            	<option value="MV">Maldives</option>
                            	<option value="ML">Mali</option>
                            	<option value="MT">Malta</option>
                            	<option value="MH">Marshall Islands</option>
                            	<option value="MQ">Martinique</option>
                            	<option value="MR">Mauritania</option>
                            	<option value="MU">Mauritius</option>
                            	<option value="YT">Mayotte</option>
                            	<option value="FX">Metropolitan France</option>
                            	<option value="MX">Mexico</option>
                            	<option value="FM">Micronesia</option>
                            	<option value="MI">Midway Islands</option>
                            	<option value="MD">Moldova</option>
                            	<option value="MC">Monaco</option>
                            	<option value="MN">Mongolia</option>
                            	<option value="ME">Montenegro</option>
                            	<option value="MS">Montserrat</option>
                            	<option value="MA">Morocco</option>
                            	<option value="MZ">Mozambique</option>
                            	<option value="MM">Myanmar [Burma]</option>
                            	<option value="NA">Namibia</option>
                            	<option value="NR">Nauru</option>
                            	<option value="NP">Nepal</option>
                            	<option value="NL">Netherlands</option>
                            	<option value="AN">Netherlands Antilles</option>
                            	<option value="NT">Neutral Zone</option>
                            	<option value="NC">New Caledonia</option>
                            	<option value="NZ">New Zealand</option>
                            	<option value="NI">Nicaragua</option>
                            	<option value="NE">Niger</option>
                            	<option value="NG">Nigeria</option>
                            	<option value="NU">Niue</option>
                            	<option value="NF">Norfolk Island</option>
                            	<option value="KP">North Korea</option>
                            	<option value="VD">North Vietnam</option>
                            	<option value="MP">Northern Mariana Islands</option>
                            	<option value="NO">Norway</option>
                            	<option value="OM">Oman</option>
                            	<option value="PC">Pacific Islands Trust Territory</option>
                            	<option value="PK">Pakistan</option>
                            	<option value="PW">Palau</option>
                            	<option value="PS">Palestinian Territories</option>
                            	<option value="PA">Panama</option>
                            	<option value="PZ">Panama Canal Zone</option>
                            	<option value="PG">Papua New Guinea</option>
                            	<option value="PY">Paraguay</option>
                            	<option value="YD">People's Democratic Republic of Yemen</option>
                            	<option value="PE">Peru</option>
                            	<option value="PH">Philippines</option>
                            	<option value="PN">Pitcairn Islands</option>
                            	<option value="PL">Poland</option>
                            	<option value="PT">Portugal</option>
                            	<option value="PR">Puerto Rico</option>
                            	<option value="QA">Qatar</option>
                            	<option value="RO">Romania</option>
                            	<option value="RU">Russia</option>
                            	<option value="RW">Rwanda</option>
                            	<option value="RE">Réunion</option>
                            	<option value="BL">Saint Barthélemy</option>
                            	<option value="SH">Saint Helena</option>
                            	<option value="KN">Saint Kitts and Nevis</option>
                            	<option value="LC">Saint Lucia</option>
                            	<option value="MF">Saint Martin</option>
                            	<option value="PM">Saint Pierre and Miquelon</option>
                            	<option value="VC">Saint Vincent and the Grenadines</option>
                            	<option value="WS">Samoa</option>
                            	<option value="SM">San Marino</option>
                            	<option value="SA">Saudi Arabia</option>
                            	<option value="SN">Senegal</option>
                            	<option value="RS">Serbia</option>
                            	<option value="CS">Serbia and Montenegro</option>
                            	<option value="SC">Seychelles</option>
                            	<option value="SL">Sierra Leone</option>
                            	<option value="SG">Singapore</option>
                            	<option value="SK">Slovakia</option>
                            	<option value="SI">Slovenia</option>
                            	<option value="SB">Solomon Islands</option>
                            	<option value="SO">Somalia</option>
                            	<option value="ZA">South Africa</option>
                            	<option value="GS">South Georgia and the South Sandwich Islands</option>
                            	<option value="KR">South Korea</option>
                            	<option value="ES">Spain</option>
                            	<option value="LK">Sri Lanka</option>
                            	<option value="SD">Sudan</option>
                            	<option value="SR">Suriname</option>
                            	<option value="SJ">Svalbard and Jan Mayen</option>
                            	<option value="SZ">Swaziland</option>
                            	<option value="SE">Sweden</option>
                            	<option value="CH">Switzerland</option>
                            	<option value="SY">Syria</option>
                            	<option value="ST">São Tomé and Príncipe</option>
                            	<option value="TW">Taiwan</option>
                            	<option value="TJ">Tajikistan</option>
                            	<option value="TZ">Tanzania</option>
                            	<option value="TH">Thailand</option>
                            	<option value="TL">Timor-Leste</option>
                            	<option value="TG">Togo</option>
                            	<option value="TK">Tokelau</option>
                            	<option value="TO">Tonga</option>
                            	<option value="TT">Trinidad and Tobago</option>
                            	<option value="TN">Tunisia</option>
                            	<option value="TR">Turkey</option>
                            	<option value="TM">Turkmenistan</option>
                            	<option value="TC">Turks and Caicos Islands</option>
                            	<option value="TV">Tuvalu</option>
                            	<option value="UM">U.S. Minor Outlying Islands</option>
                            	<option value="PU">U.S. Miscellaneous Pacific Islands</option>
                            	<option value="VI">U.S. Virgin Islands</option>
                            	<option value="UG">Uganda</option>
                            	<option value="UA">Ukraine</option>
                            	<option value="SU">Union of Soviet Socialist Republics</option>
                            	<option value="AE">United Arab Emirates</option>
                            	<option value="GB">United Kingdom</option>
                            	<option value="US">United States</option>
                            	<option value="ZZ">Unknown or Invalid Region</option>
                            	<option value="UY">Uruguay</option>
                            	<option value="UZ">Uzbekistan</option>
                            	<option value="VU">Vanuatu</option>
                            	<option value="VA">Vatican City</option>
                            	<option value="VE">Venezuela</option>
                            	<option value="VN">Vietnam</option>
                            	<option value="WK">Wake Island</option>
                            	<option value="WF">Wallis and Futuna</option>
                            	<option value="EH">Western Sahara</option>
                            	<option value="YE">Yemen</option>
                            	<option value="ZM">Zambia</option>
                            	<option value="ZW">Zimbabwe</option>
                            	<option value="AX">Åland Islands</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="d-block">City</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="Save" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection