<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\prodi::factory(10)->create();

    }
}
