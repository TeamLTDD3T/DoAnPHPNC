<?php

namespace Database\Seeders;

use App\Models\ThuongHieu;
use Illuminate\Database\Seeder;

class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thuonghieu::create( [
            'id'=>1,
            'ten_thuong_hieu'=>'Nike',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-01 17:00:00',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Thuonghieu::create( [
            'id'=>2,
            'ten_thuong_hieu'=>'Adidas',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-01 17:00:00',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Thuonghieu::create( [
            'id'=>3,
            'ten_thuong_hieu'=>'H&M',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-02-06 23:36:15',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Thuonghieu::create( [
            'id'=>4,
            'ten_thuong_hieu'=>'Under Armour',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-02-06 23:36:15',
            'deleted_at'=>NULL
            ] );
    }
}
