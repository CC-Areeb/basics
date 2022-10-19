<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\FallbackController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

Route::resource('/home', CrudController::class);
Route::get('/about', [CrudController::class, 'about']);

Route::fallback(FallbackController::class);