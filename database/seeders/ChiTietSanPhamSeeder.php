<?php

namespace Database\Seeders;

use App\Models\ChiTietSanPham;
use Illuminate\Database\Seeder;

class ChiTietSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) {
            $sp=new ChiTietSanPham();
            $sp->fill([
                'so_luong' => 100,
                'san_pham_id' => ($i-1)%5+1,
                'mau_id' => ($i-1)%5+1,
                'size_id' => ($i-1)%5+1,
            ]);
            $sp->save();
        }
    }
}
