<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [GuestController::class, 'landingPage'])->name('index');


Auth::routes();
Auth::routes(['verify' => true ]); //verify user registration

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/landing-page', [GuestController::class, 'landingPage'])->name('landing.page');

// dashboard user
Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
Route::resource('users', UserController::class);


