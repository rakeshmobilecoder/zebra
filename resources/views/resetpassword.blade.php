<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">

     <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
     
     <title>Zebra Dashboard</title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
       
</head>
<body>
<div class="wrapper_inner wrapper_inner--margin">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <h3 class="featured-heading">Reset Form</h3>
                    </div>
                </div>
            </div>
            <div class="container container_contact">
                <div class="page_content p-0">
				            @if(Session::has('message'))
								<div class="alert alert-success"> {!! Session::get('message') !!}</div>
							@endif
                        <form name="reset_from" id="reset_from" method="POST" action="{{ route('resetPassword') }}">
						        {{ csrf_field()}}
                            <div class="form-row">
							 
                                <div class="form-group col-sm-6">
                                    <label for="new_password">New Password<sup>*</sup></label>
									<input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ $user_id }}">
                                    <input type="text" name="new_password" id="new_password" class="form-control" placeholder="New Password">
									@if($errors->has('new_password'))
									    <div class="alert alert-danger">{{ $errors->first('new_password') }}</div>
									@endif    

                                </div>                                
                                
								<div class="form-group col-sm-6">
                                    <label for="enter_name">Confirm Password<sup>*</sup></label>
                                    <input type="text" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
									@if($errors->has('confirm_password'))
									    <div class="alert alert-danger">{{ $errors->first('confirm_password') }}</div>
									@endif

                                </div>                               
                                <div class="form-group col-md-12 my-5 justify-content-center">
                                    <button class="btn-login" type="submit">Reset</button>                                  
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

</body>
</html>
