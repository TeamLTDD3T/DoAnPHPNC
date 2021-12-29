<?php

namespace Database\Seeders;
use App\Models\Mau;
use Illuminate\Database\Seeder;

class MauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) {
            $m= new Mau();
            $m->fill([
                'ten_mau' => "Màu ".$i,
            ]);
            $m->save();
        }
    }
}
