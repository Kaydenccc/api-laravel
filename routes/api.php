<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', [AuthenticationController::class, 'login']);
Route::post('/kelas', [KelasController::class, 'createKelas']);
Route::get('/absens', [KehadiranController::class, 'getKehadiran'])->middleware(['auth:sanctum']);
Route::post('/absens', [KehadiranController::class, 'postKehadiran'])->middleware(['auth:sanctum']);
Route::get('/siswa', [SiswaController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/siswa', [SiswaController::class, 'getAllSiswa'])->middleware(['auth:sanctum']);
Route::post('/siswa', [SiswaController::class, 'createSiswa']);
// Route::post('/siswa', [SiswaController::class, 'createSiswa'])->middleware(['auth:sanctum']);
// Route::get('/kelas', [KelasController::class, 'index'])->middleware(['auth:sanctum']);