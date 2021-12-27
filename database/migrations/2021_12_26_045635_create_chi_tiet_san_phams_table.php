<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_san_phams', function (Blueprint $table) {
            $table->id();
            $table->integer('so_luong');
            $table->unsignedBigInteger('san_pham_id');//Khóa ngoại
            $table->unsignedBigInteger('mau_id');//Khóa ngoại
            $table->unsignedBigInteger('size_id');//Khóa ngoại
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_san_phams');
    }
}


