<?php



Auth::routes();



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/user/index', function () {
    return view('user.index');
});

Route::get('/user/create', function () {
    return view('user.create');
});


Route::resource('admin', 'SalaController');
Route::resource('reservas','ReservaController');

Route::get('/admin', 'SalaController@index')->name('admin');

Route::get('admin/destroy/{id}', 'SalaController@destroy');