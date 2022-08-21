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

Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create']);

// store listing data

Route::post('/listings/', [\App\Http\Controllers\ListingController::class, 'store']);

// single listing

Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);







