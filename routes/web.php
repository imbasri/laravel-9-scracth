<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PictureController;
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



Route::get('/update_password', [HomeController::class, 'update_password'])->name('update_password');
Route::patch('/update_password', [HomeController::class, 'store_password'])->name('store_password');

// protect only admin
Route::middleware(['admin'])->group(function () {
    // create
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    // store
    Route::post('/create', [StudentController::class, 'store'])->name('store');
    // edit
    Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit');
    // edit
    Route::patch('/update/{student}', [StudentController::class, 'update'])->name('update');
    // delete
    Route::delete('/delete/{student}', [StudentController::class, 'delete'])->name('delete');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/locale/{set_locale}', [LocaleController::class, 'set_locale'])->name('set_locale');


// storage
Route::get('/picture/create', [PictureController::class, 'create'])->name('picture.create');

Route::post('/picture/create', [PictureController::class, 'store'])->name('picture.store');
// show picture
Route::get('/picture/{picture}', [PictureController::class, 'show'])->name('picture.show');
// delete
Route::delete('/picture/{picture}', [PictureController::class, 'delete'])->name('picture.delete');

// copy
Route::get('/copy/{picture}', [PictureController::class, 'copy'])->name('picture.copy');

// move
Route::get('/move/{picture}', [PictureController::class, 'move'])->name('picture.move');
