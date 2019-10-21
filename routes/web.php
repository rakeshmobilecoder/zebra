<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('/');


Route::get('/businessreg', function () {
    return view('business_signup');
})->name('business_signup');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/personalreg', function () {
    return view('personal_signup');
})->name('personal_signup');

Route::get('/helpcenter', function () {
    return view('help');
})->name('helpcenter');

Route::post('login', 'LoginController@login')->name('login');

Route::group(['middleware' => 'checkauth'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashborad');
});

Route::get('/resetpassword/{id}', 'API\V1\LoginController@resetLink')->name('resetlink');
Route::post('/resetpassword', 'API\V1\LoginController@resetPassword')->name('resetPassword');



