<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nguoi_nhan');
            $table->string('dia_chi_nguoi_nhan');
            $table->string('sdt_nguoi_nhan');
            $table->string('ghi_chu');
            $table->integer('trang_thai');
            $table->unsignedBigInteger('tai_khoan_nhan_vien_id');
            $table->unsignedBigInteger('tai_khoan_id');//Khóa ngoại
            $table->unsignedBigInteger('tai_khoan_nhan_vien_id');//Khóa ngoại
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_hangs');
    }
}
