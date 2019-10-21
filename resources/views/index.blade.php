@extends('layouts.default_template')
@section('content')
<section class="login_section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 offset-3">
              <div class="col_selector">
                <h1 class="fz50 text-uppercase text-center mb-5">Global wi-fi Login</h1>
                <form class="login_form" id="login_form" name="login_form" method="POST" action="{{ route('login') }}">
                	  {{ csrf_field() }}
                  <div class="form-group fz18 mb-4">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input id="email" name="email" type="email" class="form-control bg-transparent rounded-0 p-3 pr-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    @if($errors->has('email'))
                       <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                    @endif
                  </div>
                  <div class="form-group fz18 mb-4 position-relative">
                    <label for="exampleInputPassword1">Your Password</label>
                    <input id="password" name="password" type="password" class="form-control bg-transparent rounded-0 p-3 pr-5" id="exampleInputPassword1" placeholder="Password">
                    @if($errors->has('password'))
                       <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                    @endif
                    <i class="fa fa-eye toggle-password" toggle="#exampleInputPassword1" aria-hidden="true"></i>
                  </div>
                  <div class="form-group custom_checkbox clearfix">
                    <label class="checkbox_label float-left">Remember Me
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <a href="{{ route('forgotpassword') }}"><i class="float-right">Forgot Password?</i></a>
                  </div>
                  <div class="text-center mt-5 mb-5">
                    <button type="submit" class="btn text-center fz18 text-uppercase login_btn">Sign in</button>
                  </div>
                  <p class="fz18 mb-0 text-center base_light_color">Don’t have an Account yet? <a href="{{ route('personal_signup')}}" class="base_color d-inline-block">SIGN UP</a></p>               
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
	@endsection