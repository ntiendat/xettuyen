<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThisinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thisinh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten');
            $table->string('ngay_sinh');
            $table->string('CMND');
            $table->string('gioi_tinh');
            $table->string('SDT');
            $table->string('email');
            $table->string('khuvuc');
            $table->string('doituong');
            $table->string('tinh_thuong_tru');
            $table->string('quan_huyen_thuong_tru');
            $table->string('phuong_xa_thuong_tru');
            $table->string('dia_chi_thuong_tru');
            $table->string('tinh_tam_tru');
            $table->string('quan_huyen_tam_tru');
            $table->string('phuong_xa_tam_tru');
            $table->string('dia_chi_tam_tru');
            $table->string('truong_lop_12');
            $table->integer('ma_truong_lop_12');
            $table->integer('ma_tinh_lop_12');
            $table->string('hanh_kiem_lop_12');
            $table->string('hoc_luc_lop_12');
            $table->integer('nam_tot_nghiep');
            $table->string('nguyen_vong_1');
            $table->string('nguyen_vong_2')->nullable();
            $table->string('nguyen_vong_3')->nullable();
            $table->float('toan')->nullable();
            $table->float('van')->nullable();
            $table->float('anh')->nullable();
            $table->float('vat_ly')->nullable();
            $table->float('hoa')->nullable();
            $table->float('sinh')->nullable();
            $table->float('su')->nullable();
            $table->float('dia_ly')->nullable();
            $table->float('GDCD')->nullable();
            $table->string('hinh_anh');
            $table->string('hoc_ba');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thisinh');
    }
}
