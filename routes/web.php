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


Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/charts', function () {
    return view('admin.charts');
});




#guest middleware
Route::get('/welcome','WelcomeController@index');

Route::get('/guest-login', function () {
    return view('guest.auth.login');
})->name('guest.login');

Route::get('/guest-register', function () {
    return view('guest.auth.register');
});
#endGuest middleware


Route::get('/properties-detail', function () {
    return view('guest.sample.properties-detail');
});

Route::get('/properties-full-list', function () {
    return view('guest.sample.properties-full-list');
});
Route::get('/properties-map', function () {
    return view('guest.sample.properties-map');
});

#begin ressources
Route::resources([
    'user' => 'UsersManagementController'
]);

Route::resources([
    'property' => 'PropertyController'
]);

// load country wiith ajax

Route::resources([
    'country' => 'CountryController'
]);

Route::resources([
    'state' => 'StateController'
]);

Route::resources([
    'property-type' => 'PropertyTypeController'
]);

Route::resources([
    'standing' => 'standingController'
]);

Route::resources([
    'images' => 'ImagesController'
]);
Route::resources([
    'typetransaction' => 'TypeTransactionController'
]);

Route::resources([
    'transaction' => 'TransactionController'
]);

Route::resources([
    'reserver'=>'ReserverController'
]);
#endRessources

Route::get('/properties-all','PropertyController@customerproperty' );
Route::get('/user-properties-detail/{id}','PropertyController@details' );

Route::get('/property-details/{id}','PropertyController@showcustomerproperty');

Route::get('/user-agents','UsersManagementController@showAgents');


// assign property and validate
Route::get('/assign-property/{user_id}/{property_id}','UsersManagementController@assignProperty');

Route::get('/validate-property/{property_id}','PropertyController@validateproperty');

Route::get('/tester',function (){
    return view('reservemanagement.reserver');
});

// STRIPE PAYMENTS

Route::group(['middleware' => 'auth'], function() {
   // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/plans', 'PlanController@index')->name('plans.index');
});
