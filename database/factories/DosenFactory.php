<?php

namespace Database\Factories;

use App\Models\dosen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\Blueprint;
use Illumiante\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Database\Factories\foreignid;

class DosenFactory extends Factory

{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    
    {
        $abc->define(Database\Factories\dosen::class, function (Faker\Generator $faker){

        return [
            
            'nidn' => Str::random(10),
            'nama' => $this->faker->name,
            'kode_prodi' => $abc(App\prodi::class)->create()->kode_prodi,
        ];
    });
    }
}
