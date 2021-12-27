<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoaiSanPham;

class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) {
            $lsp= new LoaiSanPham;
            $lsp->fill([
                'ten_loai_san_pham' => "Loại sản phẩm ".$i,
            ]);
            $lsp->save();
        }
    }
}
