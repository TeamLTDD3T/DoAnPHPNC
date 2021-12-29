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
        for ($i=1; $i <= 5; $i++) {
            $th= new ThuongHieu();
            $th->fill([
                'ten_thuong_hieu' => "Thương hiệu ".$i,
            ]);
            $th->save();
        }
    }
}
