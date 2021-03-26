<?php

use App\Http\Controllers\CallController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\GalleryController;

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

Route::get( '/', [MainController::class, 'index']);
Route::get('/timetable', [TimetableController::class, 'timetable']);
Route::get('/trainer', [TrainerController::class, 'trainer']);

Route::get('/callbacks', [CallController::class, 'callback']);
Route::post('/callbacks', [CallController::class, 'getCallback']);
Route::get( '/gallery', [GalleryController::class, 'gallery']);
Route::get( '/contacts', [MainController::class, 'contacts']);
