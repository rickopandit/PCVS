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

Route::get('/', function () 
{
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth', 'admin']], function()
{
    Route::get('/dashboard', function () 
    {
    return view('admin.dashboard');
    });
    Route::get('/user-register', 'Admin\DashboardController@registered'); 
    Route::get('/status-edit/{id}','Admin\DashboardController@registerededit');
    Route::put('/user-register-update/{id}', 'Admin\DashboardController@registerupdate'); 
    Route::delete('status-delete/{id}', 'Admin\DashboardController@registerdelete' );
});
Route::group(['middleware'=>['auth', 'patient']], function()
{
    Route::get('/patientdashboard', function()
    {
        return view('patient.patientdashboard');
    });
    Route::get('/test-registered', 'Patient\PDashboardController@registered');
});

