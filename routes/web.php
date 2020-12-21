<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Thisinh;
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

Route::get('/home', function () {
    return view('home');
});
Route::get('/xethocba', [ HomeController::class ,'dangKy']);




// Route::get('/search', function () {
//     return view('search');
// });
Route::post('input',[ HomeController::class ,'postForm' ])->name("post");
Route::post('xuly',[ HomeController::class ,'xuly'])->name("xuly");
Route::get('mail',[ HomeController::class ,'sendMail']);
Route::get('tracuu', [HomeController::class,'traCuu']);

Route::get('/danhsach', function () {
    $data = Thisinh::all();
   
    return view('danhsachthisinh',compact('data'));
})->name('danhsach')->middleware('admin');

Route::get('echo', function () {
    // $a = ahihi('Tiến Đạt');
    check();
    // echo $a;
});

Route::get('/a', function () {
    $data = Thisinh::all();
   
    return view('danhsach',compact('data'));
}) -> middleware('admin');
Route::get('/thongke', function () {
    // $data = Thisinh::all();
   
    return view('thongke');
})->name('thongke')->middleware('admin');
Route::get('hoso', function () {
  
    $id = App\Models\User::where('email',Auth::user()->email)->value('id');
    $id = App\Models\User::find($id)->thiSinh->value('id');
    $data = Thisinh::query()->find($id);
    // dd($data);
    return view('hoso',compact('data','id'));
})->middleware('admin');
Route::get('sua/{id}', function ($id) {
    $data = Thisinh::query()->find($id);
    return view('suahoso',compact('data','id'));
})->middleware('admin');
Route::post('xlsua',[HomeController::class,'xlsua'])->name('xlsua')->middleware('admin');

// Route::get('login', function () {
//     return view('dangnhap');
// })->name('login')->middleware('guest');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('b',function(){
  return view('lichsu');
});
