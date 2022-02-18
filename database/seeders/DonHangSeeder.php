<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DonHang;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        Donhang::create([
            'id' => 7,
            'ten_nguoi_nhan' => '',
            'dia_chi_nguoi_nhan' => '',
            'sdt_nguoi_nhan' => '',
            'ghi_chu' => '',
            'trang_thai' => 4,
            'tai_khoan_id' => 4,
            'tai_khoan_nhan_vien_id' => 3,
            'created_at' => '2022-01-11 10:27:40',
            'updated_at' => '2022-02-13 19:03:46',
            'deleted_at' => NULL
        ]);




        Donhang::create([
            'id' => 5,
            'ten_nguoi_nhan' => 'Nguyen Van Test',
            'dia_chi_nguoi_nhan' => '69 Huynh Thuc Khang, p. Ben Nghe, q.1, HCM',
            'sdt_nguoi_nhan' => '0903050401',
            'ghi_chu' => NULL,
            'trang_thai' => 3,
            'tai_khoan_id' => 3,
            'tai_khoan_nhan_vien_id' => 3,
            'created_at' => '2022-01-07 07:45:48',
            'updated_at' => '2022-01-15 04:04:59',
            'deleted_at' => NULL
        ]);


        Donhang::create([
            'id' => 9,
            'ten_nguoi_nhan' => 'test2',
            'dia_chi_nguoi_nhan' => '111 HCM',
            'sdt_nguoi_nhan' => '0123456789',
            'ghi_chu' => NULL,
            'trang_thai' => 4,
            'tai_khoan_id' => 3,
            'tai_khoan_nhan_vien_id' => 3,
            'created_at' => '2022-01-15 09:30:40',
            'updated_at' => '2022-01-25 02:01:34',
            'deleted_at' => NULL
        ]);



        Donhang::create([
            'id' => 10,
            'ten_nguoi_nhan' => 'test2',
            'dia_chi_nguoi_nhan' => '111 HCM',
            'sdt_nguoi_nhan' => '0123456789',
            'ghi_chu' => NULL,
            'trang_thai' => 3,
            'tai_khoan_id' => 3,
            'tai_khoan_nhan_vien_id' => 2,
            'created_at' => '2022-01-18 01:35:04',
            'updated_at' => '2022-01-17 19:57:48',
            'deleted_at' => NULL
        ]);

        Donhang::create([
            'id' => 13,
            'ten_nguoi_nhan' => 'Lê Vĩnh Tân',
            'dia_chi_nguoi_nhan' => 'HCM',
            'sdt_nguoi_nhan' => '0934961323',
            'ghi_chu' => NULL,
            'trang_thai' => 3,
            'tai_khoan_id' => 12,
            'tai_khoan_nhan_vien_id' => 2,
            'created_at' => '2022-02-12 07:51:30',
            'updated_at' => '2022-02-12 02:03:55',
            'deleted_at' => NULL
        ]);
    }
}
