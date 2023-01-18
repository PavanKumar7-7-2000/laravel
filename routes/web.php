<?php

use App\Http\Controllers\listingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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


Route::get('/', [listingController::class, 'index']);

Route::get('/listings/create', [listingController::class, 'create'])->middleware('auth');

Route::put('/listings/{listing}/edit', [listingController::class, 'update'])->middleware('auth');

Route::delete('/listings/{listing}', [listingController::class, 'destroy'])->middleware('auth');

Route::get('/listings/manage', [listingController::class, 'manage'])->middleware('auth');

Route::get('/listings/{listing}', [listingController::class, 'show']);

Route::post('/listings', [listingController::class, 'store'])->middleware('auth');

Route::get('/listings/{listing}/edit', [listingController::class, 'edit'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);