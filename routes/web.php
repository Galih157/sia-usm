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

    Route::get('/auth/logout', 'Auth\LogoutController@logout')->name('admin.auth.logout');
    Route::get('/auth/login', 'Auth\LoginController@index')->name('admin.auth.login');
    Route::post('/auth/login', 'Auth\LoginController@submitLogin');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

        Route::group(['prefix' => 'prodi', 'namespace' => 'Prodi'], function () {
            Route::get('/', 'ProdiController@index')->name('admin.prodi.index');
            Route::get('/create', 'ProdiController@create')->name('admin.prodi.create');
            Route::post('/create', 'ProdiController@store');
            Route::get('/{id}', 'ProdiController@show')->name('admin.prodi.show');
            Route::post('/{id}', 'ProdiController@update');
            Route::post('/{id}/delete', 'ProdiController@destroy')->name('admin.prodi.delete');
        });

        Route::group(['prefix' => 'dosen', 'namespace' => 'Dosen'], function () {
            Route::get('/', 'DosenController@index')->name('admin.dosen.index');
            Route::get('/create', 'DosenController@create')->name('admin.dosen.create');
            Route::post('/create', 'DosenController@store');
            Route::get('/{id}', 'DosenController@show')->name('admin.dosen.show');
            Route::post('/{id}', 'DosenController@update');
            Route::post('/{id}/delete', 'DosenController@destroy')->name('admin.dosen.delete');
        });

        Route::group(['prefix' => 'makul', 'namespace' => 'Makul'], function () {
            Route::get('/', 'MakulController@index')->name('admin.makul.index');
            Route::get('/create', 'MakulController@create')->name('admin.makul.create');
            Route::post('/create', 'MakulController@store');
            Route::get('/{id}', 'MakulController@show')->name('admin.makul.show');
            Route::post('/{id}', 'MakulController@update');
            Route::post('/{id}/delete', 'MakulController@destroy')->name('admin.makul.delete');
        });

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
