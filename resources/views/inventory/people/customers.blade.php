@extends('inventory.layout') 
@section('title', 'Customers')
@section('content')
	<div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>Customers</h5>
                            <span>Add, remove or update customer list</span>
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
                                <a href="#">Customers</a>
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
                <div class="card">
                    <div class="card-header row">
                        <div class="col col-sm-2">
                            <a href="#CustomerAdd" data-toggle="modal" data-target="#CustomerAdd" class="btn btn-sm btn-primary">Add Customer </a>
                        </div>
                        <div class="col col-sm-1">
                            <div class="card-options d-inline-block">
                                
                                <div class="dropdown d-inline-block">
                                    <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">More Action</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="card-search with-adv-search dropdown">
                                <form action="">
                                    <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required="">
                                    <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                    <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Name" data-column="0">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Code" data-column="1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col2_filter" placeholder="Country" data-column="2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col3_filter" placeholder="City" data-column="3">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col4_filter" placeholder="Email" data-column="4">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-theme">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col col-sm-3">
                            <div class="card-options text-right">
                                <span class="mr-5" id="top">1 - 10 of 100</span>
                                <a href="#"><i class="ik ik-chevron-left"></i></a>
                                <a href="#"><i class="ik ik-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="advanced_table" class="table">
                            <thead>
                                <tr>
                                    <th class="nosort" width="10">
                                        <label class="custom-control custom-checkbox m-0">
                                            <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </td>
                                    <td>Tovino Thomas</td>
                                    <td>219-122-1234</td>
                                    <td>tovino@mail.com</td>
                                    <td>USA</td>
                                    <td>NewYork</td>
                                    <td>
                                        <a href="#CustomerEdit" data-toggle="modal" data-target="#CustomerEdit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                        <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </td>
                                    <td>Christopher Alex</td>
                                    <td>419-122-1734</td>
                                    <td>christpher@mail.com</td>
                                    <td>USA</td>
                                    <td>Washington DC</td>
                                    <td>
                                        <a href="#CustomerEdit" data-toggle="modal" data-target="#CustomerEdit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                        <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </td>
                                    <td>John DOe</td>
                                    <td>129-122-1734</td>
                                    <td>doe@mail.com</td>
                                    <td>USA</td>
                                    <td>New York</td>
                                    <td>
                                        <a href="#CustomerEdit" data-toggle="modal" data-target="#CustomerEdit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                        <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade edit-layout-modal pr-0 " id="CustomerAdd" role="dialog" aria-labelledby="CustomerAddLabel" aria-hidden="true">
        <div class="modal-dialog w-300" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CustomerAddLabel">Add Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="d-block">Customer Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Customer Name">
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

    <div class="modal fade edit-layout-modal pr-0 " id="CustomerEdit" role="dialog" aria-labelledby="CustomerEditLabel" aria-hidden="true">
        <div class="modal-dialog w-300" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CustomerEditLabel">Edit Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="d-block">Customer Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Customer Name" value="Christopher Alex">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone" value="219-122-1234">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email" value="christpher@mail.com">
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
                            <input type="text" name="city" class="form-control" placeholder="Enter City" value="New York">
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