<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SanPham;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=1; $i <= 5; $i++) {
        //     $sp=new SanPham;
        //     $sp->fill([
        //         'ten_san_pham' => "Sản phẩm ".$i,
        //         'mo_ta' => "Sản phẩm ".$i." Tốt nhất thế giới",
        //         'gia' => 10000,
        //         'loai_san_pham_id' => ($i-1)%5+1,
        //     ]);
        //     $sp->save();
        // }
    }
}
