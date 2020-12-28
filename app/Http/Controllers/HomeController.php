<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail; // Mail
use App\Mail\TestMail;               // Mail
use App\Models\Thisinh;
use App\Models\Lichsu;
use App\Models\User;

use DB;
use Carbon\Carbon; 

class HomeController extends Controller
{

    public function postForm (Request $Request){
        $data = DB::table('thisinh')->where('id',"=",$Request->id)->get();
        foreach($data as $row){
            foreach($row as $key=> $value){
                echo $key. " : ". $value."</br>";
            }
            echo "<hr>";
        }
    }

    public function dangKy(){
        $data = DB::table('devvn_tinhthanhpho')->get();
        $data1=$data;
        $data2= DB::table('nguyenvong')->get();
        return view('xethocba',compact('data','data1','data2') );
    }
    public function layquanhuyen($id){
    $data = DB::table('devvn_quanhuyen')->where('matp',"=",$id)->get();
     json_encode($data);
        return json_encode($data);
    }
    public function layphuongxa($id){
    $data = DB::table('devvn_xaphuongthitran')->where('maqh',"=",$id)->get();
     json_encode($data);
        return json_encode($data);
    }

    public function sbd($sbd){
        $html = file_get_contents('https://thptquocgia.edu.vn/diemthi/?sbd='.$sbd);
        // echo $html;
        $bieu_thuc_chinh_qui='#(?<=role="table" class="table table-striped table-bordered table-hover responsive-table">).*(?=</table>)#imsu';
        \preg_match($bieu_thuc_chinh_qui,$html,$kq);
        $html2=trim($html,'/n');
        $html2=trim($html,'/t');
        \preg_match($bieu_thuc_chinh_qui,$html2,$kq);
        if($kq==null){
            return 'Không có kết quả ';
        }
        $bieu_thuc_chinh_qui2= '#<td>(.*)</td>#';
        \preg_match_all( $bieu_thuc_chinh_qui2,$kq[0],$kq2);
        if(isset($kq2[0])){
            return json_encode($kq2[1]);
        }
            return 'Không có kết quả ';
    }
    public function nguyenvong(){
        $data = DB::table('nguyenvong')->get();
        json_encode($data);
           return json_encode($data);
    }

    public function xuly (Request $Request){
        $thisinh = new Thisinh();
        $thisinh->ho_ten = $Request->ho." ".$Request->ten;
        $thisinh->ngay_sinh=$Request->ngaysinh;
        $thisinh->CMND=$Request->CMND;
        $thisinh->gioi_tinh=$Request->gioitinh;
        $thisinh->SDT=$Request->SDT;
        $thisinh->SBD=$Request->SBD;
        $thisinh->email=$Request->email;
        $thisinh->khuvuc=$Request->khuvucuutien;
        $thisinh->doituong=$Request->doituonguutien;
        $thisinh->tinh_thuong_tru=$Request->thanhphothuongtru;
        $thisinh->quan_huyen_thuong_tru=$Request->quanhuyenthuongtru;
        $thisinh->phuong_xa_thuong_tru=$Request->phuongxathuongtru;
        $thisinh->dia_chi_thuong_tru=$Request->diachithuongtru;
        if($Request->liketop=="liketop"){
            $thisinh->tinh_tam_tru=$Request->thanhphothuongtru;
            $thisinh->quan_huyen_tam_tru=$Request->quanhuyenthuongtru;
            $thisinh->phuong_xa_tam_tru=$Request->phuongxathuongtru;
            $thisinh->dia_chi_tam_tru=$Request->diachithuongtru;
        }
        else{
            $thisinh->tinh_tam_tru=$Request->thanhphotamtru;
            $thisinh->quan_huyen_tam_tru=$Request->quanhuyentamtru;
            $thisinh->phuong_xa_tam_tru=$Request->phuongxatamtru;
            $thisinh->dia_chi_tam_tru=$Request->diachitamtru;
        }


        $thisinh->truong_lop_12=$Request->truong12;
        $thisinh->ma_truong_lop_12=$Request->matruonglop12;
        $thisinh->ma_tinh_lop_12=$Request->matinhlop12;
        $thisinh->hanh_kiem_lop_12=$Request->hanhkiemlop12;
        $thisinh->hoc_luc_lop_12=$Request->hocluclop12;
        $thisinh->nam_tot_nghiep=$Request->namtotnghiep;
        $thisinh->nguyen_vong_1=$Request->nguyenvong1;
        $thisinh->nguyen_vong_2= null;
        $thisinh->nguyen_vong_3= null;
        if(isset($Request->nguyenvong2)){
            $thisinh->nguyen_vong_2=$Request->nguyenvong2;
        }
        if(isset($Request->nguyenvong3)){
            $thisinh->nguyen_vong_3=$Request->nguyenvong3;
        }

        $thisinh->toan=$Request->toan;
        $thisinh->van=$Request->van;
        $thisinh->anh=$Request->anh;
        $thisinh->vat_ly=$Request->vatly;
        $thisinh->hoa=$Request->hoa;
        $thisinh->sinh=$Request->sinh;
        $thisinh->su=$Request->su;
        $thisinh->dia_ly=$Request->dia;
        $thisinh->GDCD=$Request->GDCD;
        $thisinh->hinh_anh="anhthe/".$Request->CMND."anhthe.jpeg";
        $thisinh->hoc_ba="hocba/".$Request->CMND."hocba.pdf";


            $A  =$thisinh->toan + $thisinh->vat_ly + $thisinh->hoa;
            $A1 =$thisinh->toan + $thisinh->vat_ly + $thisinh->anh;
            $A2 =$thisinh->toan + $thisinh->vat_ly + $thisinh->anh;
            $B  =$thisinh->toan + $thisinh->hoa + $thisinh->sinh;
            $C  =$thisinh->van + $thisinh->su + $thisinh->dia_ly;
            $D  =$thisinh->van + $thisinh->toan + $thisinh->anh;


        // check($thisinh->doituong,$thisinh->khuvuc,$thisinh->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D);
        // dd($thisinh);
        if($Request->hasFile('anhthe')){
            $Request->file('anhthe')->move(
                'anhthe', //nơi lưu file  (mặc định của laravel là trong public )
                $Request->CMND.'anhthe.jpeg'//tên file
            );
         }
             else{
                 echo 'file ko tồn tại hoặc chưa được gửi';
             }
             if($Request->hasFile('hocba')){
                $Request->file('hocba')->move(
                    'hocba', //nơi lưu file  (mặc định của laravel là trong public )
                    $Request->CMND.'hocba.pdf'//tên file
                );
             }
                 else{
                     echo 'file ko tồn tại hoặc chưa được gửi';
                 }
                $thisinh->save();
                $mess = [
                    'title'=>'Test mail',
                    'body'=>'Đây là body',
                    'nguyenvong1'=>check($thisinh->doituong,$thisinh->khuvuc,$thisinh->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D),
                    'nguyenvong2'=>'',
                    'nguyenvong3'=>'',
                ];
                if(isset($Request->nguyenvong2)){
                    $mess['nguyenvong2'] = check($thisinh->doituong,$thisinh->khuvuc,$thisinh->nguyen_vong_2,$A,$A1,$A2,$B,$C,$D);
                }
                if(isset($Request->nguyenvong3)){
                    $mess['nguyenvong2'] = check($thisinh->doituong,$thisinh->khuvuc,$thisinh->nguyen_vong_3,$A,$A1,$A2,$B,$C,$D);
                }
                // array_push($mess,'nguyenvong1'=>check($thisinh->doituong,$thisinh->khuvuc,$thisinh->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D));


                // dd($mess);
                Mail::to($Request->email)->send(new TestMail ($mess));

                $lichsu = new Lichsu();
                $lichsu->tac_vu = 'Tạo Tài Khoản';
                $lichsu->thoi_gian = Carbon::now('Asia/Ho_Chi_Minh');  
                $lichsu->nguoi_thuc_hien =   $thisinh->ho_ten;
                $lichsu -> save();
                $user = new User();
                $user->name = $thisinh->ho_ten ;
                $user->email = $thisinh->email ;
                $user->password = bcrypt($thisinh->CMND);
                $user->role = 'NoUSER' ;
                $user->save();              
                

            return view('dangkythanhcong');


        }
        // function sendMail(){
        //     $mess = [
        //         'title'=>'Test mail',
        //         'body'=>'Đây là body'
        //     ];

        //     Mail::to('datnt72@wru.vn')->send(new TestMail ($mess));
        //     return 'oke';
        // }  var a= "<h2>Phổ Điểm Môm "+bieudo+"</h2><iframe src='"+bieudo+"'frameborder='0'></iframe>";
        // http://localhost/xettuyen/public/api/
        function traCuu (){
            // $data = DB::table('')->where('matp',"=",$id)->get();
            $data = Thisinh::all();
            return view('tracuu',compact('data'));
        }
        public function xlsua(Request $Request){
            // dd($Request->all());
            $thisinh = Thisinh::query()->find($Request->id);
            $thisinh->SDT=$Request->SDT;
            $thisinh->SBD=$Request->SBD;
            $thisinh->ngay_sinh=$Request->ngaysinh;
            $thisinh->email=$Request->email;
            $thisinh->dia_chi_thuong_tru=$Request->diachithuongtru;
            $thisinh->dia_chi_tam_tru=$Request->diachitamtru;
            $thisinh->save();
            $lichsu = new Lichsu();
                $lichsu->tac_vu = 'Sửa Thông Tin Tài Khoản';
                $lichsu->thoi_gian = Carbon::now('Asia/Ho_Chi_Minh');  
                $lichsu->nguoi_thuc_hien = Auth::user()->name;
                $lichsu -> save();
            $data = Thisinh::query()->find($Request->id);
            return view('hoso',compact('data'));


        }
        public function tk($mon){
            
            $data = Thisinh::where($mon,0) ->count();
            $data1 = Thisinh::where($mon,1) ->count();
            $data2 = Thisinh::where($mon,2) ->count();
            $data3 = Thisinh::where($mon,3) ->count();
            $data4 = Thisinh::where($mon,4) ->count();
            $data5 = Thisinh::where($mon,5) ->count();
            $data6 = Thisinh::where($mon,6) ->count();
            $data7 = Thisinh::where($mon,7) ->count();
            $data8 = Thisinh::where($mon,8) ->count();
            $data9 = Thisinh::where($mon,9) ->count();
            $data10 = Thisinh::where($mon,10) ->count();
            $bd = array($data,$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,);
            // dd($bd);
            

            return view('bieudo',compact('bd'));
        }



    }








