<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', UserController::class, 'signup')->name('signup');
Route::post('/', UserController::class, 'signup_valid')->name('signup_valid');
Route::get('/signin', UserController::class, 'signin')->name('signin');
Route::post('/signin', UserController::class, 'signin_valid')->name('signin_valid');
Route::get('/applications', UserController::class, 'applications')->name('applications');
Route::post('/create_app', UserController::class, 'create_app')->name('create_app');

Route::post('/edit_app', AdminController::class, 'edit_app')->name('edit_app');