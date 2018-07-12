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
})->name('welcome');

// Register Routes...
Route::get('/register', 'RegisterController@showRegistrationForm')->name('register.show');
Route::post('/register', 'RegisterController@register')->name('register');

// Registration verify email...
Route::get('/verifyemail/{token}', 'VerificationController@verify');

// Authentication Routes...
Route::get('/login', 'LoginController@showLoginForm')->name('login.show');
Route::post('/login', 'LoginController@login')->name('login');
Route::post('/logout', 'LoginController@logout')->name('logout');


// Forgot Password...
Route::get('/reset', 'PasswordResetController@showResetForm')->name('reset.show');
Route::post('/reset/request', 'PasswordResetController@reset')->name('reset');
Route::get('/reset-link/{token}', 'PasswordResetController@changePasswordForm');
Route::post('/reset-password', 'PasswordResetController@updatePassword')->name('update.password');

Route::middleware('UserAuth')->group(function () {
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::get('/change', 'ProfileController@changePasswordshow')->name('change.password.show');
    Route::post('/avatar-photo', 'ProfileController@avatarPhoto')->name('avatar.photo');

});





