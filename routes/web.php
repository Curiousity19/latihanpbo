<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
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
Route::get('/',[dashboard::class,'index']);
Route::get('/gaji/index', [GajiController::class, 'index']);
Route::get('/gaji/create', [GajiController::class, 'create']);
Route::get('/gaji/edit', [GajiController::class, 'edit']);
Route::get('/Jabatan/index', [JabatanController::class, 'index']);
Route::get('/Jabatan/create', [JabatanController::class, 'create']);
Route::get('/Jabatan/edit', [JabatanController::class, 'edit']);
Route::get('/Karyawan/index',[KaryawanController::class,'index']);
Route::get('/Karyawan/create',[KaryawanController::class,'create']);
Route::get('/Karyawan/edit',[KaryawanController::class,'edit']);

// Route::get('/', function () {
//     return view('welcome');
// });
