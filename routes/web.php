<?php

use App\Http\Controllers\StudentController;
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

// getall
Route::get('/', [StudentController::class, 'index']);
// filter
Route::get('/filter', [StudentController::class, 'filter']);
// get all data
Route::get('/greeting',[StudentController::class,'index']);
// ambil data dari controller
Route::get('/greeting/{id}',[StudentController::class,'show']);
