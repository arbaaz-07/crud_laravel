<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

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

Route::get('/', [BasicController::class,'registration']);
Route::post('/', [BasicController::class,'store']);
Route::get('/view', [BasicController::class,'view']);
Route::get('/delete/{id}', [BasicController::class,'delete']);
Route::get('/forcedelete/{id}', [BasicController::class,'forcedelete']);
Route::get('/restore/{id}', [BasicController::class,'restore']);
Route::get('/edit/{id}', [BasicController::class,'edit']);
Route::post('/update/{id}', [BasicController::class,'update']);
Route::get('/trash', [BasicController::class,'trash']);
