<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use App\User;
use App\UserDetails;
use App\Devices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\UrlGenerator;

class RegisterController extends Controller
{
    protected $url;

    public function __construct(UrlGenerator $url){
        $this->url = $url;
    }


    public function register(Request $request){
        try {
            $allDatas=$request->all();
            // $data = $allDatas;
            // $dataList = json_decode($allDatas['form_data'],true);
            // $dataLists = json_decode(json_encode($dataList['Slide1']));            
            // $data = (array)json_decode(json_encode($dataLists->RegisterBusiness));
            // $slide5 = (array)json_decode(json_encode($dataList['Slide5']));
            $devices = $allDatas['device_name'];
           
            $validator = Validator::make($allDatas, [
                'email' => 'required|string|email|max:255|unique:users',
                // 'password'=> 'required',
                // 'first_name' => 'required',
                // 'middle_name' => 'required',
                // 'family_name' => 'required',
                // 'fiscal_code' => 'required',
                // 'nation' => 'required',
                // 'phone_number' => 'required',
                // 'fixed_phone' => 'required',
                // 'address' => 'required',
                // 'city' => 'required',
                // 'postal_zip_code' => 'required',
                // 'province' => 'required',
                // 'municipality' => 'required'                                           
            ]);

            if ($validator->fails()) {

                $errors = $validator->errors();

                $validator = $errors->all();

                for($i=0;$i<count($validator);$i++){

                    $validatorarray = $validator[$i];

                }
     
                $responseObject = [
                    'message' => $validatorarray,
                ];     
                return response()->json($responseObject,Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            $user = User::create([
                'email' => $allDatas['email'],
                'password' => bcrypt($allDatas['password']),
                'user_type' => isset($allDatas['user_type'])?$allDatas['user_type']:""
            ]);

            $user_id = $user->id;

            UserDetails::create([
                'user_id' => $user_id,
                'first_name' => isset($allDatas['first_name'])?$allDatas['first_name']:"",
                'middle_name' => isset($allDatas['middle_name'])?$allDatas['middle_name']:"",
                'family_name' => isset($allDatas['family_name'])?$allDatas['family_name']:"",
                'fiscal_code' => isset($allDatas['fiscal_code'])?$allDatas['fiscal_code']:"",
                'nation' => isset($allDatas['nation'])?$allDatas['nation']:"",
                'phone_number' => isset($allDatas['phone_number'])?$allDatas['phone_number']:"",
                'fixed_phone' => isset($allDatas['fixed_phone'])?$allDatas['fixed_phone']:"",
                'address' => isset($allDatas['address'])?$allDatas['address']:"",
                'city' => isset($allDatas['city'])?$allDatas['city']:"",
                'postal_zip_code' => isset($allDatas['postal_zip_code'])?$allDatas['postal_zip_code']:"",
                'province' => isset($allDatas['province'])?$allDatas['province']:"",
                'municipality' => isset($allDatas['municipality'])?$allDatas['municipality']:"",
                'codeice_email' => isset($allDatas['codeice_email'])?$allDatas['codeice_email']:"",
                'date_of_birth' => isset($allDatas['date_of_birth'])?$allDatas['date_of_birth']:"",
                'id_type' => isset($allDatas['id_type'])?$allDatas['id_type']:"",
                'id_number' => isset($allDatas['id_number'])?$allDatas['id_number']:"",
                'date_of_issue' => isset($allDatas['date_of_issue'])?$allDatas['date_of_issue']:"",
                'expried_date' => isset($allDatas['expried_date'])?$allDatas['expried_date']:"",
                'place_of_issue' => isset($allDatas['place_of_issue'])?$allDatas['place_of_issue']:"",
                'gender' => isset($allDatas['gender'])?$allDatas['gender']:"",
                'place_of_birth' => isset($allDatas['place_of_birth'])?$allDatas['place_of_birth']:"",
                'business_name' => isset($allDatas['business_name'])?$allDatas['business_name']:"",
                'vat_id' => isset($allDatas['vat_id'])?$allDatas['vat_id']:"",
                'document_picture_first' => isset($allDatas['document_picture_first'])?$allDatas['document_picture_first']:"",
                'document_picture_second' => isset($allDatas['document_picture_second'])?$allDatas['document_picture_second']:"",
                'signature_picture' => isset($allDatas['signature_picture'])?$allDatas['signature_picture']:"",
                'id_picture_front' => isset($allDatas['id_picture_front'])?$allDatas['id_picture_front']:"",
                'id_picture_back' => isset($allDatas['id_picture_back'])?$allDatas['id_picture_back']:"",
                'picture' => isset($allDatas['picture'])?$allDatas['picture']:""                

            ]);
            
            foreach ($devices as $key => $value) {
                Devices::create([
                    'user_id' => $user_id,
                    'device_name' => $value
                ]);
            }           

            $credentials = ['email' => $allDatas['email'],
                            'password' => $allDatas['password']
                        ];
            
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
            $request['token']= $token;
            return response()->json(['message' => 'Signup successfully.', 'data'=> $request->all()]);
        } catch (JWTException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }   
    }



    public function singleImageUpload(Request $request){
         
        try {
        	$data = "";
            $user_id = $request->user_id;
        	$id_picture_url = 'IdPicture';
	        $picture_url = 'UserProfile';
	        $document_picture_url = 'DocumentPicture';
	        $signature_picture_url = 'SegnaturePicture';
	        if($request->hasFile('picture')){
	            $picture = $request->picture;
	            $picture = $this->fileUpload($picture, $picture_url);
	            $data = "/public/images/{$picture_url}/{$picture}";
	        }
	        if($request->hasFile('document_picture_first')){
	            $document_picture_first = $request->document_picture_first;               
	            $document_picture_first = $this->fileUpload($document_picture_first, $document_picture_url);
	            $data = "/public/images/{$document_picture_url}/{$document_picture_first}";  
	        }
	        if($request->hasFile('document_picture_second')){
	            $document_picture_second = $request->document_picture_second;
	            $document_picture_second = $this->fileUpload($document_picture_second, $document_picture_url);
	            $data = "/public/images/{$document_picture_url}/{$document_picture_second}";
	        }
	        if($request->hasFile('signature_picture')){                
	            $signature_picture = $request->signature_picture;
	            $signature_picture = $this->fileUpload($signature_picture, $signature_picture_url);
	            $data = "/public/images/{$signature_picture_url}/{$signature_picture}";
	        }
	        if($request->hasFile('id_picture_front')){                
	            $id_picture_front = $request->id_picture_front;
	            $id_picture_front = $this->fileUpload($id_picture_front, $id_picture_url);
	            $data = "/public/images/{$id_picture_url}/{$id_picture_front}";
	        }
	        if($request->hasFile('id_picture_back')){
	            $id_picture_back = $request->id_picture_back;
	            $id_picture_back = $this->fileUpload($id_picture_back, $id_picture_url);
	            $data = "/public/images/{$id_picture_url}/{$id_picture_back}";
	        }
	        if($data){
                if(isset($user_id) && $user_id > 0){
                    $user_detail = userDetails::where('user_id', $user_id)->first();
                    $user_detail->picture = $data;
                    $user_detail->save();
                  return response()->json(['message'=>'Image upload successfully.', 'data' => $data], 200);    
                }
	            return response()->json(['message'=>'Image upload successfully.', 'data' => $data], 200);
	        }else{
	            return response()->json(['message'=> 'Something went wrong.'], 400);
	        }
        } catch (Exception $e) {
        	return response()->json(['error' => $e->getMessage()], 500);			
        }
    }


    public function fileUpload($image, $url){
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid().'.'.$ext;
        $destinationPath = public_path("/images/{$url}");
        $image->move($destinationPath, $filename);
        return $filename;
    }


    public function saveandProceed(Request $request){
    	print_r($request->all());

    }
}
