<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Thisinh;
use App\Models\User;
use App\Models\Lichsu;
use App\Models\Chat;
use App\Events\pu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\TestMail;               // Mail
use App\Mail\ThongBao;               // Mail
use Illuminate\Support\Facades\Mail; // Mail

// use DB;
use Carbon\Carbon; 

// use DB;
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

Route::get('/', function () {return view('home');});
Route::get('/home', function () { return view('home');});
Route::get('/xethocba', [ HomeController::class ,'xetHocBa']);
Route::post('input',[ HomeController::class ,'postForm' ])->name("post");
Route::post('xuly',[ HomeController::class ,'xuly'])->name("xuly");
Route::get('mail',[ HomeController::class ,'sendMail']);
Route::get('tracuu', [HomeController::class,'traCuu']);
Route::get('/logout',[HomeController::class,'logOut']);
Route::get('/danhsach',[HomeController::class,'danhSach'])->name('danhsach')->middleware('admin'); 
Route::get('/thongke',[HomeController::class,'thongKe'] )->name('thongke')->middleware('admin');
Route::get('hoso',[HomeController::class,'hoSo']);
Route::get('hoso/{id}', [HomeController::class,'xemHoSo'])->middleware('admin');
Route::get('sua/{id}',[HomeController::class,'suaHoSo'])->middleware('admin');
Route::get('sua/',[HomeController::class,'sua'] );
Route::post('xlsua',[HomeController::class,'xlsua'])->name('xlsua');
Route::middleware(['auth:sanctum', 'verified','admin'])->get('/dashboard', function () {return view('admin');})->name('dashboard'); 
Route::get('lichsu',[HomeController::class,'lichSu'])->middleware('admin');
Route::get('/duyet',[HomeController::class,'duyet'])->middleware('admin');
Route::get('duyet/{id}', [HomeController::class,'duyetHoSo'])->middleware('admin');
Route::get('do/{id}', [HomeController::class,'do'])->middleware('admin');    
Route::get('khongdo/{id}',[HomeController::class,'khongDo'] )->middleware('admin');
Route::get('regiterr', function () {return view('dangky');})->middleware('admin');
Route::get('/danhsachdo', [HomeController::class,'danhSachDo'])->middleware('admin');
Route::post('dangky', [HomeController::class,'dangKy'] )->name('dangky')->middleware('admin');
Route::get('/lienhe',[HomeController::class,'lienHe'] )->name('lienhe')->middleware('admin');
Route::post('/sendcl',[HomeController::class,'sendClient']);
Route::post('/sendsv',[HomeController::class,'sendSever']);

