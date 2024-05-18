<?php

use App\Http\Controllers\PenjadwalanController;
use App\Models\Penjadwalan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('penjadwalan', [PenjadwalanController::class, 'index']);
Route::get('/penjadwalan/form/', [PenjadwalanController::class, 'create'])->middleware('auth');
Route::post('/penjadwalan/form/', [PenjadwalanController::class, 'store'])->middleware('auth');
Route::get('/penjadwalan/edit/{id}', [PenjadwalanController::class, 'edit'])->middleware('auth');
Route::put('/penjadwalan/{id}', [PenjadwalanController::class, 'update'])->middleware('auth');
Route::delete('/penjadwalan/{id}', [PenjadwalanController::class, 'destroy'])->middleware('auth');

