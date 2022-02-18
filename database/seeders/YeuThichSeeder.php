<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\YeuThich; 

class YeuThichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Yeuthich::create( [
            'id'=>1,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>1,
            'trang_thai'=>0,
            'created_at'=>'2022-01-19 17:00:00',
            'updated_at'=>'2022-01-29 00:49:29'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>4,
            'tai_khoan_id'=>6,
            'chi_tiet_san_pham_id'=>2,
            'trang_thai'=>0,
            'created_at'=>'2022-01-19 17:00:00',
            'updated_at'=>'2022-01-19 17:00:00'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>5,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>6,
            'trang_thai'=>1,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-29 00:49:10'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>6,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>11,
            'trang_thai'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>7,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>81,
            'trang_thai'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-29 00:33:40'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>8,
            'tai_khoan_id'=>9,
            'chi_tiet_san_pham_id'=>1,
            'trang_thai'=>1,
            'created_at'=>'2022-01-28 08:20:25',
            'updated_at'=>'2022-01-29 01:47:29'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>9,
            'tai_khoan_id'=>9,
            'chi_tiet_san_pham_id'=>6,
            'trang_thai'=>0,
            'created_at'=>'2022-01-28 09:13:35',
            'updated_at'=>'2022-01-29 01:44:47'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>10,
            'tai_khoan_id'=>9,
            'chi_tiet_san_pham_id'=>16,
            'trang_thai'=>1,
            'created_at'=>'2022-01-28 09:13:50',
            'updated_at'=>'2022-01-29 01:42:01'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>11,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>86,
            'trang_thai'=>0,
            'created_at'=>'2022-01-28 12:06:28',
            'updated_at'=>'2022-01-29 00:44:42'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>12,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>16,
            'trang_thai'=>1,
            'created_at'=>'2022-01-29 06:48:09',
            'updated_at'=>'2022-01-29 00:49:21'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>13,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>21,
            'trang_thai'=>0,
            'created_at'=>'2022-01-29 06:48:14',
            'updated_at'=>'2022-01-28 23:48:47'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>14,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>96,
            'trang_thai'=>0,
            'created_at'=>'2022-01-29 06:48:36',
            'updated_at'=>'2022-01-28 23:48:41'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>15,
            'tai_khoan_id'=>3,
            'chi_tiet_san_pham_id'=>91,
            'trang_thai'=>0,
            'created_at'=>'2022-01-29 07:33:29',
            'updated_at'=>'2022-01-29 00:33:36'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>16,
            'tai_khoan_id'=>5,
            'chi_tiet_san_pham_id'=>1,
            'trang_thai'=>1,
            'created_at'=>'2022-01-29 10:47:22',
            'updated_at'=>NULL
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>17,
            'tai_khoan_id'=>5,
            'chi_tiet_san_pham_id'=>6,
            'trang_thai'=>1,
            'created_at'=>'2022-01-29 11:13:11',
            'updated_at'=>NULL
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>18,
            'tai_khoan_id'=>13,
            'chi_tiet_san_pham_id'=>1,
            'trang_thai'=>0,
            'created_at'=>'2022-02-12 08:44:00',
            'updated_at'=>'2022-02-12 01:44:01'
            ] );
            
            
                        
            Yeuthich::create( [
            'id'=>19,
            'tai_khoan_id'=>12,
            'chi_tiet_san_pham_id'=>1,
            'trang_thai'=>1,
            'created_at'=>'2022-02-12 08:59:37',
            'updated_at'=>'2022-02-12 03:02:19'
            ] );
    }
}
