<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// Common Resource Routes:
// index - show all listings
// show  - show single listing
// create - Show form to create ew listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - Delete listing

// all listing

Route::get('/', [\App\Http\Controllers\ListingController::class, 'index']);

// show create form

Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create'])->middleware('auth');

// store listing data

Route::post('/listings/', [\App\Http\Controllers\ListingController::class, 'store']);

// Show edit form

Route::get('/listings/{listing}/edit', [\App\Http\Controllers\ListingController::class, 'edit'])->middleware('auth');

// Edit submit to Update

Route::put('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'update'])->middleware('auth');

// Delete listing

Route::delete('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'destory'])->middleware('auth');


// Manage Listings

Route::get('/listings/manage', [\App\Http\Controllers\ListingController::class, 'manage'])->middleware('auth');

// single listing

Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);

// Show register/create Form

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->middleware('guest');

// Create new User

Route::post("/users", [\App\Http\Controllers\UserController::class, 'store']);

// Log user out

Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');


// show login form

Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');

// Log in User

Route::post('/users/authenticate', [\App\Http\Controllers\UserController::class, 'authenticate']);



