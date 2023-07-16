<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bus', [App\Http\Controllers\BusController::class, 'index']);
Route::get('/bus/create', [App\Http\Controllers\BusController::class, 'create']);
Route::post('/bus', [App\Http\Controllers\BusController::class, 'store']);
Route::get('/bus/{id}/edit', [App\Http\Controllers\BusController::class, 'edit']);
Route::patch('/bus/{id}', [App\Http\Controllers\BusController::class, 'update']);
Route::delete('/bus/{id}', [App\Http\Controllers\BusController::class, 'destroy']);

Route::get('/penumpang', [App\Http\Controllers\PenumpangController::class, 'index']);
Route::get('/penumpang/create', [App\Http\Controllers\PenumpangController::class, 'create']);
Route::post('/penumpang', [App\Http\Controllers\PenumpangController::class, 'store']);
Route::get('/penumpang/{id}/edit', [App\Http\Controllers\PenumpangController::class, 'edit']);
Route::patch('/penumpang/{id}', [App\Http\Controllers\PenumpangController::class, 'update']);
Route::delete('/penumpang/{id}', [App\Http\Controllers\PenumpangController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);


