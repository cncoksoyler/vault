<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MachineController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/stock',[StockDetailController::class,'index'])->name('stock');

Route::resource('machines',MachineController::class);



Route::get('/test',[CategoryController::class,'index'])->name('testView');

Route::get('/test2',[MachineController::class,'index']);


require __DIR__.'/auth.php';

