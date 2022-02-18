<?php

namespace Database\Seeders;
use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create( [
            'id'=>1,
            'ten_banner'=>'Banner-1',
            'hinh_anh_banner'=>'image/1/Xk6y63I5LLWL076jyMTDcB2RjKFN3CgG9CJfXU0q.jpg',
            'created_at'=>'2022-01-30 01:37:15',
            'updated_at'=>'2022-01-30 01:40:17',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Banner::create( [
            'id'=>3,
            'ten_banner'=>'Banner-2',
            'hinh_anh_banner'=>'image/3/d3naWihWP5djgvOucYrxWIyuDecCpu0rvItFcFKj.jpg',
            'created_at'=>'2022-01-30 01:39:32',
            'updated_at'=>'2022-01-30 01:40:25',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Banner::create( [
            'id'=>4,
            'ten_banner'=>'Banner-3',
            'hinh_anh_banner'=>'image/4/FvSawM4hVAgxMnER8Aj0L86ldWddq0aDuyaRnRtH.jpg',
            'created_at'=>'2022-01-30 01:39:49',
            'updated_at'=>'2022-01-30 01:40:31',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Banner::create( [
            'id'=>5,
            'ten_banner'=>'Banner-4',
            'hinh_anh_banner'=>'image/5/6Q55Uf3yDNU0z1zYwGii5CDgWhhzBdUSpdppmIhW.jpg',
            'created_at'=>'2022-01-30 01:40:03',
            'updated_at'=>'2022-01-30 02:04:27',
            'deleted_at'=>NULL
            ] );
            
            
    }
}
