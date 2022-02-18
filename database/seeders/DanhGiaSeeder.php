<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DanhGia;

class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Danhgia::create( [
            'id'=>7,
            'noi_dung'=>'Good!',
            'so_sao'=>5.00,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>1,
            'created_at'=>'2022-01-26 07:13:04',
            'updated_at'=>'2022-02-12 03:11:49',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Danhgia::create( [
            'id'=>4,
            'noi_dung'=>'very good',
            'so_sao'=>5.00,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>87,
            'created_at'=>'2022-01-25 08:35:59',
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Danhgia::create( [
            'id'=>5,
            'noi_dung'=>'Perfect',
            'so_sao'=>5.00,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>11,
            'created_at'=>'2022-01-25 08:38:56',
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Danhgia::create( [
            'id'=>6,
            'noi_dung'=>'Please success',
            'so_sao'=>5.00,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>92,
            'created_at'=>'2022-01-25 08:57:07',
            'updated_at'=>'2022-02-07 01:19:31',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Danhgia::create( [
            'id'=>11,
            'noi_dung'=>'Good!!!',
            'so_sao'=>5.00,
            'tai_khoan_id'=>12,
            'chi_tiet_san_pham_id'=>1,
            'created_at'=>'2022-02-12 10:24:37',
            'updated_at'=>'2022-02-12 03:34:33',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Danhgia::create( [
            'id'=>8,
            'noi_dung'=>'Good',
            'so_sao'=>4.00,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>1,
            'created_at'=>'2022-02-06 17:00:00',
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Danhgia::create( [
            'id'=>9,
            'noi_dung'=>'Perfect',
            'so_sao'=>5.00,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>1,
            'created_at'=>'2022-02-06 17:00:00',
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Danhgia::create( [
            'id'=>10,
            'noi_dung'=>'Chill',
            'so_sao'=>5.00,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>1,
            'created_at'=>'2022-02-06 17:00:00',
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
    }
}
