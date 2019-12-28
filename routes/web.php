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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', function () {
        return redirect(route('admin.dashboard'));
    });

    Route::get('/auth/logout', 'DashboardController@index')->name('admin.auth.logout');
    Route::get('/auth/login', 'Auth\LoginController@index')->name('admin.auth.login');
    Route::post('/auth/login', 'Auth\LoginController@submitLogin');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    });
});
