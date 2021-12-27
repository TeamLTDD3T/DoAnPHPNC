<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('san_phams', function (Blueprint $table) {
            $table->foreign('loai_san_pham_id')->references('id')->on('loai_san_phams');
            $table->foreign('thuong_hieu_id')->references('id')->on('thuong_hieus');
        });
        Schema::table('chi_tiet_san_phams', function (Blueprint $table) {
            $table->foreign('san_pham_id')->references('id')->on('san_phams');
            $table->foreign('mau_id')->references('id')->on('maus');
            $table->foreign('size_id')->references('id')->on('sizes');
        });
        Schema::table('hinh_anhs', function (Blueprint $table) {
            $table->foreign('chi_tiet_san_pham_id')->references('id')->on('chi_tiet_san_phams');
        });
        Schema::table('tai_khoans', function (Blueprint $table) {
            $table->foreign('loai_tai_khoan_id')->references('id')->on('loai_tai_khoans');
        });
        Schema::table('danh_gias', function (Blueprint $table) {
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
            $table->foreign('chi_tiet_san_pham_id')->references('id')->on('chi_tiet_san_phams');
        });
        Schema::table('yeu_thiches', function (Blueprint $table) {
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
            $table->foreign('chi_tiet_san_pham_id')->references('id')->on('chi_tiet_san_phams');
        });
        Schema::table('don_hangs', function (Blueprint $table) {
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
        });
        Schema::table('chi_tiet_don_hangs', function (Blueprint $table) {
            $table->foreign('don_hang_id')->references('id')->on('don_hangs');
            $table->foreign('chi_tiet_san_pham_id')->references('id')->on('chi_tiet_san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('san_phams', function (Blueprint $table) {
            //
        });
    }
}
