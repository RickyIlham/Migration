<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\jadwal::factory(10)->create();
    }
}
