<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/quanhuyen/{id}',[HomeController::class,'layquanhuyen']);
Route::get('/phuongxa/{id}',[HomeController::class,'layphuongxa']);
Route::get('/nguyenvong',[HomeController::class,'nguyenvong']);
Route::get('/tk/{mon}',[HomeController::class,'tk']);
Route::get('/diem/{sbd}',[HomeController::class,'sbd']);
