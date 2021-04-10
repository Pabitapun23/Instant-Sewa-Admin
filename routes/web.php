<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ServiceManagementController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/dashboard', 'App\Http\Controllers\Admin\UserManagementController@userData');

    Route::get('/service-management', 'App\Http\Controllers\Admin\ServiceManagementController@registered');
    Route::post('/save-services', 'App\Http\Controllers\Admin\ServiceManagementController@store');
    Route::get('/service-management/{id}', 'App\Http\Controllers\Admin\ServiceManagementController@edit');
    Route::put('/service-management-update/{id}', 'App\Http\Controllers\Admin\ServiceManagementController@update');

    Route::get('/main-dashboard', 'App\Http\Controllers\Admin\MainDashboardController@mainDashboard');

});
