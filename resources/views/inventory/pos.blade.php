<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
	<title>POS | Radmin - Laravel Admin Starter</title>
	<!-- initiate head with meta tags, css and script -->
	@include('include.head')

</head>
<body id="app" >
    <div class="wrapper">
    	<div class="pos-container p-3 pt-0">
    		
	    	<div class="row">
	    		<div class="col-sm-1 bg-white h-100vh ">
	    			
	    			<div class="pos top-menu mt-20 text-center">
		    			<a href="{{url('/inventory')}}" class="nav-link m-auto mb-10" ><i class="ik ik-arrow-left-circle"></i></a>
	    				<a href="#" class="nav-link m-auto mb-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></a>
	    				<a class="nav-link m-auto mb-10" href="#" id="notiDropdown" ><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                        <a class="nav-link m-auto mb-10" href="{{url('profile')}}"><i class="ik ik-user"></i></a>
                        <a class="nav-link m-auto mb-10" href="{{ url('logout') }}">
                            <i class="ik ik-power"></i>
                        </a>
			        </div>
	    		</div>
	    		<div class="col-sm-6 bg-white">
			        <div class="customer-area">
			        	<div class="row">
			        		<div class="col-sm-3">
	                            <div class="form-group">
	                                <select class="form-control select2" name="warehouse">
	                                	<option selected="selected" value="">Select Warehouse</option>
	                                	<option value="1">Warehouse 1</option>
	                                	<option value="2">Warehouse 2</option>
	                                </select>
	                            </div>
			        		</div>
			        		<div class="col-sm-9">
		                        <div class="form-group">
					        		<input type="text" name="product" class="form-control" placeholder="Search products">
					        	</div>
			        		</div>
			        		
			        	</div>
			        	
			        	<div class="row pos-products layout-wrap" id="layout-wrap">

			        		<!-- include product preview page -->
			        		<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid">
			        			<div class="card mb-1 pos-product-card">
			        				<div class="d-flex card-img">
			        					<img src="/img/products/headphone.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

			        					<span class="badge badge-pill badge-success position-absolute badge-top-left">$800</span>

			        				</div>
			        				<p class="p-2">

			        					<b>HeadPhone </b><br>
			        					<span class="text-small text-muted">HP1234</span><br>
			        				</p>

			        			</div>
			        		</div>
			        		<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid">
			        			<div class="card mb-1 pos-product-card">
			        				<div class="d-flex card-img">
			        					<img src="/img/products/ipone-6.jpg" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

			        					<span class="badge badge-pill badge-success position-absolute badge-top-left">$5000</span>

			        				</div>
			        				<p class="p-2">

			        					<b>Iphone 6 </b><br>
			        					<span class="text-small text-muted">IP1234</span><br>
			        				</p>

			        			</div>
			        		</div>
			        		<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid">
			        			<div class="card mb-1 pos-product-card">
			        				<div class="d-flex card-img">
			        					<img src="/img/products/bag.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

			        					<span class="badge badge-pill badge-success position-absolute badge-top-left">$500</span>

			        				</div>
			        				<p class="p-2">

			        					<b>Leather Bag </b><br>
			        					<span class="text-small text-muted">LB1234</span><br>
			        				</p>

			        			</div>
			        		</div>
			        		<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid">
			        			<div class="card mb-1 pos-product-card">
			        				<div class="d-flex card-img">
			        					<img src="/img/products/camera.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

			        					<span class="badge badge-pill badge-success position-absolute badge-top-left">$100</span>

			        				</div>
			        				<p class="p-2">

			        					<b>Camera </b><br>
			        					<span class="text-small text-muted">CM1234</span><br>
			        				</p>

			        			</div>
			        		</div>
			        		<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid">
			        			<div class="card mb-1 pos-product-card">
			        				<div class="d-flex card-img">
			        					<img src="/img/products/joystick.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

			        					<span class="badge badge-pill badge-success position-absolute badge-top-left">$5000</span>

			        				</div>
			        				<p class="p-2">

			        					<b>Joystick </b><br>
			        					<span class="text-small text-muted">JS1234</span><br>
			        				</p>

			        			</div>
			        		</div>
			        		<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid">
			        			<div class="card mb-1 pos-product-card">
			        				<div class="d-flex card-img">
			        					<img src="/img/products/jacket.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

			        					<span class="badge badge-pill badge-success position-absolute badge-top-left">$500</span>

			        				</div>
			        				<p class="p-2">

			        					<b>Jacket </b><br>
			        					<span class="text-small text-muted">JK1234</span><br>
			        				</p>

			        			</div>
			        		</div>
			        		<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid">
			        			<div class="card mb-1 pos-product-card">
			        				<div class="d-flex card-img">
			        					<img src="/img/products/watch.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

			        					<span class="badge badge-pill badge-success position-absolute badge-top-left">$10000</span>

			        				</div>
			        				<p class="p-2">

			        					<b>Smart Watch </b><br>
			        					<span class="text-small text-muted">SW1234</span><br>
			        				</p>

			        			</div>
			        		</div>
			        		<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid">
			        			<div class="card mb-1 pos-product-card">
			        				<div class="d-flex card-img">
			        					<img src="/img/products/tshirt.jpg" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

			        					<span class="badge badge-pill badge-success position-absolute badge-top-left">$5500</span>

			        				</div>
			        				<p class="p-2">

			        					<b>T-shirt </b><br>
			        					<span class="text-small text-muted">TS1234</span><br>
			        				</p>

			        			</div>
			        		</div>

			        	</div>
			        	<hr>
			        	<p>SELECT ANY PROMO CODE TO AVAIL OFFER</p>
			        	<div class="row">
			        		<div class="col-sm-3">
			        			<div class="promo-card card-redgrad">WTHRDKG <span></span></div>
			        		</div>
			        		<div class="col-sm-3">
			        			<div class="promo-card card-taxgrad">WYTHIKS <span></span></div>
			        		</div>
			        		<div class="col-sm-3">
			        			<div class="promo-card card-purbgrad">RTHUSKX <span></span></div>
			        		</div>
			        		<div class="col-sm-3">
			        			<div class="promo-card card-orggrad">ADDWAUX <span></span></div>
			        		</div>
			        		
			        	</div>
			        </div>
	    		</div>
	    		<div class="col-sm-5 bg-white h-100vh">
	    			<div class="product-selection-area">
	    				<div class="d-flex justify-content-between mb-3">
		    				<h6> <i class="ik ik-shopping-cart"></i> <b> Current Cart</b></h6>
		    				<span class="text-danger"> Clear All</span>
	    				</div>
	    				<div class="product-cart mb-3">
	    					<div class="cart-item d-flex mb-2">
	    						<div class="width-50 d-flex">
	    							<img src="/img/products/headphone.webp" alt="" class="img-fluid img-50">
	    							<div class="pl-3">
	    								<b class="d-block">HeadPhone </b>
	    								<span>$800.00</span>
	    							</div>
	    						</div>
	    						<div class="width-30 d-flex justify-content-center align-items-center">
	    							<i class="ik ik-minus-circle text-danger font-20"></i>
	    							<input type="text" class="cart-item-qty text-center" name="" value="4">
	    							<i class="ik ik-plus-circle text-success font-20"></i>
	    						</div>
	    						<div class="width-20 d-flex justify-content-end align-items-center">
	    							<b>$3200</b>
	    						</div>
	    					</div>
	    					<div class="cart-item d-flex mb-2">
	    						<div class="width-50 d-flex">
	    							<img src="/img/products/joystick.webp" alt="" class="img-fluid img-50">
	    							<div class="pl-3">
	    								<b class="d-block">Joystick </b>
	    								<span>$5000.00</span>
	    							</div>
	    						</div>
	    						<div class="width-30 d-flex justify-content-center align-items-center">
	    							<i class="ik ik-x-circle text-danger font-20"></i>
	    							<input type="text" class="cart-item-qty text-center" name="" value="1">
	    							<i class="ik ik-plus-circle text-success font-20"></i>
	    						</div>
	    						<div class="width-20 d-flex justify-content-end align-items-center">
	    							<b>$5000</b>
	    						</div>
	    					</div>
	    					<div class="cart-item d-flex mb-2">
	    						<div class="width-50 d-flex">
	    							<img src="/img/products/watch.webp" alt="" class="img-fluid img-50">
	    							<div class="pl-3">
	    								<b class="d-block">Smart Watch </b>
	    								<span>$10000.00</span>
	    							</div>
	    						</div>
	    						<div class="width-30 d-flex justify-content-center align-items-center">
	    							<i class="ik ik-x-circle text-danger font-20"></i>
	    							<input type="text" class="cart-item-qty text-center" name="" value="1">
	    							<i class="ik ik-plus-circle text-success font-20"></i>
	    						</div>
	    						<div class="width-20 d-flex justify-content-end align-items-center">
	    							<b>$10000</b>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="box-shadow p-3">
	    					<div class="d-flex justify-content-between">
	    						<span>Subtotal</span>
	    						<strong>$18200</strong>
	    					</div>
	    					<div class="d-flex justify-content-between">
	    						<span>Discount</span>
	    						<strong class="text-danger">-$500</strong>
	    					</div>
	    					<div class="d-flex justify-content-between">
	    						<span>Sales Tax</span>
	    						<strong>$2730</strong>
	    					</div>
	    					<hr>
	    					<div class="d-flex justify-content-between">
	    						<b>Total</b>
	    						<b class="font-20">$20430</b>
	    					</div>
	    				</div>
	    				<div class="box-shadow p-3 mb-3">
		                    <label class="d-block">Customer Information</label>
	    					<div class="d-flex">
	    						<div class="width-50 pr-3">
	    							<div class="form-group">
			                            <input type="text" name="name" class="form-control" placeholder="Enter Customer Name" value="Christopher Alex">
			                        </div>
			                        <div class="form-group">
			                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone" value="219-122-1234">
			                        </div>
	    							
	    						</div>
	    						<div class="width-50">
	    							<div class="form-group">
			                            <textarea type="text" name="name" class="form-control h-82px" placeholder="Enter Address" value="Christopher Alex"></textarea>
			                        </div>
	    							
	    						</div>
	    					</div>
	    				</div>
    					<div class="box-shadow p-3">
                        	<button class="btn btn-danger btn-checkout btn-pos-checkout " data-toggle="modal" data-target="#InvoiceModal">PLACE ORDER</button>
                    	</div>
	    			</div>
	    			
	    		</div>
	    	</div>
    	</div>
    </div>
    <!-- initiate modal menu section-->
	<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
	    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
	    <div class="modal-dialog modal-dialog-centered" role="document">
	        <div class="modal-content">
	            <div class="quick-search">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-4 ml-auto mr-auto">
	                            <div class="input-wrap">
	                                <input type="text" id="quick-search" class="form-control" placeholder="Search...">
	                                <i class="ik ik-search"></i>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="modal-body d-flex align-items-center">
	                <div class="container">
	                    <div class="apps-wrap">
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
	                        </div>
	                        <div class="app-item dropdown">
	                            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
	                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
	                                <a class="dropdown-item" href="#">Action</a>
	                                <a class="dropdown-item" href="#">Another action</a>
	                                <a class="dropdown-item" href="#">Something else here</a>
	                            </div>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
	                        </div>
	                        <div class="app-item">
	                            <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Add Customer Modal -->
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

    <!-- Preview Invoice Modal -->
    <div class="modal fade edit-layout-modal pr-0 " id="InvoiceModal" role="dialog" aria-labelledby="InvoiceModalLabel" aria-hidden="true">
	    <div class="modal-dialog mw-70" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="InvoiceModalLabel">Preview Invoice</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	            </div>
	            <div class="modal-body">
	                <div class="card-header"><h3 class="d-block w-100">Radmin<small class="float-right">07/10/2021</small></h3></div>
	                <div class="card-body">
	                    <div class="row invoice-info">
	                        <div class="col-sm-4 invoice-col">
	                            From
	                            <address>
	                                <strong>Radmin,</strong><br>795 Folsom Ave, Suite 546 <br>San Francisco, CA 54656 <br>Phone: (123) 123-4567<br>Email: info@radmin.com
	                            </address>
	                        </div>
	                        <div class="col-sm-4 invoice-col">
	                            To
	                            <address>
	                                <strong>John Doe</strong><br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br>Phone: (555) 123-7654<br>Email: john.doe@example.com
	                            </address>
	                        </div>
	                        <div class="col-sm-4 invoice-col">
	                            <b>Invoice #007612</b><br>
	                            <br>
	                            <b>Order ID:</b> 4F3S8J<br>
	                            <b>Payment Due:</b> 07/10/2021<br>
	                            <b>Account:</b> 968-34567
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-12 table-responsive">
	                            <table class="table table-hover">
	                                <thead>
	                                    <tr>
	                                        <th class="wp-10">SL</th>
	                                        <th class="wp-40">Product</th>
	                                        <th class="wp-20">Unit Price</th>
	                                        <th class="wp-15">Qty</th>
	                                        <th class="wp-15">Sub Total</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td>1.</td>
	                                        <td> <img src="../img/widget/p1.jpg" alt="" class="img-fluid img-20"> HeadPhone</td>
	                                        <td>$10.00</td>
	                                        <td>5</td>
	                                        <td class="text-right">$50.00</td>
	                                    </tr>
	                                    <tr>
	                                        <td>2.</td>
	                                        <td> <img src="../img/widget/p2.jpg" alt="" class="img-fluid img-20"> Iphone 6</td>
	                                        <td>$570.00</td>
	                                        <td>1</td>
	                                        <td class="text-right">$570.00</td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-6">
	                            <p class="lead">Payment Methods:</p>
	                            <img src="/img/credit/visa.png" alt="Visa">
	                            <img src="/img/credit/mastercard.png" alt="Mastercard">
	                            <img src="/img/credit/american-express.png" alt="American Express">
	                            <img src="/img/credit/paypal2.png" alt="Paypal">
	                            
	                            <div class="alert alert-secondary mt-20">
	                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	                            </div>
	                        </div>
	                        <div class="col-6">
	                            <p class="lead">07/10/2021</p>
	                            <div class="table-responsive">
	                                <table class="table">
	                                    <tbody><tr>
	                                        <th class="th-50">Subtotal:</th>
	                                        <td>$620.30</td>
	                                    </tr>
	                                    <tr>
	                                        <th>Tax (10%)</th>
	                                        <td>$62.00</td>
	                                    </tr>
	                                    <tr>
	                                        <th>Shipping:</th>
	                                        <td>$50.00</td>
	                                    </tr>
	                                    <tr>
	                                        <th>Total:</th>
	                                        <td>$732.00</td>
	                                    </tr>
	                                </tbody></table>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row no-print">
	                        <div class="col-12">
	                            <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
	                            <button type="button" class="btn btn-primary pull-right"><i class="fa fa-download"></i> Generate PDF</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- initiate scripts-->
	<script src="{{ asset('all.js') }}"></script>
	<script src="{{ asset('dist/js/theme.js') }}"></script>
</body>
</html>