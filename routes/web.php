<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;

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

// GET home page
Route::get('/', [ProductController::class, 'index'])->name('product.index');


Route::prefix('/products')->group(function () {
    // GET form to create a product
    Route::get('/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');

    // GET a single product
    Route::get('/show/{product}', [ProductController::class, 'show'])->name('product.show')->middleware('auth');

    // Route to store a product
    Route::post('/', [ProductController::class, 'store'])->name('product.store')->middleware('auth');

    // Route to get form to update a product
    Route::get('/update/{product}', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');

    // Route to update a product
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('product.update')->middleware('auth');

    // Route to delete a product
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.delete')->middleware('auth');

    // Route to get categories
    Route::get('/all', [PageController::class, 'all'])->name('product.all')->middleware('auth');

    // Route to get results based on search
    Route::get('/search', [PageController::class, 'search'])->name('product.search')->middleware('auth');
});


// Route related to register, login and logout
Route::prefix('/users')->group(function() {
    // GET login page
    Route::get('/login', [UserController::class, 'login'])->name('user.login')->middleware('guest');
    
    // GET register page
    Route::get('/register', [UserController::class, 'register'])->name('user.register')->middleware('guest');
    
    // GET form to edit a user
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');

    // POST login a user
    Route::post('/login', [AuthController::class, 'authenticate'])->name('user.auth');

    // POST create a user
    Route::post('/register', [AuthController::class, 'store'])->name('user.store');

    // POST logout a user
    Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout')->middleware('auth');

    // PUT a user
    Route::put('/edit/{id}', [UserController::class, 'update'])->name('user.update')->middleware('auth');

    // DELETE a user
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete')->middleware('auth');
});


// Route related to dashboard
Route::prefix('/dashboard')->group(function() {
    // GET user dashboard
    Route::get('/user/{id}', [DashboardController::class, 'getUserProduct'])->name('dashboard.user')->middleware('auth');

    // GET admin dashboard for users list
    Route::get('/admin/users-list', [DashboardController::class, 'getAllUsers'])->name('dashboard.users-list')->middleware('auth');

    // GET admin dashboard for products list
    Route::get('/admin/products-list', [DashboardController::class, 'getAllProducts'])->name('dashboard.products-list')->middleware('auth');
});

// GET this page if non authorized user tries to update, delete or search products
Route::get('/non-authorized', [PageController::class, 'redirect'])->name('non-auth');

// Route to show 404 page
Route::fallback([PageController::class, 'error']);