<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\StockDetailController;
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
#Eski Views
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {

Route::get('/location', [LocationController::class,'index'])->name('location');
Route::get('/category', [CategoryController::class,'index'])->name('category');
Route::post('/category', [CategoryController::class,'index'])->name('category.post');
Route::get('/stockdetail', [StockDetailController::class,'index'])->name('stockdetail');
});
Route::view('/test', 'test');
require __DIR__.'/auth.php';

#New Views
/* Route::get('/',[CategoryController::class,'index'])->name('testpage'); */

