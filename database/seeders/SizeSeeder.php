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
        for ($i=1; $i <= 5; $i++) {
            $s= new Size();
            $s->fill([
                'ten_size' => "Size ".$i,
            ]);
            $s->save();
        }
    }
}
