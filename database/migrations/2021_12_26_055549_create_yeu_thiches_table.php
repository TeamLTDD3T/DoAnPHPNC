<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYeuThichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeu_thiches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tai_khoan_id');//Khóa ngoại
            $table->unsignedBigInteger('chi_tiet_san_pham_id');//Khóa ngoại
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
        Schema::dropIfExists('yeu_thiches');
    }
}
