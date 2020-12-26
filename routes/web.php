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

Route::get('/', function () {
    return view('home');
});
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
Route::get('logout',function (){
    if(Auth::check()){
        Auth::logout();
        return redirect('/home');
    }
    else {
        return redirect('/home');
    }
});

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
});

Route::get('hoso/{id}', function ($id) {
  
    // $id = App\Models\User::where('email',Auth::user()->email)->value('id');
    // $id = App\Models\User::find($id)->thiSinh->value('id');
    $data = Thisinh::query()->find($id);

    return view('hoso',compact('data','id'));
})->middleware('admin');
Route::get('sua/{id}', function ($id) {
    $data = Thisinh::query()->find($id);
    return view('suahoso',compact('data','id'));
})->middleware('admin');
Route::get('sua/', function () {
    $id = App\Models\User::where('email',Auth::user()->email)->value('id');
    $data = Thisinh::query()->find($id);
    return view('suahoso',compact('data','id'));
});






Route::post('xlsua',[HomeController::class,'xlsua'])->name('xlsua');



Route::middleware(['auth:sanctum', 'verified','admin'])->get('/dashboard', function () {
    return view('admin');
})->name('dashboard'); 
Route::get('lichsu',function(){
    $data = Lichsu::all();
  return view('lichsu',compact('data'));
})->middleware('admin');

Route::post('/send',function(Request $Request){
    event(new pu( $Request->user,$Request->content));
    $chat = new Chat();
    $chat->user = $Request->user;
    $chat->time = Carbon::now('Asia/Ho_Chi_Minh');  
    $chat->content =   $Request->content;
    $chat->ip = $Request->ip();
    $chat -> save();
    return $Request->user;
 });

 Route::get('/duyet', function () {
    $data = Thisinh::where('trang_thai_kiem_duyet','Chưa duyệt')->get();
    return view('duyet',compact('data'));
 });

 Route::get('duyet/{id}', function ($id) {
  
    // $id = App\Models\User::where('email',Auth::user()->email)->value('id');
    // $id = App\Models\User::find($id)->thiSinh->value('id');
    $data = Thisinh::query()->find($id);

    return view('xlduyet',compact('data','id'));
})->middleware('admin');

Route::get('do/{id}', function ($id) {
    $data = Thisinh::query()->find($id);
    $data->trang_thai_kiem_duyet='Đã duyệt';
   $data->tinh_trang_duyet='Đỗ';
    $data->save();
    $A  =$data->toan + $data->vat_ly + $data->hoa;
    $A1 =$data->toan + $data->vat_ly + $data->anh;
    $A2 =$data->toan + $data->vat_ly + $data->anh;
    $B  =$data->toan + $data->hoa + $data->sinh;
    $C  =$data->van + $data->su + $data->dia_ly;
    $D  =$data->van + $data->toan + $data->anh;
    $mess = [
        'title'=>'TRƯỜNG ĐẠI HỌC THUỶ LỢI ',
        'body'=>'KẾT QUẢ XÉT TUYỂN ĐẠI HỌC',
        'nguyenvong1'=>check($data->doituong,$data->khuvuc,$data->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D),
        'nguyenvong2'=>'',
        'nguyenvong3'=>'',
        'trangthai'=>'Đỗ',

    ];
   
    if($data->nguyen_vong_2 != null){
        $mess['nguyenvong2'] = check($data->doituong,$data->khuvuc,$data->nguyen_vong_2,$A,$A1,$A2,$B,$C,$D);
    }
    if($data->nguyen_vong_3 !=null){
        $mess['nguyenvong2'] = check($data->doituong,$data->khuvuc,$data->nguyen_vong_3,$A,$A1,$A2,$B,$C,$D);
    }
    // array_push($mess,'nguyenvong1'=>check($data->doituong,$data->khuvuc,$data->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D));


    Mail::to($data->email)->send(new TestMail ($mess));
    $lichsu = new Lichsu();
    $lichsu->tac_vu = 'Duyệt thí sinh '.$data->ho_ten.' đỗ ';
    $lichsu->thoi_gian = Carbon::now('Asia/Ho_Chi_Minh');  
    $lichsu->nguoi_thuc_hien =   $data->ho_ten;
    $lichsu -> save();
    return redirect('duyet');
});
Route::get('khongdo/{id}', function ($id) {
    $data = Thisinh::query()->find($id);
    $data->trang_thai_kiem_duyet='Đã duyệt';
    $data->tinh_trang_duyet='Không đỗ';
    $data->save();
    $A  =$data->toan + $data->vat_ly + $data->hoa;
    $A1 =$data->toan + $data->vat_ly + $data->anh;
    $A2 =$data->toan + $data->vat_ly + $data->anh;
    $B  =$data->toan + $data->hoa + $data->sinh;
    $C  =$data->van + $data->su + $data->dia_ly;
    $D  =$data->van + $data->toan + $data->anh;
   
    $mess = [
        'title'=>'TRƯỜNG ĐẠI HỌC THUỶ LỢI ',
        'body'=>'KẾT QUẢ XÉT TUYỂN ĐẠI HỌC',
        'nguyenvong1'=>check($data->doituong,$data->khuvuc,$data->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D),
        'nguyenvong2'=>'',
        'nguyenvong3'=>'',
        'trangthai'=>'Không đỗ',
    ];

    if($data->nguyen_vong_2 != null){
        $mess['nguyenvong2'] = check($data->doituong,$data->khuvuc,$data->nguyen_vong_2,$A,$A1,$A2,$B,$C,$D);
    }
    if($data->nguyen_vong_3 !=null){
        $mess['nguyenvong2'] = check($data->doituong,$data->khuvuc,$data->nguyen_vong_3,$A,$A1,$A2,$B,$C,$D);
    }
    // array_push($mess,'nguyenvong1'=>check($data->doituong,$data->khuvuc,$data->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D));


    // array_p u sh( $mess,'nguyenvong1'=>check($data->doituong,$data->khuvuc,$data->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D));
    
    // dd($mess);
    
    Mail::to($data->email)->send(new TestMail ($mess));

    $lichsu = new Lichsu();
    $lichsu->tac_vu = 'Duyệt thí sinh '.$data->ho_ten.' không đỗ ';
    $lichsu->thoi_gian = Carbon::now('Asia/Ho_Chi_Minh');  
    $lichsu->nguoi_thuc_hien =   $data->ho_ten;
    $lichsu -> save();
    return redirect('duyet');
});

Route::get('regiterr', function () {

    return view('dangky');
})->middleware('admin');
    
Route::get('/danhsachdo', function () {
    $data = Thisinh::where('tinh_trang_duyet','Đỗ')->get();
    return view('danhsachdo',compact('data'));
 });
Route::post('dangky', function (Request $Request) {
                $user = new User();
                $user->name = $Request->ho_ten ;
                $user->email = $Request->email ;
                $user->password = bcrypt($Request->pass);
                $user->role = 'AdUSER' ;
                $user->save();              
                return redirect('dashboard');
})->name('dangky');
