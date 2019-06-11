<?php



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

Route::get('/admin/index', function () {
    return view('admin.index');
});

Auth::routes();

Route::resource('admin', 'SalaController');
Route::resource('reservas','ReservaController');
