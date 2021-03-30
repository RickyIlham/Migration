<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MatakuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\matakuliah::factory(10)->create();
    }
}
