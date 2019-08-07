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
    return view('welcome');
});

Auth::routes(['verify' => true]);
//  Homepage Route - Redirect based on user role is in controller.
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


// sms verification route

Route::get('/phone', function () {
    return view('phone');
});

// verification des numeros telephone
Route::prefix('/verify/')->group(function () {
    Route::post('start', 'Auth\PhoneVerificationController@startVerification');
    Route::post('verify', 'Auth\PhoneVerificationController@verifyCode');
});

// front-end test
Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/charts', function () {
    return view('admin.charts');
});

Route::resources([
   'user'=>'UsersManagementController'
]);

Route::get('/welcome',function (){
    return view('guest.home');
});

//Route::get('/submit',function(){
//    return view('guest.sample.submit-property');
//});

Route::get('/properties-detail',function(){
    return view('guest.sample.properties-detail');
});

Route::get('/properties-full-list',function(){
    return view('guest.sample.properties-full-list');
});
Route::get('/properties-map',function(){
    return view('guest.sample.properties-map');
});

Route::get('/guest-login',function(){
    return view('guest.auth.login');
});

Route::get('/guest-register',function(){
    return view('guest.auth.register');
});

// submit property
Route::resources([
    'property'=>'PropertyController'
]);

// load country wiith ajax

Route::resources([
    'country'=>'CountryController'
]);

Route::resources([
   'state'=>'StateController'
]);

Route::resources([
   'property-type'=>'PropertyTypeController'
]);

Route::resources([
   'standing'=>'standingController'
]);

Route::resources([
   'images'=>'ImagesController'
]);
