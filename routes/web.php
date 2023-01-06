<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('chirps', [ChirpController::class, 'index'])
        ->name('chirps.index');
    Route::post('chirps', [ChirpController::class, 'store'])
        ->name('chirps.store');
    Route::get('chirps/{chirp}/edit', [ChirpController::class, 'edit'])
        ->name('chirps.edit');
    Route::patch('chirps/{chirp}', [ChirpController::class, 'update'])
        ->name('chirps.update');
});

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard');
})
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

Route::get('/login', [LoginController::class, 'create'])
    ->name('login');
Route::post('/login', [LoginController::class, 'store']);
