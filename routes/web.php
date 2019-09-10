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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'WelcomeController@index');
//    ->name('bienvenue');
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
Route::get('/welcome', 'WelcomeController@index')->name('bienvenue');

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

Route::group(['middleware' => 'auth'], function () {
    Route::resources([
        'user' => 'UsersManagementController'
    ]);


    Route::post('/property-update', 'PropertyController@edit');

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

    Route::post('/images-upate', 'ImagesController@update');

    Route::resources([
        'typetransaction' => 'TypeTransactionController'
    ]);

    Route::resources([
        'transaction' => 'TransactionController'
    ]);
    Route::post('/transaction-update', 'TransactionController@update');

    Route::get('/reserver-payer', 'ReserverController@reserverPayer');
    // assign property and validate
    Route::get('/assign-property/{user_id}/{property_id}', 'UsersManagementController@assignProperty');

    Route::get('/validate-property/{property_id}', 'PropertyController@validateproperty');

    Route::get('/properties-all', 'PropertyController@customerproperty');

    Route::get('/property-details/{id}', 'PropertyController@showcustomerproperty')->name('property_details');

    Route::get('/user-agents', 'UsersManagementController@showAgents');

    Route::get('/property-valid','PropertyController@ShowValidProperty');

    Route::get('/property-published','PropertyController@AdminPublishedProperty');

});

Route::get('/deconnect','UsersManagementController@logout');
Route::get('/user-properties-detail/{id}', 'PropertyController@details');
Route::resources([
    'property' => 'PropertyController'
]);
Route::resources([
    'reserver' => 'ReserverController'
]);
Route::get('/reserv_bien', 'ReserverController@create_reservation')->name('reservation_bien');

Route::resources([
    'Search' => 'searchController'
]);
#endRessources
#notifiy user for visite date
Route::get('/visite-notify/{id}/{visite_at}', 'PropertyController@visiteNotify');
Route::get('/confirm-visite/{id}', 'ReserverController@ConfirmVisite');
#endnotify


Route::get('/reservation-uncomplete', 'ReserverController@uncompleteReservation')
    ->middleware('guestUser');

//Route::get('/tester','ReserverController@uncompleteReservation');

// STRIPE PAYMENTS

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/plans', 'PlanController@index')->name('plans.index');
    Route::get('/plan/{plan}', 'PlanController@show')->name('plans.show');
    Route::post('/subscription', 'SubscriptionController@create')->name('subscription.create');
});
Route::get('/payment/{id}/{montant}','PaiementController@Process');
Route::post('/charge','PaiementController@Charge')->name('payment.process');

#Static Session
Route::get('/show-charts','HomeController@Charts');

#Notifications for user

Route::get('send','NotificationsController@sendNotification');
Route::get('/test','ReserverController@UnConfirmVisite');
