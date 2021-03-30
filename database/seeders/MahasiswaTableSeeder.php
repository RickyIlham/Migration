<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\mahasiswa::factory(10)->create();
    }
}
