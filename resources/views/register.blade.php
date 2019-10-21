@extends('layouts.default_template')
@section('content')
<!-- Register start here -->

    
      <section class="login_section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 offset-3">
              <div class="col_selector">
                <h1 class="fz50 text-uppercase text-center mb-5">Register User</h1>
                <p class="mb-4 fz18 text-center">What type of user are you? Registration is free and does not imply any commitment.</p>
                <form class="login_form">
                  <div class="form-group">
                    <div class="custom_radio">
                      <input type="radio" id="customRadio1" name="customRadio" class="d-none" checked onclick = "document.location.href='{{ route('personal_signup')}}'" value="personal">
                      <label class="example" for="customRadio1">Register as Personal</label>
                    </div>
                    <div class="custom_radio">
                      <input type="radio" id="customRadio2" name="customRadio" class="d-none" onclick = "document.location.href='{{ route('business_signup')}}'" value="business">
                      <label class="example" for="customRadio2">Register as Business</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="w-100 mb-3 text-center">Add Promotion Code <i class="fa fa-angle-down" aria-hidden="true"></i></label>
                    <input type="text" name="" id="" class="form-control bg-transparent p-3 rounded-0" placeholder="Enter Promotion Code">
                  </div>
                  <div class="text-center mt-5 mb-5">
                    <button type="submit" id="register_btn" class="btn text-center fz18 text-uppercase login_btn" >Submit</button>
                  </div>
                  <p class="fz18 mb-0 text-center base_light_color">Already have an Account? <a href="./" class="base_color d-inline-block">LOG IN</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
