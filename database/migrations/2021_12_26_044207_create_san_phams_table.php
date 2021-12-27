<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->string('mo_ta');
            $table->float('gia');
            $table->unsignedBigInteger('loai_san_pham_id');//Khóa ngoại
            //$table->foreignId('loai_san_pham_id'); cách ghi ngắn hơn
            $table->unsignedBigInteger('thuong_hieu_id');//Khóa ngoại
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
        Schema::dropIfExists('san_phams');
    }
}
