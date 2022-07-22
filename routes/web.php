<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/menu','App\Http\Controllers\MenuController@menu');
Route::get('/about','App\Http\Controllers\AboutController@about');
Route::get('/login','App\Http\Controllers\LoginController@login');
Route::get('/signup','App\Http\Controllers\SignupController@signup');
Route::get('/explore','App\Http\Controllers\ExploreController@explore');
Route::get('/partners','App\Http\Controllers\PartnersController@partners');
Route::get('/guestTalksTrainings','App\Http\Controllers\GuestTalksTrainingsController@guestTalksTrainings');
Route::get('/guestTalksTrainingsManagement','App\Http\Controllers\GuestTalksTrainingsManagementController@guestTalksTrainingsManagement');
Route::get('/profile','App\Http\Controllers\ProfileController@profile');
Route::get('/editProfile','App\Http\Controllers\ProfileEditController@editprofile');
Route::get('/mystartups','App\Http\Controllers\ProfileMyStartupsController@profileMyStartups');
Route::get('/startupedit','App\Http\Controllers\ProfileStartupEditController@profileStartupEdit');
Route::get('/registerStartup','App\Http\Controllers\RegisterStartupController@registerStartup');
Route::get('/userManagement','App\Http\Controllers\UserManagementController@userManagement');
Route::get('/startupManagement','App\Http\Controllers\StartupManagementController@startupManagement');
Route::get('/adminSessionManagement','App\Http\Controllers\AdminSessionManagementController@adminSessionManagement');

