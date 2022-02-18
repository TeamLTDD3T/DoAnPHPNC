<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChiTietDonHang;

class ChiTietDonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Chitietdonhang::create([
            'id' => 15,
            'so_luong' => 1,
            'gia' => 40.00,
            'trang_thai_danh_gia' => 0,
            'don_hang_id' => 7,
            'chi_tiet_san_pham_id' => 6,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);




        Chitietdonhang::create([
            'id' => 24,
            'so_luong' => 2,
            'gia' => 40.00,
            'trang_thai_danh_gia' => 1,
            'don_hang_id' => 5,
            'chi_tiet_san_pham_id' => 1,
            'created_at' => NULL,
            'updated_at' => '2022-01-26 00:13:04'
        ]);



        Chitietdonhang::create([
            'id' => 11,
            'so_luong' => 1,
            'gia' => 320.00,
            'trang_thai_danh_gia' => 1,
            'don_hang_id' => 5,
            'chi_tiet_san_pham_id' => 92,
            'created_at' => NULL,
            'updated_at' => '2022-01-25 01:57:07'
        ]);



        Chitietdonhang::create([
            'id' => 10,
            'so_luong' => 5,
            'gia' => 829.00,
            'trang_thai_danh_gia' => 1,
            'don_hang_id' => 5,
            'chi_tiet_san_pham_id' => 87,
            'created_at' => NULL,
            'updated_at' => '2022-01-25 01:35:59'
        ]);



        Chitietdonhang::create([
            'id' => 28,
            'so_luong' => 3,
            'gia' => 40.00,
            'trang_thai_danh_gia' => 0,
            'don_hang_id' => 9,
            'chi_tiet_san_pham_id' => 2,
            'created_at' => NULL,
            'updated_at' => '2022-01-17 18:29:44'
        ]);



        Chitietdonhang::create([
            'id' => 31,
            'so_luong' => 3,
            'gia' => 60.00,
            'trang_thai_danh_gia' => 1,
            'don_hang_id' => 10,
            'chi_tiet_san_pham_id' => 11,
            'created_at' => NULL,
            'updated_at' => '2022-01-25 01:38:56'
        ]);



        Chitietdonhang::create([
            'id' => 45,
            'so_luong' => 1,
            'gia' => 40.00,
            'trang_thai_danh_gia' => 0,
            'don_hang_id' => 13,
            'chi_tiet_san_pham_id' => 1,
            'created_at' => NULL,
            'updated_at' => '2022-02-12 03:34:33'
        ]);
    }
}
