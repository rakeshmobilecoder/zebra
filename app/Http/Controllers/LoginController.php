<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\UserDetails;
use App\EmailTemplate;
use Mail;
use Crypt;
use Hash;
use Redirect;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	//****** LOGIN FUNCTIONALITY START HERE*********************
    public function login(Request $request){
    	//this is testing
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password'=> 'required'
        ]);

        /*$validator->after(function ($validator) use($request->email) {
             $existUser = User::where('email','=',$request->email)->first();
            if(count($existUser) == 0) {
                $validator->errors()->add('email', 'You are not exist user.');
            }
        });*/


        if ($validator->fails()) {
        	return back()->withErrors($validator)
                ->withInput();

        }

        $credentials = $request->only('email', 'password');
        
            if (Auth::attempt($credentials)) {
            	$user = Auth::user();
		        $userData = User::where('id', $user->id)->with('userDetails')->with('Devices')->first();

            	return view('home',['userData'=>$userData]);
                
            }else{
            	return Redirect::back()->withErrors(['errors', 'Invalid credentials']);
            }
		
        
    }


	    public function logout() {
			Auth::guard('api')->logout();

			return response()->json([
				'status' => 'success',
				'message' => 'logout'
			], 200);
		}


		//***************** CHANGE PASSWORD FUNCTIONALITY STRART HERE************************************// 	
	public function changePassword(Request $request){
		$access_token = $request->input('access_token');
		$token = JWTAuth::getToken();
		$user_id = $request->input('user_id');
		if($token!= $access_token){
			 return response()->json(['error' => 'unauthorized user'], 401);
		}
			$validator = Validator::make( $request->all(), [
				'old_password' => 'required|min:6',
				'new_password' => 'required|min:6',
				'confirm_new_password' => 'required|min:6|same:new_password',
			  ],[
				'old_password.required' => "Please enter old password",
				'old_password.min' => "Password must be 6 characters",
				'new_password.required' => "Please enter new password",
				'new_password.min' => "New password must be 6 characters",
				'confirm_new_password.required' => "Please enter confirm password",
				'confirm_new_password.min' => "Confirm password must be 6 character",
				'confirm_new_password.min' => "Password and confirm password should be same",
			]);
			
			if( $validator->fails() ) {
				$validation_error = $validator->getMessageBag()->toArray();
				
				$change_password_errors = array();
				if( isset( $validation_error["old_password"] ) ){
					$change_password_errors["old_password"] = $validation_error["old_password"][0];
				}
				if( isset( $validation_error["new_password"] ) ){
					$change_password_errors["new_password"] = $validation_error["new_password"][0];
				}
				if( isset( $validation_error["confirm_new_password"] ) ){
					$change_password_errors["confirm_new_password"] = $validation_error["confirm_new_password"][0];
				}
				
				return response()->json( [ 'status' => 0, 'error' => $change_password_errors ]);
			}
			else{
				$old_password = $request->input('old_password');
				$new_password = $request->input('new_password');
				$current_user = User::find( $user_id );
				
				if( Hash::check( $old_password, $current_user->password )){
					
					if( Hash::check( $new_password, $current_user->password ) ){
						return response()->json( [ 'status' => 0, 'message' => 'Old Password is not correct' ], 400);
					}
					else{
						
						$user_data = User::find( $current_user->id );
						$user_data->password = Hash::make( $new_password );
						$user_data->save();
						
						/*$email_content = array();
						$email_content["user_name"] = ucwords( $user_data->name );
						
						$email_message = new EmailMessage();
						$email_message->singleMailSendIntegration( $user_data->email, "ChangePassword", $email_content );*/
						
						return response()->json( [ 'status' => 1, 'message' => "Password changed successfully" ], 200 );
					}
					
				}
				else{
					return response()->json( [ 'status' => 0, 'message' =>  "Old Password is not correct" ], 400);
				}
			}
		
	}
	
//************** FORGOT PASSWORD FUNCTIONALITY START HERE***************************//	
	public function forgotPassword(Request $request){
		$user_type = $request->user_type;
		$validator = Validator::make( $request->all(), [
			'email' => 'required|email|min:3|max:255',
		  ],[
			'email.required' => "Please enter your email address",
			'email.email' => "Email address is not valid",
			'email.min' => "Email address should be atleast 3 charactes",
			'email.max' => "Email address is too long",
		]);
		
		if( $validator->fails() ) {
			$validation_error = $validator->getMessageBag()->toArray();
			return response()->json( [ 'status' => 0, 'error' => $validation_error["email"][0] ]);
		}
		else{
                      
			$email_address = $request->input( 'email' );
			$user_data = User::where("email", $email_address)->where('user_type', $user_type)->first();
			
			if( $user_data && intval( $user_data->id ) > 0 ){
				
				/* $password = 'Admin@123';
				$user_data->password = Hash::make( $password );
				$user_data->save();
				
				$email_content = array();
				$email_content["user_name"] = ucwords( $user_data->name );
				$email_content["new_password"] = $password;
				$email_message = new EmailTemplate();
				
				$email_message->singleMailSendIntegration( $user_data->email, "ForgotPassword", $email_content );  */
				
				$user = User::where("email", $email_address)->where('user_type', $user_type)->first();
				      $id = Crypt::encrypt($user->id);
                      $mail = Mail::send('email_templates.newpass', ['link' => "http://spicaworks.com.md-94.webhostbox.net/zebra/resetpassword/".$id, 'message' => ""], function ($message) use ($user)
                         {
                            $message->from('info@spicaworks.com.md-94.webhostbox.net', 'zebraCoonect');
                            $message->to($email_address, $user_data->name)->subject('Reset Password');
							
                        });
				
				return response()->json( [ 'status' => 1, 'success' => "Reset password link send successfully." ]);
			}
			else{
				return response()->json( [ 'status' => 0, 'error' => "Email address doesn't match" ]);
			} 
		}
	}
	
	public function updateUser(Request $request){

		$access_token =  $request->access_token;
		$user_id      =  $request->user_id;
		$token = JWTAuth::getToken();
		
		
		
		    if($token!= $access_token){
				 return response()->json(['error' => 'unauthorized user'], 401);
			}
			
		
		
						$first_name     = $request->first_name;
						$middle_name    = $request->middle_name;
						$family_name    = $request->family_name;
						$gender         = $request->gender;
						$dob            = $request->date_of_birth;
						$phone          = $request->phone;
						//$email          = $request->email;
						$company        = $request->company;
						$address        = $request->address;
						$city           = $request->city;
						$zipcode        = $request->zipcode;
						$province       = $request->province;
						$comune         = $request->comune;
						
						
						$v = Validator::make($request->all(), [
							'first_name'     => 'required',
							'middle_name'    => 'required',
							'family_name'    => 'required',
							'gender'         => 'required',
							'date_of_birth'  => 'required',
							'phone'          => 'required|digits:10',
							//'email'          => 'required|email|unique:users',
							'company'        => 'required',
							'address'        => 'required',
							'city'           => 'required',
							'province'       => 'required',
							'zipcode'        => 'required',
							'comune'         => 'comune',
							 ],
						 [
							'first_name.required'     => 'Please enter your first name',
							'middle_name.required'    => 'Please enter your middle name',
							'family_name.required'    => 'Please enter your family name',
							'gender.required'         => 'Please select your gender',
							'date_of_birth.required'  => 'Please select date of birth',
							'phone.required'          => 'Please enter your phone number',
							///'email.required'          => 'Please enter your email address',
							'company.required'        => 'Enter your company name',
							'address.required'        => 'Please fill your address',
							'city.required'           => 'Please enter your city',
							'province.required'       => 'Please enter your province',
							'zipcode.required'        => 'Please enter your zip code',
							'comune'         		  => 'Please enter your comune',
						]);
				  
						if ($v->fails())
						{
							return response()->json( [ 'status' => 0, 'errors' =>$v->errors()  ]);
							
						}
						/* $user = User::where('id', $user_id)->first();
						$user->email = $email;
						$user->save(); */
						
						
						$user_details = UserDetails::where('user_id', $user_id)->first();
						$user_details->first_name     = $first_name;
						$user_details->middle_name    = $middle_name;
						$user_details->family_name    = $family_name;
						$user_details->gender         = $gender;
						$user_details->date_of_birth  = $dob;
						$user_details->phone_number   = $phone;
						$user_details->address        = $address;
						$user_details->city    		  = $city;
						$user_details->postal_zip_code= $zipcode;
						$user_details->province    = $province;
						
						
						
						 $userPicture = $request->file('picture');
							if($userPicture!=null){
								$destinationPath = 'images/UserProfile';
								$userPicture->move($destinationPath,$userPicture->getClientOriginalName());
								
								$user_details->picture = $destinationPath.$userPicture->getClientOriginalName();
							}
                        $user_details->save();
						return response()->json( [ 'status' => 1, 'success' => "User updated successfully." ]);
            
			
	}
	
	
	
public function resetLink($id){
		$user_id = Crypt::decrypt($id);
	    return view('resetpassword', ['user_id'=>$user_id]);
		
	}
	
	public function resetPassword(Request $request){
		 $user_id = $request->user_id;
		 $password = $request->new_password;
		
		$v= Validator::make($request->all(), [
		   'new_password'=>'required|min:6',
		   'confirm_password'=>'required|same:new_password',
		   ],
		   [
		   'new_password.required'=>'Please Enter new password',
		   'new_password.min'=>'Password should be atleast 6 character.',
		   'confirm_password.required'=>'Please Enter confirm  password',
		   'confirm_password.same'=>'Password and confirm password should be same.',
		   ]);
		   
		   if($v->fails()){
			 return redirect()->back()->withErrors($v->errors())->withInput();  
		   }
		   
		  $user = User::where('id', $user_id)->first();
		    if($user && intval( $user->id ) > 0){
			  $user->password = bcrypt($password);
			  $user->save();
			  return redirect()->back()->with('message', 'Password reset successfully.');
		    }
		  
	}
}
