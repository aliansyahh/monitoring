<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;
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

// Route::get('/', function () {
//     return view('layouts/dashboard');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/Mahasiswa', [StudentsController::class, 'index']);
Route::post('/Mahasiswa', [StudentsController::class, 'store']);
Route::get('/Mahasiswa/tambah', [StudentsController::class, 'create']);
Route::get('/Show/{student}', [StudentsController::class, 'show']);
Route::get('/Mahasiswa/{student}/edit', [StudentsController::class, 'edit']);
Route::patch('/Mahasiswa/{student}', [StudentsController::class, 'update']);
Route::delete('/Show/{student}', [StudentsController::class, 'destroy']);