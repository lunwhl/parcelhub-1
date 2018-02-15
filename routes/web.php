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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Pages route
Route::get('couriers', 'CourierController@page')->name('couriers');
Route::get('lots/categories', 'CategoryController@page')->name('lots.categories');
Route::get('lots', 'LotController@page')->name('lots');
Route::get('products', 'ProductController@page')->name('products');

/* Route for Socialite authentication */
Route::group(['prefix' => 'auth', 'as' => 'auth.social.'], function() {
    Route::get('social/{provider}', ['as' => 'redirect', 'uses'=> 'Auth\SocialController@redirectToProvider']);
    Route::get('social/{provider}/callback', ['as' => 'callback', 'uses'=> 'Auth\SocialController@handleProviderCallback']);
});


Route::group(['prefix' => 'lot'], function() {
	Route::get('index', 'LotController@index');
	Route::get('delete/{id}', 'LotController@destroy');
	Route::post('store', 'LotController@store');
	Route::post('update', 'LotController@update');
});

Route::get('categories', 'CategoryController@page')->name('lots.categories');

Route::group(['prefix' => 'category'], function() {
	Route::get('index', 'CategoryController@index');
	Route::get('delete/{id}', 'CategoryController@destroy');
	Route::post('store', 'CategoryController@store');
	Route::post('update', 'CategoryController@update');
});

Route::group(['prefix' => 'product'], function() {
	Route::get('index', 'ProductController@index');
	Route::get('delete/{id}', 'ProductController@destroy');
	Route::post('store', 'ProductController@store');
	Route::post('update', 'ProductController@update');
});

Route::group(['prefix' => 'internal'], function() {
	Route::get('categories', 'CategoryController@index');
	Route::get('lots', 'LotController@index');
	Route::get('couriers', 'CourierController@index');
	Route::get('products', 'ProductController@index');
});

Route::group(['prefix' => 'courier'], function() {
	Route::get('index', 'CourierController@index');
	Route::get('delete/{id}', 'CourierController@destroy');
	Route::post('store', 'CourierController@store');
	Route::post('update', 'CourierController@update');
});

Route::group(['prefix' => 'inbound'], function() {
	Route::get('index', 'InboundController@index');
	Route::get('show/{id}', 'InboundController@show');
	Route::get('delete/{id}', 'InboundController@destroy');
	Route::post('store', 'InboundController@store');
	Route::post('update', 'InboundController@update');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::group(['prefix' => 'setting'], function() {
        Route::get('index', 'SettingsController@index')->name('setting.index');
        Route::post('update', 'SettingsController@update')->name('setting.update');
    });
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('json/categories', 'CategoryController@categories')->name('json.categories');

    Route::group(['prefix' => 'lot'], function() {
        Route::get('index', 'LotController@index');
        Route::get('delete/{id}', 'LotController@destroy');
        Route::post('store', 'LotController@store');
        Route::post('update', 'LotController@update');
    });

    Route::group(['prefix' => 'payment', 'as' => 'payment.'], function() {
        Route::get('index', ['as' => 'index', 'uses' => 'PaymentController@index']);
        Route::post('store', ['as' => 'store', 'uses' => 'PaymentController@store']);
        Route::post('approve', ['as' => 'approve', 'uses' => 'PaymentController@approve']);
        Route::post('purchase', ['as' => 'purchase', 'uses' => 'PaymentController@purchase']);
    });

});