<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            'email'=>'test2@gmail.com',
            'password'=>bcrypt('123456'),
            'hoten'=>'test2',
            'ngaysinh'=>'2000/1/1',
            'diachi'=>'111 HCM',
            'sdt'=>'0123456789',
            'loai_tai_khoan_id'=>'1',
            'created_at'=>new DateTime(),
        ];
        DB::table('tai_khoans')->insert($data);
    }
}
