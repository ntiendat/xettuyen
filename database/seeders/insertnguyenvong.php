<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; // 
class insertnguyenvong extends Seeder{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('nguyenvong')->insert([
            [
                'nguyen_vong'=>'Ngành Công nghệ thông tin',
                'khoi_xet_tuyen'=>'A',
                'diem_xet_tuyen'=>'22.75',
            ],
            [
                'nguyen_vong'=>'Ngành Kỹ thuật phần mềm',
                'khoi_xet_tuyen'=>'B',
                'diem_xet_tuyen'=>'23.75',
            ],
            [
                'nguyen_vong'=>'Ngành Hệ thống thông tin',
                'khoi_xet_tuyen'=>'C',
                'diem_xet_tuyen'=>'24.75',
            ],
            [
                'nguyen_vong'=>'Công nghệ sinh học',
                'khoi_xet_tuyen'=>'D',
                'diem_xet_tuyen'=>'25.75',
            ],
        ]);
    }

}
