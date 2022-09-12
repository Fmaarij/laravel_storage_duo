<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\MembresController;
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

Route::get('/', [MembresController::class,'index'])->name('membreindex');
Route::get('/create', [MembresController::class,'create'])->name('createmembre');
Route::post('/storemembre', [MembresController::class,'store']);



Route::get('/indexgenre', [GenresController::class,'index'])->name('indexgenre');
Route::get('/creategenre', [GenresController::class,'create'])->name('creategenre');
Route::post('/storegenre', [GenresController::class,'store']);
Route::get('/show/{id}', [GenresController::class,'show']);
Route::get('/edit/{id}', [GenresController::class,'edit']);
Route::put('/{id}/update', [GenresController::class,'update']);
