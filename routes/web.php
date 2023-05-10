<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PegawaiController;
use App\Models\Karyawan;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', [FrontendController::class, 'index']);

//route CRUD query builder
Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/jabatan/create', [JabatanController::class, 'tambah']);
Route::post('/jabatan/store', [JabatanController::class, 'store']);
Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit']);
Route::post('/jabatan/update', [JabatanController::class, 'update']);
Route::get('/jabatan/hapus/{id}', [JabatanController::class, 'hapus']);


// route ORM
Route::resource('karyawan', KaryawanController::class);
