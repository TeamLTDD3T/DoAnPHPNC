<?php

namespace Database\Seeders;

use App\Models\HinhAnh;
use App\Models\LoaiTaiKhoan;
use App\Models\Size;
use App\Models\TaiKhoan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            BannerSeeder::class,
            LoaiSanPhamSeeder::class,
            ThuongHieuSeeder::class,
            MauSeeder::class,
            SizeSeeder::class,
            SanPhamSeeder::class,
            ChiTietSanPhamSeeder::class,
            LoaiTaiKhoanSeeder::class,
            TaiKhoanSeeder::class,
            DonHangSeeder::class,
            ChiTietDonHangSeeder::class,
            YeuThichSeeder::class,
            DanhGiaSeeder::class,
            HinhAnhSeeder::class,
        ]);

        
    }
}
