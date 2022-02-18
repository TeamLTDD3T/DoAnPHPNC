<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TaiKhoan;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taikhoan::create( [
            'id'=>4,
            'email'=>'test3@gmail.com',
            'password'=>'$2y$10$Gs7kzdAuiOUiHjma./TJ4eaYkxuiRR.Ju6GDKey7KKB/OxP4flTHW',
            'hoten'=>'test3',
            'ngaysinh'=>'2022-01-04',
            'diachi'=>'',
            'sdt'=>'',
            'loai_tai_khoan_id'=>2,
            'token'=>'',
            'created_at'=>NULL,
            'updated_at'=>'2022-01-18 20:50:06',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Taikhoan::create( [
            'id'=>3,
            'email'=>'test2@gmail.com',
            'password'=>'$2y$10$3diRxcxBdTIHnLnF9LhOYuGdVnxxgFBD48q/Ts5Vk2TElGQI1HqoK',
            'hoten'=>'test123',
            'ngaysinh'=>'2001-01-01',
            'diachi'=>'HCM',
            'sdt'=>'0918012345',
            'loai_tai_khoan_id'=>1,
            'token'=>'',
            'created_at'=>'2022-01-03 23:30:37',
            'updated_at'=>'2022-02-12 02:05:02',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Taikhoan::create( [
            'id'=>13,
            'email'=>'0306191166@caothang.edu.vn',
            'password'=>'$2y$10$tg4A5O5ZC0X8vvmfeWylC./hx5QMZN/8yfszXdpHdbMEQiDPzpDwq',
            'hoten'=>'Tân Lê Vĩnh',
            'ngaysinh'=>'2022-02-07',
            'diachi'=>'',
            'sdt'=>'',
            'loai_tai_khoan_id'=>4,
            'token'=>'HHLNxKgyfWCFFDjPYWrhIgUJYI2PSwJag2BNEIwzKdADYCVOXVuwi6cnVUG6',
            'created_at'=>'2022-02-07 09:13:46',
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Taikhoan::create( [
            'id'=>6,
            'email'=>'test10@gmail.com',
            'password'=>'$2y$10$ZuRPPGIKNv/DsHsww2wg8OLWC1pV22zuvZ/J4Wg.rnK1dW3Ub7eim',
            'hoten'=>'test10',
            'ngaysinh'=>'2022-01-07',
            'diachi'=>'',
            'sdt'=>'',
            'loai_tai_khoan_id'=>2,
            'token'=>'SL3mVvdrt9gkYspJ8gqWbXv2pcEEyb2ruodaYHd3xjxSZMjlg563MwvzPiin',
            'created_at'=>NULL,
            'updated_at'=>'2022-01-21 23:42:44',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Taikhoan::create( [
            'id'=>8,
            'email'=>'test5@gmail.com',
            'password'=>'123456',
            'hoten'=>'test5',
            'ngaysinh'=>'2022-01-17',
            'diachi'=>'HCM',
            'sdt'=>'0923456789',
            'loai_tai_khoan_id'=>1,
            'token'=>'u57iYbGwLOwAe7CWbs86ZUVohoYRkcoTOpf9jvuHzf4WPvkFtS6Iw8xJX25E',
            'created_at'=>'2022-01-17 09:32:31',
            'updated_at'=>'2022-01-30 02:02:34',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Taikhoan::create( [
            'id'=>12,
            'email'=>'levinhtan8@gmail.com',
            'password'=>'$2y$10$euqInpC3OTRDgWZGvp8L8e9gyozKkutDBUdb4nzHRw3Vw7vruitQS',
            'hoten'=>'Lê Vĩnh Tân',
            'ngaysinh'=>'2022-02-07',
            'diachi'=>'',
            'sdt'=>'',
            'loai_tai_khoan_id'=>3,
            'token'=>'JheD4CJ1wSWDn38kEnEBEQxUnqaz1awfERkHr3S92USk3q70b3InnzNMnzXX',
            'created_at'=>'2022-02-07 09:10:13',
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
    }
}
