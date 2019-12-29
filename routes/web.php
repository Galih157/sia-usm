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

        Route::group(['prefix' => 'mahasiswa', 'namespace' => 'Mahasiswa'], function () {
            Route::get('/', 'MahasiswaController@index')->name('admin.mahasiswa.index');
            Route::get('/create', 'MahasiswaController@create')->name('admin.mahasiswa.create');
            Route::post('/create', 'MahasiswaController@store');
            Route::get('/{id}', 'MahasiswaController@show')->name('admin.mahasiswa.show');
            Route::post('/{id}', 'MahasiswaController@update');
            Route::post('/{id}/delete', 'MahasiswaController@destroy')->name('admin.mahasiswa.delete');
        });
    });
});
