<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

// Route for homepage
Route::get('/', [BlogController::class, "index"]);

// Route to create a blog
Route::get('/create', [BlogController::class, "create"]);

// Route to store a blog
Route::post('/', [BlogController::class, "store"]);

// Route to show a specific blog
Route::get('/show/{slug}', [BlogController::class, "show"]);

// Route to edit a specific blog
Route::get('/edit/{slug}', [BlogController::class, "edit"]);

//Route to store an updated blog
Route::put('/edit/{id}', [BlogController::class, "update"]);

// Route to delete a specific blog
Route::delete('/delete/{id}', [BlogController::class, "destroy"]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
