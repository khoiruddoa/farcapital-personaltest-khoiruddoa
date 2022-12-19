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
})->name('home');

Route::get('/users/dashboard', function () {
    return view('users.dashboard');
})->name('dashboardUser')->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('storeRegister');


Route::get('/users/donors', [DonorController::class, 'index'])->name('usersDonors')->middleware('auth');
Route::get('/users/donors/create', [DonorController::class, 'create'])->name('usersDonorsCreate')->middleware('auth');
Route::post('/users/donors/store', [DonorController::class, 'store'])->name('usersDonorsStore');
Route::get('/users/donors/continue/create/{id}', [DonorContinueController::class, 'create'])->name('continueForm')->middleware('auth');
Route::get('/users/donors/continue/index/{id}', [DonorContinueController::class, 'index'])->name('continueFormIndex')->middleware('auth');
Route::post('/users/donors/continue/store', [DonorContinueController::class, 'store'])->name('continueFormStore');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin');
Route::get('/dashboard/detail/{donor}', [DashboardController::class, 'show'])->name('detailadmin')->middleware('admin');
Route::get('/dashboard/criteria/{id}', [DashboardController::class, 'criteria'])->name('dashboardcriteria')->middleware('admin');
Route::post('/dashboard/criteria/', [DashboardController::class, 'store'])->name('criteriastore')->middleware('admin');
Route::get('/dashboard/show/{id}', [DashboardController::class, 'showcriteria'])->name('dashboardshow')->middleware('admin');
