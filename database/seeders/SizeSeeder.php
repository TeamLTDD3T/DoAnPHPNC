<?php

namespace Database\Seeders;
use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create( [
            'id'=>1,
            'ten_size'=>'XS',
            'created_at'=>'2022-01-18 17:00:00',
            'updated_at'=>'2022-02-09 23:25:34',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>2,
            'ten_size'=>'S',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-20 03:30:33',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>3,
            'ten_size'=>'M',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-19 00:53:29',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>4,
            'ten_size'=>'L',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-01 17:00:00',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>5,
            'ten_size'=>'XL',
            'created_at'=>'2022-01-01 17:00:00',
            'updated_at'=>'2022-01-01 17:00:00',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>7,
            'ten_size'=>'35',
            'created_at'=>'2022-01-03 04:05:42',
            'updated_at'=>'2022-01-03 04:05:42',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>8,
            'ten_size'=>'36',
            'created_at'=>'2022-01-03 04:05:48',
            'updated_at'=>'2022-01-03 04:05:48',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>9,
            'ten_size'=>'37',
            'created_at'=>'2022-01-03 04:05:54',
            'updated_at'=>'2022-01-03 04:05:54',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>10,
            'ten_size'=>'38',
            'created_at'=>'2022-01-03 04:05:59',
            'updated_at'=>'2022-01-03 04:05:59',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Size::create( [
            'id'=>11,
            'ten_size'=>'39',
            'created_at'=>'2022-01-03 04:06:05',
            'updated_at'=>'2022-01-19 00:54:05',
            'deleted_at'=>NULL
            ] );
            
            
    }
}
