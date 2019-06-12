<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/index', function () {
    return view('user.index');
});

Route::get('/user', 'ReservaController@index')->name('user');

Route::get('/admin/index', function () {
    return view('admin.index');
});

Auth::routes();

Route::resource('admin', 'SalaController');
Route::resource('reservas','ReservaController');

Route::get('/admin', 'SalaController@index')->middleware('user')->name('admin');
Route::get('admin/destroy/{id}', 'SalaController@destroy');
Route::get('/criar-reserva', 'ReservaController@create')->name('criar-reservas');