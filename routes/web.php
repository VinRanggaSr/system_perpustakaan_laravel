<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [DashboardController::class, 'index']) -> name('dashboard');
    Route::resource('buku', BookController::class);
    Route::get('/search', [DashboardController::class, 'searchTopic'])->name('pages.book.index');
});

Auth::routes();

