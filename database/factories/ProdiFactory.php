<?php

namespace Database\Factories;

use App\Models\prodi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = prodi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $abc->define(Database\Factories\Prodi::class, function (Faker\Generator $faker){
        return [
            'kode_prodi' => Str::random(5),
            'program_studi' => Str::random(10),
        ];
    });
    }
}
