<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoaiTaiKhoan;

class LoaiTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loaitaikhoan::create( [
            'id'=>1,
            'ten_loai_tai_khoan'=>'Admin',
            'created_at'=>'2022-01-02 17:00:00',
            'updated_at'=>'2022-01-20 03:30:14',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Loaitaikhoan::create( [
            'id'=>2,
            'ten_loai_tai_khoan'=>'User',
            'created_at'=>'2022-01-02 17:00:00',
            'updated_at'=>'2022-01-20 03:30:14',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Loaitaikhoan::create( [
            'id'=>3,
            'ten_loai_tai_khoan'=>'Facebook User',
            'created_at'=>'2022-02-07 01:46:08',
            'updated_at'=>'2022-02-07 01:46:08',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Loaitaikhoan::create( [
            'id'=>4,
            'ten_loai_tai_khoan'=>'Google User',
            'created_at'=>'2022-02-07 01:46:19',
            'updated_at'=>'2022-02-07 01:46:33',
            'deleted_at'=>NULL
            ] );
    }
}
