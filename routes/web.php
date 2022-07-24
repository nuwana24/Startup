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

//Routes related welcome
Route::get('/',[App\Http\Controllers\WelcomeController::class,'index']);
Route::get('/signIn',[App\Http\Controllers\WelcomeController::class,'signIn'])->name('signIn');
Route::get('/welcome_about',[App\Http\Controllers\WelcomeController::class,'welcome_about'])->name('welcome_about');
Route::get('/signup',[App\Http\Controllers\WelcomeController::class,'signup'])->name('signup');
Route::post('/signupApplication',[App\Http\Controllers\UserController::class,'signupApplication'])->name('signupApplication');
Route::get('/welcome_startups',[App\Http\Controllers\WelcomeController::class,'welcome_startups'])->name('welcome_startups');
Route::get('/welcome_mentors',[App\Http\Controllers\WelcomeController::class,'welcome_mentors'])->name('welcome_mentors');
Route::get('/welcome_guest_talks',[App\Http\Controllers\WelcomeController::class,'welcome_guest_talks'])->name('welcome_guest_talks');

//This is only for developer usage;
Route::get('/AdminRegistration',[App\Http\Controllers\UserController::class,'AdminRegistration'])->name('AdminRegistration');
Route::get('/createRole',[App\Http\Controllers\UserController::class,'createRole'])->name('createRole');

//Routes related Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//Routes related to About
Route::get('/about',[App\Http\Controllers\AboutController::class,'about'])->name('about')->middleware('auth');

//Routes related to Menu
Route::get('/menu',[App\Http\Controllers\MenuController::class,'menu'])->name('menu')->middleware('auth');

//Roues related to startups
Route::get('/startups',[App\Http\Controllers\StartupController::class,'startups'])->name('startups')->middleware('auth');
Route::get('/mystartups',[App\Http\Controllers\StartupController::class,'mystartups'])->name('mystartups')->middleware('auth');
Route::get('/startupedit/{id}',[App\Http\Controllers\StartupController::class,'startupedit'])->name('startupedit')->middleware('auth');
Route::get('/registerStartup',[App\Http\Controllers\StartupController::class,'registerStartup'])->name('registerStartup')->middleware('auth');
Route::get('/startupManagement',[App\Http\Controllers\StartupController::class,'startupManagement'])->name('startupManagement')->middleware('auth');
Route::post('/createStartup',[App\Http\Controllers\StartupController::class,'createStartup'])->name('createStartup')->middleware('auth');
Route::put('/updateStartup',[App\Http\Controllers\StartupController::class,'updateStartup'])->name('updateStartup')->middleware('auth');
Route::get('/deleteStartup/{id}',[App\Http\Controllers\StartupController::class,'deleteStartup'])->name('deleteStartup')->middleware('auth');

//Routes related to mentors
Route::get('/mentors',[App\Http\Controllers\MentorController::class,'mentors'])->name('mentors')->middleware('auth');

//Routes related guest talks
Route::get('/guestTalksTrainings',[App\Http\Controllers\GuestTalkController::class,'guestTalksTrainings'])->name('guestTalksTrainings')->middleware('auth');
Route::get('/guestTalksTrainingsManagement',[App\Http\Controllers\GuestTalkController::class,'guestTalksTrainingsManagement'])->name('guestTalksTrainingsManagement')->middleware('auth');
Route::get('/deleteGuestTalk/{id}',[App\Http\Controllers\GuestTalkController::class,'deleteGuestTalk'])->name('deleteGuestTalk')->middleware('auth');
Route::post('/addGuestTalk',[App\Http\Controllers\GuestTalkController::class,'addGuestTalk'])->name('addGuestTalk')->middleware('auth');

//Routes related to user management
Route::get('/profile',[App\Http\Controllers\UserController::class,'profile'])->name('profile')->middleware('auth');
Route::get('/editProfile',[App\Http\Controllers\UserController::class,'editProfile'])->name('editProfile')->middleware('auth');
Route::get('/userManagement',[App\Http\Controllers\UserController::class,'userManagement'])->name('userManagement')->middleware('auth');
Route::put('/updateUser',[App\Http\Controllers\UserController::class,'updateUser'])->name('updateUser')->middleware('auth');
Route::get('/deleteUser/{id}',[App\Http\Controllers\UserController::class,'deleteUser'])->name('deleteUser')->middleware('auth');

//Routes related to sessions
Route::get('/adminSessionManagement',[App\Http\Controllers\SessionController::class,'adminSessionManagement'])->name('adminSessionManagement')->middleware('auth');
Route::get('/requestMeeting/{id}',[App\Http\Controllers\SessionController::class,'requestMeeting'])->name('requestMeeting')->middleware('auth');
Route::get('/rejectRequestByAdmin/{id}',[App\Http\Controllers\SessionController::class,'rejectRequestByAdmin'])->name('rejectRequestByAdmin')->middleware('auth');
Route::get('/forwardRequestToMentor/{id}',[App\Http\Controllers\SessionController::class,'forwardRequestToMentor'])->name('forwardRequestToMentor')->middleware('auth');
Route::get('/rejectRequestByMentor/{id}',[App\Http\Controllers\SessionController::class,'rejectRequestByMentor'])->name('rejectRequestByMentor')->middleware('auth');
Route::get('/getMeetingRequestsOfMentor',[App\Http\Controllers\SessionController::class,'getMeetingRequestsOfMentor'])->name('getMeetingRequestsOfMentor')->middleware('auth');
Route::get('/getApproveRequestPage/{id}',[App\Http\Controllers\SessionController::class,'getApproveRequestPage'])->name('getApproveRequestPage')->middleware('auth');
Route::post('/approveRequest',[App\Http\Controllers\SessionController::class,'approveRequest'])->name('approveRequest')->middleware('auth');


//Route::get('/explore','App\Http\Controllers\ExploreController@explore');

//Route::get('/menu','App\Http\Controllers\MenuController@menu');
//Route::get('/about','App\Http\Controllers\AboutController@about');


//Route::get('/','App\Http\Controllers\HomeController@index');
//Route::get('/menu','App\Http\Controllers\MenuController@menu');
//Route::get('/about','App\Http\Controllers\AboutController@about');
//Route::get('/login','App\Http\Controllers\LoginController@login');
//Route::get('/signup','App\Http\Controllers\SignupController@signup');
//Route::get('/explore','App\Http\Controllers\ExploreController@explore');
//Route::get('/partners','App\Http\Controllers\PartnersController@partners');
//Route::get('/guestTalksTrainings','App\Http\Controllers\GuestTalksTrainingsController@guestTalksTrainings');
//Route::get('/guestTalksTrainingsManagement','App\Http\Controllers\GuestTalksTrainingsManagementController@guestTalksTrainingsManagement');
//Route::get('/profile','App\Http\Controllers\ProfileController@profile');
//Route::get('/editProfile','App\Http\Controllers\ProfileEditController@editprofile');
//Route::get('/mystartups','App\Http\Controllers\ProfileMyStartupsController@profileMyStartups');
//Route::get('/startupedit','App\Http\Controllers\ProfileStartupEditController@profileStartupEdit');
//Route::get('/registerStartup','App\Http\Controllers\RegisterStartupController@registerStartup');
//Route::get('/userManagement','App\Http\Controllers\UserManagementController@userManagement');
//Route::get('/startupManagement','App\Http\Controllers\StartupManagementController@startupManagement');
//Route::get('/adminSessionManagement','App\Http\Controllers\AdminSessionManagementController@adminSessionManagement');



