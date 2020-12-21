<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; // 
class insertthisinh extends Seeder{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('thisinh')->insert([
            [
                'ho_ten'=>'Nguyễn Tiến Đạt',
                'ngay_sinh'=>'1999-9-22',
                'CMND'=>'071045737',
                'gioi_tinh'=>'Nam',
                'SDT'=>'0837561355',
                'email'=>'datnt721@wru.vn',
                'khuvuc'=>'KV2-NT',
                'doituong'=>'DT2',
                'tinh_thuong_tru'=>'Tỉnh Tuyên Quang',
                'quan_huyen_thuong_tru'=>'Huyện Cẩm Khê',
                'phuong_xa_thuong_tru'=>'Xã Sơn Tình',
                'dia_chi_thuong_tru'=>' Tổ 22 Phường Phan Thiết thành phố Tuyên Quang',
                'tinh_tam_tru'=>'Tỉnh Tuyên Quang',
                'quan_huyen_tam_tru'=>'Huyện Cẩm Khê',
                'phuong_xa_tam_tru'=>'Xã Sơn Tình',
                'dia_chi_tam_tru'=>' Tổ 22 Phường Phan Thiết thành phố Tuyên Quang',
                'truong_lop_12'=>'THPT Ỷ La',
                'ma_truong_lop_12'=>937,
                'ma_tinh_lop_12'=>22,
                'hanh_kiem_lop_12'=>'tot',
                'hoc_luc_lop_12'=>'gioi',
                'nam_tot_nghiep'=>2017,
                'nguyen_vong_1'=>'Ngành Công nghệ thông tin',
                'nguyen_vong_2'=>'Công nghệ sinh học',
                'nguyen_vong_3'=>'Ngành Kỹ thuật phần mềm',
                'toan'=>10,
                'van'=>10,
                'anh'=>10,
                'vat_ly'=>10,
                'hoa'=>10,
                'sinh'=>10,
                'su'=>10,
                'dia_ly'=>10,
                'GDCD'=>10,
                'hinh_anh'=>'/',
                'hoc_ba'=>'/',
                
            ],
        ]);
    }

}
