<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumTrangThaiOnThisinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thisinh', function ($table) {
            $table->string('trang_thai_kiem_duyet')->default('Chưa duyệt');
            $table->string('tinh_trang_duyet')->default('Chưa duyệt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('thisinh', function($table) {
            $table->dropColumn('trang_thai_kiem_duyet');
            $table->dropColumn('tinh_trang_duyet');

         });
    }
}
