<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

/* Inicio de sesión */
Route::post('dashboard', [HomeController::class, 'login'])->name('login');

Route::get('logout', [HomeController::class, 'logout'])->name('logout');