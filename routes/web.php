<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Logout\LogoutController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\Profile\ProfileController;
use App\Http\Controllers\Backend\Setting\SettingController;
use App\Http\Controllers\Backend\Live\ChannelController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Others\Info\InfoController;
use App\Http\Controllers\Backend\Others\Client\ClientController;



Route::get('/', function () {
    return view('frontend.home.view');
});


Auth::routes([
   'register' => false,
   'login' => false,
]);

Route::get('/', [HomeController::class, 'Home'])->name('home');

// User Logout
Route::get('/logout',[LogoutController::class,'Logout'])->name('user.logout');

// Login Admin/User
Route::get('/auth/login',[LoginController::class,'AdminLogin'])->name('auth.login');
Route::post('/login/submit',[LoginController::class,'SubmitLogin'])->name('submit.login');

// Info
Route::get('/info/view',[InfoController::class,'InfoView'])->name('info.view');
Route::post('/info',[InfoController::class,'Info'])->name('info');

Route::group(['middleware' => 'auth'],function(){

// Dashboard
Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard');

// User List
Route::post('/user',[UserController::class,'Store']);
Route::get('/fetch-user', [UserController::class, 'fetchuser']);
Route::get('/edit-user/{id}', [UserController::class, 'edit']);
Route::put('update-user/{id}', [UserController::class, 'update']);
Route::delete('delete-user/{id}', [UserController::class, 'destroy']);

Route::prefix('users')->group(function()
{
   Route::get('/view',[UserController::class,'UserView'])->name('user.view');
   Route::get('/add',[UserController::class,'UserAdd'])->name('user.add');
   Route::post('/store',[UserController::class,'UserStore'])->name('Store');
});

 // Live
 Route::delete('delete-live/{id}', [ChannelController::class, 'destroy']);

Route::prefix('live')->group(function()
{
   Route::get('/channel/view',[ChannelController::class,'Live'])->name('live.view');
   Route::get('/channel/add',[ChannelController::class,'LiveAdd'])->name('live.add');
   Route::post('/channel/store',[ChannelController::class,'LiveStore'])->name('live.store');
   Route::get('/channel/edit/{id}',[ChannelController::class,'LiveEdit'])->name('live.edit');
   Route::post('/channel/update/{id}',[ChannelController::class,'LiveUpdate'])->name('update');
   Route::get('/change-status/{id}',[ChannelController::class,'ChangeStatus'])->name('change.status');
});

// User Admin Profile
Route::prefix('profile')->group(function()
{
   Route::get('/view',[ProfileController::class,'AdminProfile'])->name('profile.view');
   Route::get('/edit',[ProfileController::class,'AdminProfileEdit'])->name('profile.edit');
   Route::post('/store',[ProfileController::class,'AdminStore'])->name('user.profile.store');
   Route::get('/change/password',[ProfileController::class,'ChPassword'])->name('change.password');
   Route::post('/change/password',[ProfileController::class,'ChPasswordUpdate'])->name('user.change.password.update');
});

// Client
Route::delete('delete-info/{id}', [ClientController::class, 'destroy']);

Route::prefix('client')->group(function()
{
   Route::get('/request',[ClientController::class,'ClView'])->name('client.view');
   Route::get('/detail/{id}',[ClientController::class,'ClDetail'])->name('client.detail');
});

// Setting
Route::prefix('setting')->group(function()
{
   Route::get('/update',[SettingController::class,'SettingView'])->name('setting.view');
   Route::post('/update',[SettingController::class,'SettingUpdate'])->name('setting.update');
});
});
