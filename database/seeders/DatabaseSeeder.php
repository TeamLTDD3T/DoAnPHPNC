<?php

namespace Database\Seeders;

use App\Models\Size;
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
            LoaiSanPhamSeeder::class,
            ThuongHieuSeeder::class,
            MauSeeder::class,
            SizeSeeder::class,
            SanPhamSeeder::class,
            ChiTietSanPhamSeeder::class
        ]);
    }
}
