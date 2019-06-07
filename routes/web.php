<?php



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

   Route::get('bookings', 'BookingsController@index');
   Route::get('bookings/create', 'BookingsController@create');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
