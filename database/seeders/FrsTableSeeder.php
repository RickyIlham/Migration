<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\frs::factory(10)->create();
    }
}
