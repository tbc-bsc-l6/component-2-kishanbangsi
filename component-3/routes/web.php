<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;

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

// Route for home page
Route::get('/', [JobController::class, 'index'])->name('index');

// Route for jobs page
Route::get('/jobs', [JobController::class, 'all'])->name('jobs');

// Route for register page
Route::get('/register', [AuthController::class, 'register'])->name('register');

// Route for login page
Route::get('/login', [AuthController::class, 'login'])->name('login');
