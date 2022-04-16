<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShowController;

Route::get('/',[ShowController::class,'index']);
Route::get('/about',[ShowController::class,'about']);
Route::get('/contact',[ShowController::class,'contact']);
Route::post('/contactadd',[ShowController::class,'contact']);
Route::get('/courses',[ShowController::class,'courses']);
// Route::get('/pages.courses.blade.php',[ShowController::class,'courses']);
Route::get('/team',[ShowController::class,'team']);
Route::get('/testimonial',[ShowController::class,'testimonial']);
Route::get('/',[ShowController::class,'index']);