<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\DonorContinueController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/users/dashboard', function () {
    return view('users.dashboard');
})->middleware('auth', 'admin');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/users/donors', [DonorController::class, 'index'])->middleware('auth');;
Route::get('/users/donors/create', [DonorController::class, 'create'])->middleware('auth');;
Route::post('/users/donors/store', [DonorController::class, 'store']);
Route::get('/users/donors/continue/create', [DonorContinueController::class, 'create'])->middleware('auth');;
Route::get('/users/donors/continue/index', [DonorContinueController::class, 'index'])->middleware('auth');;
Route::post('/users/donors/continue/store', [DonorContinueController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');

Route::get('/dashboard/detail', [DashboardController::class, 'show'])->name('detailadmin')->middleware('auth');;
