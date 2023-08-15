<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PostController;

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

//Route::view('/', 'welcome')->name('home');
Route::view('/', 'dashboard.home')->name('home');

Route::resource('authors', AuthorController::class)->only(['index', 'show']);
Route::resource('cars', CarController::class)->only(['index', 'show']);
Route::resource('locations', LocationController::class)->only(['index', 'show']);
Route::resource('posts', PostController::class)->only(['index', 'show']);
