<?php

use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\LogoutController;
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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/login', function () {
//    return view('auth.login');
//});
Route::group(['middleware' => 'guest:staff'], function () {
    Route::get('/login', [LoginController::class, 'showForm'])->name('login');
    Route::post('/login', [LoginController::class, 'submitForm'])->name('login.submit');
//    Route::post('/passwords/request-link', [ForgotPasswordController::class, 'validatePasswordRequest']);
//    Route::post('/passwords/reset/password', [ForgotPasswordController::class, 'resetPassword']);
//    Route::get('/passwords/forgot', [ForgotPasswordController::class, 'forgotForm']);
//    Route::get('/passwords/reset', [ForgotPasswordController::class, 'resetForm']);
//    Route::get('/passwords/reset', [ForgotPasswordController::class, 'resetForm']);
});
Route::get('/logout', LogoutController::class)->middleware('auth:staff')->name('logout');

Route::group([
    'prefix' => '/home',
    'middleware' =>['auth:staff'], //['auth:staff', 'logging-web', 'twofa'],
    'as' => 'home.'
], function () {
    Route::get('/', function(){
        return view('home.home');
    })->name('index');
});
