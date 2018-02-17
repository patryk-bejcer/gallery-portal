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

Auth::routes();

Route::get('admin', function () { return view('dashboard'); })->middleware('isAdmin');

Route::resource('admin/users', 'UsersController');

Route::resource('admin/roles', 'RolesController');

Route::resource('admin/permissions', 'PermissionsController');

Route::get('/home', 'HomeController@index')->name('home');
