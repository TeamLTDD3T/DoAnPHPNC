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
        Loaisanpham::create( [
            'id'=>1,
            'ten_loai_san_pham'=>'Shirt',
            'hinh_anh_loai_sp'=>'image/1/xB0YOthn1JxlHlx9KD3mM7N0AnmOyFLaXazUKgxM.jpg',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-04 02:05:23',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Loaisanpham::create( [
            'id'=>2,
            'ten_loai_san_pham'=>'T-Shirt',
            'hinh_anh_loai_sp'=>'image/2/b8LYcNnOWfA5np93Xl83njDSTRudjPocStjFXUdC.jpg',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-04 02:05:33',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Loaisanpham::create( [
            'id'=>3,
            'ten_loai_san_pham'=>'Pant',
            'hinh_anh_loai_sp'=>'image/3/yWNYpyKWeCu6FGgCJpuAVsvTGCammogB8PYOZeS1.jpg',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-04 02:05:41',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Loaisanpham::create( [
            'id'=>4,
            'ten_loai_san_pham'=>'Sneaker',
            'hinh_anh_loai_sp'=>'image/4/xXcfuVKNvKalZ8tTbpVPq5o1FAC33W1wUYVBdmtZ.jpg',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-04 02:05:50',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Loaisanpham::create( [
            'id'=>5,
            'ten_loai_san_pham'=>'Outerwear',
            'hinh_anh_loai_sp'=>'image/5/WemY7GRTbyf0aFFjsYsbDwEbH2bFRxCluuvfT6Q1.jpg',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-30 02:01:26',
            'deleted_at'=>NULL
            ] );
    }
}
