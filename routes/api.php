<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'V1'], function(){
    Route::post('signup', 'API\V1\RegisterController@register');
    Route::post('image_upload', 'API\V1\RegisterController@allImageUpload');
    Route::post('single_image_upload', 'API\V1\RegisterController@singleImageUpload');
    Route::post('signin', 'API\V1\LoginController@login');
	Route::get('logout', 'API\V1\LoginController@logout')->middleware('jwt.auth');
	Route::post('changePassword', 'API\V1\LoginController@changePassword')->name('changePassword');
	Route::post('updateUser', 'API\V1\LoginController@updateUser')->name('updateUser');
	Route::post('forgotPassword', 'API\V1\LoginController@forgotPassword')->name('forgotPassword');
	Route::get('/resetpassword/{id}', 'API\V1\LoginController@resetLink')->name('resetlink');
    Route::post('/resetpassword', 'API\V1\LoginController@resetPassword')->name('resetPassword');
	
	
	
    Route::group(['middleware' => ['jwt.auth']], function(){
		

    });
});











