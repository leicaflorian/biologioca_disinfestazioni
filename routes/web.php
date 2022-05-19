<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/servizi', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services.index');
Route::get('/servizi/{service}', [\App\Http\Controllers\ServiceController::class, 'details'])->name('services.details');
Route::get('/contatti', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
