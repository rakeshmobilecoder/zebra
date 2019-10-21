@extends('layouts.default_template')
@section('content')

<!-- page start here -->
<section class="login_section pt-5 pb-5">

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6">
				<div class="col_selector">
					<h1 class="fz60 text-uppercase text-center mb-4">Register User</h1>					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid px-sm-4">
	<div id="msform">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="progress_main text-center text-white">
				<!-- Progress Counting -->
				<p class="fz24 mb-0"><span class="step">1</span> / 6</p>
				<!-- ./ Progress Counting -->
				<!-- Progress Process -->
				<ul id="progressbar">
                  <li class="active"></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>                  
                  <li></li>
                  <li></li>
                </ul>
				<!-- ./ Progress Process -->					
			</div>        
        </div>
    </div>

                <!-- Form step one -->
        <fieldset>
        	<form id="reg_form_step1" name="reg_form_step1" method="POST">
        		<input type="hidden" name="step" value="1"/>
        		<input type="hidden" name="_token" value="csrf_token()"/>
			<div class="row justify-content-center">
        		<div class="col-7 mb-4">
        			<h3 class="fz24 text-center text-white">Register for Personal</h3>
					<h4 class="fz20 text-center text-white">Registration Form</h4>
        		</div>
    		</div>
        	<div class="row">
				<div class="col-md-12">
					<div class="form_heading">
						<h3 class="fz22 text-white pb-2">Document ID</h3>
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					    <label for="id_type">ID Type</label>
			            <select class="form-control select bg-transparent rounded-0 input_border" id="id_type" name="id_type">
							<option>Driving Licence</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="id_number">ID Number</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="id_number" placeholder="20130003768" name="id_number">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="date_of_issue">Date of Issue</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border datepicker_input" id="date_of_issue" placeholder="25-09-2014" name="date_of_issue">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="expired_date">Expired Date</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border datepicker_input" id="expired_date" placeholder="25-09-2032" name="expried_date">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="place_of_issue">Place of Issue</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="place_of_issue" placeholder="Delhi" name="place_of_issue">
					  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form_heading mt-3">
						<h3 class="fz22 text-white pb-2">Personal Information</h3>
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="first_name">First Name</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="first_name" placeholder="Jhon" name="first_name">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="middle_name">Middle Name</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="middle_name" placeholder="Andrew" name="middle_name">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="family_name">Family Name</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="family_name" placeholder="Brown" name="family_name">
					  </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					    <label for="gender">Gender</label>
			            <select class="form-control select bg-transparent rounded-0 input_border" id="gender" name="gender">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Others">Others</option>							
						</select>
					</div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="place_of_birth">Place of Birth</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="place_of_birth" placeholder="Nodia" name="place_of_birth">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="date_of_birth">Date of Birth</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border datepicker_input" id="date_of_birth" placeholder="25-09-2014">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="Fiscal_Code">Fiscal Code</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="Fiscal_Code" placeholder="FDSFFSDF5558" name="fiscal_code">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="nation">Nation</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="nation" placeholder="India" name="nation">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control bg-transparent rounded-0 input_border" id="email" placeholder="jhon@gmail.com" name="email">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="phone_number">Phone Number</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="phone_number" placeholder="+91 9999000011" name="phone_number">
					  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="fixed_phone">Fixed Phone</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="fixed_phone" placeholder="+1 123-456-789">
				  	</div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="address">Address</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="address" placeholder="Sec-16 Noida, (UP) INDIA" name="fixed_phone">
				  	</div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="city">City</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="city" placeholder="Nodia">
				  	</div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="zip_code">Postal Zip Code</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="zip_code" placeholder="201308"name="city">
				  	</div>
				</div>				
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="Province">Province</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="Province" placeholder="Gautam Budh Nagar" name="province">
				  	</div>
				</div>
				<div class="col-md-4">					
					<div class="form-group">
					    <label for="Municipality">Municipality</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="Municipality" placeholder="Enter Municipality" name="municipality">
				  	</div>
				</div>
				<div class="col-md-8">					
					<div class="form-group">
					    <label for="code_sdi">Codice SDI/Email PEC</label>
					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="code_sdi" placeholder="example.italian@gmail.com" name="codeice_email">
				  	</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form_heading mt-3">
						<h3 class="fz22 text-white pb-2">Password</h3>
					</div>
				</div>			
			</div>
			<div class="row login_form">
				<div class="col-md-4">					
					<div class="form-group fz18 mb-4 position-relative">
	                    <label for="your_password">Your Password</label>
	                    <input type="password" class="form-control bg-transparent rounded-0 p-3 pr-5 input_border" id="your_password" placeholder="Enter Your Password" name="password">
	                    <i class="fa fa-eye toggle-password" toggle="#your_password" aria-hidden="true"></i>
	                  </div>
				</div>
				<div class="col-md-4">					
					<div class="form-group fz18 mb-4 position-relative">
	                    <label for="confirm_password">Confirm Password</label>
	                    <input type="password" class="form-control bg-transparent rounded-0 p-3 pr-5 input_border" id="confirm_password" placeholder="Enter Your Password" name="cpassword">
	                    <i class="fa fa-eye toggle-password" toggle="#confirm_password"aria-hidden="true"></i>
	                  </div>
				</div>
			</div>
            <div class="row my-5 justify-content-center text-center">
            	<button class="btn text-center fz18 text-uppercase mr-sm-4 mb-4 mb-sm-0 cancel_btn">Cancel</button>
	            <input type="submit" name="next" 
	            class="next action-button btn text-center fz18 text-uppercase login_btn save_and_proceed" value="Save & Proceed" />
	        </div>
	        </form>
        </fieldset>
    
         <!-- Form step two -->
        <fieldset>
        	<form id="reg_form_step2" name="reg_form_step2">
        		<input type="hidden" name="step" value="2"/>
        	<div class="row justify-content-center">
        		<div class="col-7 mb-4">
        			<h3 class="fz24 text-center text-white">Register for Personal</h3>
					<h4 class="fz20 text-center text-white">Customer Photograph</h4>
        		</div>
    		</div>
    		<div class="row justify-content-center">
				<div class="col-md-7">
					<div class="cust_photograph">
						<div class="row">
							<div class="col-sm-4">
								<div class="cust_photograph_photo mb-4 mb-sm-0">
									<img src="images/person.png" class="img-fluid w-100" alt="" id="Profile4" width="50%" height="50%">
								</div>
							</div>
							<div class="col-sm-8">
								<div class="cust_photograph--field">
									<h3 class="fz20">Upload your Photo</h3>
									<div class="d-flex mt-4 mb-3">
										<label for="photo--upload" class="btn browse_btn fz20">BROWSE</label>										
										<button class="delete_photo fz20">Delete Photo</button>
									</div>									
									<input type="file" name="picture" id="photo--upload" onchange="readURL(this,'Profile4')" class="d-none">
									<span class="file_name">john-photo.jpg</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
                
			<div class="row my-5 justify-content-center text-center">
				<input type="button" name="previous" class="previous action-button btn text-center fz18 text-uppercase mr-sm-4 mb-4 mb-sm-0 cancel_btn" value="Back" />
				<input type="button" name="next" class="next action-button btn text-center fz18 text-uppercase login_btn" value="Save & Proceed" />
			</div>
        </form>                
        </fieldset>
    
        <!-- Form step three -->
        <fieldset>
        	<form id="reg_form_step3" name="reg_form_step3" method="POST">
        		<input type="hidden" name="step" value="3"/>
        	<div class="row justify-content-center">
        		<div class="col-7 mb-4">
        			<h3 class="fz24 text-center text-white">Register for Personal</h3>
					<h4 class="fz20 text-center text-white">Customer Photograph</h4>
        		</div>
    		</div>

    		<!-- Forms Field -->
    		<div class="row justify-content-center">
				<div class="col-md-4">
					<div class="cust_photograph mb-4 mb-sm-0">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="fz20">Front ID Photo</h3>
								<div class="cust_photograph_photo mb-3">
									<img src="images/frontId.png" class="img-fluid w-100" alt="" id="Profile4" width="50%" height="50%">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="cust_photograph--field">
									<span class="file_name">Front-ID.jpg</span>
									<div class="d-flex mt-4 mb-3">
										<label for="photo--upload" class="btn browse_btn fz20">BROWSE</label>										
										<button class="delete_photo fz20">Delete Photo</button>
									</div>									
									<input type="file" name="id_picture_front" id="photo--upload" onchange="readURL(this,'Profile4')" class="d-none">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="cust_photograph">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="fz20">Back ID Photo</h3>
								<div class="cust_photograph_photo mb-3">
									<img src="images/backId.png" class="img-fluid w-100" alt="" id="Profile5" width="50%" height="50%">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="cust_photograph--field">
									<span class="file_name">Back-ID.jpg</span>
									<div class="d-flex mt-4 mb-3">
										<label for="photo--upload5" class="btn browse_btn fz20">BROWSE</label>										
										<button class="delete_photo fz20">Delete Photo</button>
									</div>									
									<input type="file" name="id_picture_back" id="photo--upload5" onchange="readURL(this,'Profile5')" class="d-none">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ./ Forms Filed -->

    		<div class="row my-5 justify-content-center text-center">
				<input type="button" name="previous" class="previous action-button btn text-center fz18 text-uppercase mr-sm-4 mb-4 mb-sm-0 cancel_btn" value="Back" />
				<input type="button" name="next" class="next action-button btn text-center fz18 text-uppercase login_btn" value="Save & Proceed" />
			</div>
			</form>            
        </fieldset>
   
    <!-- Form step four -->
        <fieldset>
        	<form id="reg_form_step4" name="reg_form_step4" method="POST">
        		<input type="hidden" name="step" value="4"/>
        	<div class="row justify-content-center">
        		<div class="col-7 mb-4">
        			<h3 class="fz24 text-center text-white">Register for Personal</h3>
					<h4 class="fz20 text-center text-white">Customer Signature</h4>
        		</div>
    		</div>
    		<!-- Forms Filed -->
    		<div class="row">
    			<div class="col-sm-12">
    				<div class="forms_description border border-secondary p-3 mb-4 mb-sm-0">
    					<h3 class="fz20">Authorized Person Data</h3>
    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
						<div class="text-center mt-5 mb-4">
							<div class="agreed">
								<input type="checkbox" class="d-none" id="agreed_check" value="signature_customer">
							  <label class="login_btn agree_label" for="agreed_check">Agreed</label>
							</div>
	    					<!-- <button class="btn login_btn fz20">Agreed</button> -->
	    				</div>
    				</div>
    			</div>
    		</div>
    		<div class="row justify-content-center">
				<div class="col-md-7 signature_customer">
					<div class="customer_signature mt-4">
					<h3 class="fz22 border-bottom border-secondary pb-3 text-center">Customer signature</h3>
						<div class="cust_photograph border-0 px-0">
							<div class="row">
								<div class="col-sm-4">
									<div class="cust_photograph_photo mb-4 mb-sm-0">
										<img src="images/signature.png" class="img-fluid w-100" alt="" id="Profile8" width="50%" height="50%">
									</div>
								</div>
								<div class="col-sm-8">
									<div class="cust_photograph--field">
										<h3 class="fz20">Upload your photo signature</h3>
										<div class="d-flex mt-4 mb-3">
											<label for="photo--upload-8" class="btn browse_btn fz20">BROWSE</label>										
											<button class="delete_photo fz20">Delete Photo</button>
										</div>									
										<input type="file" name="signature_picture" id="photo--upload-8" onchange="readURL(this,'Profile8')" class="d-none">
										<span class="file_name">Signature-Photo.jpg</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    			
    		
    		<!-- ./ Forms Filed -->
    		<div class="row my-5 justify-content-center text-center">
				<input type="button" name="previous" class="previous action-button btn text-center fz18 text-uppercase mr-sm-4 mb-4 mb-sm-0 cancel_btn" value="Back" />
				<input type="button" name="next" class="next action-button btn text-center fz18 text-uppercase login_btn" value="Save & Proceed" />
			</div> 
          </form>
		</fieldset>
	
	 <!-- Form step five -->
		<fieldset>
			<form id="reg_form_step5" name="reg_form_step5" method="POST">
				<input type="hidden" name="step" value="5"/>
			<div class="row justify-content-center">
        		<div class="col-7 mb-4">
        			<h3 class="fz24 text-center text-white">Register for Personal</h3>
					<h4 class="fz20 text-center text-white">Customer Signature</h4>
        		</div>
    		</div>
			<!-- ./ Forms Filed -->
			<div class="row">
				<div class="col-sm-6">
					<div class="card text-white bg-transparent border-secondary rounded-0 mb-4 mb-sm-0">
					  <div class="card-header border-secondary">
					    Device Details
					  </div>
					  <ul class="list-group list-group-flush  rounded-0 border-secondary">
					    <li class="list-group-item bg-transparent border-secondary">
					    	<span class="card-link">1.</span>
					    	<a href="#" class="card-link">123ABC</a>    <button class="card-link text-danger float-right bg-transparent border-0 font-weight-bold">Delete</button>
					    </li>
					    <li class="list-group-item bg-transparent border-secondary">
					    	<span class="card-link">2.</span>
					    	<a href="#" class="card-link">123ABC</a>    <button class="card-link text-danger float-right bg-transparent border-0 font-weight-bold">Delete</button>
					    </li>
					    <li class="list-group-item bg-transparent border-secondary">
					    	<span class="card-link">3.</span>
					    	<a href="#" class="card-link">123ABC</a>    <button class="card-link text-danger float-right bg-transparent border-0 font-weight-bold">Delete</button>
					    </li>
					    <li class="list-group-item bg-transparent border-secondary">
					    	<span class="card-link">4.</span>
					    	<a href="#" class="card-link">123ABC</a>    <button class="card-link text-danger float-right bg-transparent border-0 font-weight-bold">Delete</button>
					    </li>
					    <li class="list-group-item bg-transparent border-secondary">
					    	<span class="card-link">5.</span>
					    	<a href="#" class="card-link">123ABC</a>    <button class="card-link text-danger float-right bg-transparent border-0 font-weight-bold">Delete</button>
					    </li>
					  </ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card text-white bg-transparent border-secondary rounded-0">
					  <div class="card-header border-secondary">
					    Add Device Details
					  </div>
					  <div class="card-body">
					  	<p>Please enter the details of your Device</p>
					  	<div class="form-group">
  						    <label for="device_details">Your Device Details</label>
    					    <input type="text" class="form-control bg-transparent rounded-0 input_border" id="device_details" placeholder="345689NBCD" name="device_name">
    					    <small class="text-danger">Your device details is wrong. Please check</small>
					  	</div>
					  	<button class="btn login_btn">Add</button>
					  </div>
					</div>
				</div>
			</div>
			<!-- ./ Forms Filed -->    		<div class="row my-5 justify-content-center text-center">
				<input type="button" name="previous" class="previous action-button btn text-center fz18 text-uppercase mr-sm-4 mb-4 mb-sm-0 cancel_btn" value="Back" />
				<input type="button" name="next" class="next action-button btn text-center fz18 text-uppercase login_btn" value="Save & Proceed" />
			</div>
			</form> 
		</fieldset>
	<!-- Form step Six -->
        <fieldset>
        	<form id="reg_form_step6" name="reg_form_step6" method="POST">
        	<input type="hidden" name="step" value="6"/>
            <div class="row justify-content-center">
            	<!-- Step Six Heading -->
        		<div class="col-7 mb-4">
        			<h3 class="fz24 text-center text-white">Register for Business</h3>
					<h4 class="fz20 text-center text-white">Upload Data</h4>
        		</div>
        		<!-- Step Six Heading -->
    		</div>
    		<!-- Forms Filed -->
            <div class="row">
    			<!-- Profile Picture -->
    			<div class="col-sm-3">
    				<div class="card bg-transparent rounded-0 border-secondary mb-4 mb-sm-0">
					  <div class="card-header border-secondary">
					    <h3 class="fz22">Profile Picture</h3>
					  </div>
					  <div class="card-body text-center pb-4">
					    <img src="images/person.png" class="rounded-circle mx-auto d-block mb-3" alt="..." width="97" height="97">
					    <p class="mt-4">User-Photo.jpg</p>
					  </div>
					</div>
    			</div>
    			<!-- Profile Picture -->

    			<div class="col-sm-9">
    				<div class="row">
    					<div class="col-sm-6">
    						<div class="card bg-transparent rounded-0 border-secondary mb-4 mb-sm-0">
							  <div class="card-header border-secondary">
							    <h3 class="fz22">Attachments ID</h3>
							  </div>
							  <div class="card-body py-3 p-2">
							    <div class="row">
							    	<!-- Front ID Photo -->
							    	<div class="col-sm-6 text-center">
							    		<div class="attachments_pic">
							    			<img src="images/id_front.png" class="img-fluid w-100">
						    			</div>
							    		<p class="mt-2">Front ID Photo</p>
							    	</div>
							    	<!-- ./ Front ID Photo -->
							    	<!-- Back ID Photo -->
							    	<div class="col-sm-6 text-center">
							    		<div class="attachments_pic">
								    		<img src="images/id_back.png" class="img-fluid w-100">
								    	</div>
							    		<p class="mt-2">Back ID Photo</p>
							    	</div>
							    	<!-- ./ Back ID Photo -->
							    </div>
							  </div>
							</div>
    					</div>
    					<div class="col-sm-6">
    						<div class="card bg-transparent rounded-0 border-secondary mb-4 mb-sm-0">
							  <div class="card-header border-secondary">
							    <h3 class="fz22">Document Upload <small class="fz12">(You have any document file for upload)</small></h3>
							  </div>
							  <div class="card-body">
							    <div class="row">
							    	<div class="col-sm-6 text-center">
							    		<div class="attachments_pic">
								    		<img src="images/document1.png" class="img-fluid w-100">
								    	</div>
							    		<p class="mb-0">any-document.png</p>
							    		<button class="btn bg-transparent text-danger border-0 p-0">Delete</button>
							    	</div>
							    	<div class="col-sm-6 text-center">
							    		<div class="signature_upload attachments_pic position-relative">
								    		<img src="images/upload_img.png" class="img-fluid w-100">
								    		<label for="upload_doc">Upload Doucment</label>
								    		<input type="file" id="upload_doc" class="d-none" name="upload_doc">
								    	</div>
							    		<p>Upload</p>
							    	</div>
							    </div>
							  </div>
							</div>
    					</div>
    				</div>
    			</div>

    			<!-- Authorized Person Data -->
    			<div class="col-sm-6">
    				<div class="card text-white bg-transparent border-secondary rounded-0 mt-4">
						  <div class="card-header border-secondary font-weight-bold">
						    Authorized Person Data
						  </div>
						  <div class="card-body p-0">
		    				<ul class="list-group list-group-flush bg-transparent all_details border-top">
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Name</span> - John</li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Middle Name</span>- Andew</li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Family Name</span>- Brown</li>
							</ul>
						</div>
					</div>
    			</div>
    			<!-- ./ Authorized Person Data -->
    			<!-- Device Details -->
    			<div class="col-sm-6">
    				<div class="card text-white bg-transparent border-secondary rounded-0 mt-4">
						  <div class="card-header border-secondary font-weight-bold">
						    Device Details
						  </div>
						  <div class="card-body p-0">
		    				<ul class="list-group list-group-flush bg-transparent all_details border-top">
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Device1</span> - ABC123</li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Device2</span>- DEF253</li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Device3</span>- DFE888</li>
							</ul>
						</div>
					</div>
    			</div>
    			<!-- ./ Device Details -->
    			<!-- Company Data -->
    			<div class="col-sm-6">
    				<div class="card text-white bg-transparent border-secondary rounded-0 mt-4">
						  <div class="card-header border-secondary font-weight-bold">
						    Company Data
						  </div>
						  <div class="card-body p-0">
		    				<ul class="list-group list-group-flush bg-transparent all_details border-top">
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Address</span> - Sec-16 Noida, (UP), INDIA</li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Postal Zip Code</span> - 201308</li>
							  <li class="list-group-item bg-transparent d-flex"><span class="col-5">Province</span> - Gautam Budh Nagar</li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Municipality</span> - </li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">City</span> - Nodia</li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Phone Number</span> - +1 987-654-321</li>
							  <li class="list-group-item bg-transparent d-flex border-secondary border-bottom"><span class="col-5">Fixed Phone</span> - 011 123-456-78</li>
							  
							</ul>
						</div>
					</div>
    			</div>
    			<!-- ./ Company Data -->
    		</div>
			<!-- ./ Forms Filed -->
			<div class="row my-5 justify-content-center text-center">
	            <input type="button" name="previous" class="previous action-button btn text-center fz18 text-uppercase mr-sm-4 mb-4 mb-sm-0 cancel_btn" value="Back" />
                <input type="submit" name="submit" id="submit" class="submit action-button btn text-center fz18 text-uppercase login_btn" value="Save on Device" />
            </div>
        </div>
        </form>
          </fieldset>
      </div>
	</div>
</section>

<!-- Modal -->
   <div class="modal fade-scale" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center text-dark">
                    <div class="modal-header">
                            <h5 class="modal-title text-center w-100 pl-5 mx-auto">Success!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body p-5">
                    <div class="container-fluid">
                        <p class="text-center mb-4">Your form has been successfully
Saved on the Device.</p>
<button type="button" class="btn btn-primary login_btn btn-lg" id="btn-save">OK</button>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection