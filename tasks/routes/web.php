<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\addController;
use App\Http\Controllers\add;
use App\Http\Controllers\update;
use App\Http\Controllers\delete;
use App\Http\Controllers\index;

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

Route::get('/', [index::class,'getData']);
Route::get('add', [add::class,'addTask']);
Route::get('update', [update::class,'upTask']);
Route::get('delete', [delete::class,'delete']);