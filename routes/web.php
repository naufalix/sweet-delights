<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/kontak', [HomeController::class, 'contact']);
Route::get('/menu', [HomeController::class, 'menu']);
Route::get('/reservasi', [HomeController::class, 'reservation']);
Route::get('/tentang-kami', [HomeController::class, 'about_us']);
Route::get('/testimoni', [HomeController::class, 'testimonials']);
