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

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('booklets', \App\Http\Controllers\BookletController::class);
    Route::resource('videos', \App\Http\Controllers\VideoController::class);
    Route::resource('questions', \App\Http\Controllers\QuestionController::class);
    Route::resource('pdfs', \App\Http\Controllers\PdfController::class);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
