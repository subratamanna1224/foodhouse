<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\FormSUBMITController;
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
//     return view('index');
// });
Route::get('/',[ShowController::class,'index']);
Route::get('/about',[ShowController::class,'about']);
Route::get('/book',[FormSUBMITController::class,'book']);
Route::post('form_submit_test_post',[FormSUBMITController::class,'submit']);
Route::get('/menu',[ShowController::class,'menu']);
// Route::get('/',[ShowController::class,'index']);
// Route::get('/',[ShowController::class,'index']);