<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\MovieModelController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [MovieModelController::class, 'index']);
Route::get('/index', [UserController::class,'index']);
Route::post('/add-movie', [MovieModelController::class, 'store']);