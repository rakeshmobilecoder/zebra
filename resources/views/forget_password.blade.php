@extends('layouts.default_template')
@section('content')
<!-- Forget Password -->
<section class="login_section pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-7">
              <div class="col_selector">
                <h1 class="fz50 text-uppercase text-center mb-5">Forgot Password</h1>
                <p class="fz20 text-center">Select which contact details should we use to reset your password.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-sm-6">
        		<div class="col_selector">
        			<form class="login_form forget_password_form">
        				<div class="d-flex justify-content-center mb-4">
	        				<div class="custom-control custom-radio mr-2">
	        				  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="passwordOption" value="by_phone" >
	        				  <label class="custom-control-label" for="defaultGroupExample1"><strong>By Phone</strong></label>
	        				</div>

	        				<!-- Group of default radios - option 2 -->
	        				<div class="custom-control custom-radio ml-2">
	        				  <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="passwordOption" value="by_email">
	        				  <label class="custom-control-label" for="defaultGroupExample2"><strong>By Email</strong></label>
	        				</div>
        				</div> 
    					<!-- By Phone -->
        			    <div class="by_phone box">
			    		<div class="form-group fz18 mb-4 position-relative zeb_phone">
    	                    <label for="phone_number">Phone Number</label>
    	                    <input type="text" class="form-control bg-transparent rounded-0 p-3 pr-5 " id="phone_number" placeholder="+1 987-654-321">
    	                  </div>
                        <div class="text-center mt-5 mb-5">
                            <button type="button" class="btn text-center fz18 text-uppercase login_btn send_otp">Send OTP</button>
                        </div>
                        <div class="otp_form"> 
    	                  <div class="form-group fz18 mb-4 position-relative">
    	                    <label for="OTP_Code">OTP Code</label>
    	                    <input type="text" class="form-control bg-transparent rounded-0 p-3 pr-5" id="OTP_Code" placeholder="235481">
    	                    <!-- <i class="fa fa-check-circle" aria-hidden="true"></i> -->
    	                    <button type="button" class="bg-transparent float-right btn-sm p-0 border-0 resend_code">Resend Code</button>
    	                  </div>
    	                  <div class="form-group fz18 mb-4 position-relative">
    	                    <label for="new_password">New Password</label>
    	                    <input type="password" class="form-control bg-transparent rounded-0 p-3 pr-5" id="new_password" placeholder="">
    	                    <i class="fa fa-eye toggle-password" toggle="#new_password" aria-hidden="true"></i>

    	                  </div>
    	                  <div class="form-group fz18 mb-4 position-relative">
    	                    <label for="confirm_Password">Confirm Password</label>
    	                    <input type="password" class="form-control bg-transparent rounded-0 p-3 pr-5" id="confirm_Password" placeholder="">
    	                    <i class="fa fa-eye toggle-password" toggle="#confirm_Password" aria-hidden="true"></i>
    	                  </div>

    	                  <div class="text-center mt-5 mb-5">
    	                  	<button type="submit" class="btn text-center fz18 text-uppercase login_btn">Submit</button>
      	                  </div>
                          </div>
        			    </div>
	        			<!-- ./ By Phone -->
	        			<!-- By Email -->
        			    <div class="by_email box">
        			    	<div class="form-group fz18 mb-4 position-relative">
    	                    <label for="your_email">Your Email</label>
    	                    <input type="text" class="form-control bg-transparent rounded-0 p-3 pr-5" id="your_email" placeholder="zebra115@gmail.com">
    	                    <i class="fa fa-eye toggle-password" toggle="#your_email" aria-hidden="true"></i>
    	                  </div>
                           <div class="text-center mt-5 mb-5">
                            <button type="submit" class="btn text-center fz18 text-uppercase login_btn send_otp">Send OTP</button>
                          </div>
                          <div class="otp_form"> 
    	                  <div class="form-group fz18 mb-4 position-relative">
    	                    <label for="OTP_Code">OTP Code</label>
    	                    <input type="text" class="form-control bg-transparent rounded-0 p-3 pr-5" id="OTP_Code" placeholder="235481">
    	                    <!-- <i class="fa fa-check-circle" aria-hidden="true"></i> -->
    	                    <button type="button" class="bg-transparent float-right btn-sm p-0 border-0 resend_code">Resend Code</button>small>
    	                  </div>
    	                  <div class="form-group fz18 mb-4 position-relative">
    	                    <label for="new_password">New Password</label>
    	                    <input type="password" class="form-control bg-transparent rounded-0 p-3 pr-5" id="new_password" placeholder="">
    	                    <i class="fa fa-eye toggle-password" toggle="#new_password" aria-hidden="true"></i>

    	                  </div>
    	                  <div class="form-group fz18 mb-4 position-relative">
    	                    <label for="confirm_Password">Confirm Password</label>
    	                    <input type="password" class="form-control bg-transparent rounded-0 p-3 pr-5" id="confirm_Password" placeholder="">
    	                    <i class="fa fa-eye toggle-password" toggle="#confirm_Password" aria-hidden="true"></i>
    	                  </div>

    	                  <div class="text-center mt-5 mb-5">
    	                  	<button type="submit" class="btn text-center fz18 text-uppercase login_btn">Submit</button>
      	                  </div>
                      </div>
        			    </div>
                        <!-- By Email -->
        			</form>
        		</div>
        	</div>
        </div>
    </div>
</section>
@endsection