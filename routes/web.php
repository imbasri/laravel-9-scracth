<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('/index', [StudentController::class, 'index'])->name('index');
// ambil data dari controller
Route::get('/show', [StudentController::class, 'index']);
// show detail
Route::get('/show/{id}', [StudentController::class, 'show'])->name('show');

// filter
Route::get('/filter', [StudentController::class, 'filter']);
// get all data
Route::get('/greeting', [StudentController::class, 'index']);

// create
Route::get('/create', [StudentController::class, 'create'])->name('create');

// store
Route::post('/create', [StudentController::class, 'store'])->name('store');

// edit
Route::get('/edit/{student}',[StudentController::class, 'edit'])->name('edit');
// edit
Route::patch('/update/{student}',[StudentController::class, 'update'])->name('update');
// delete
Route::delete('/delete/{student}',[StudentController::class,'delete'])->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

