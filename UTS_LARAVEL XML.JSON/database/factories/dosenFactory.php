<?php

namespace Database\Factories;

use App\Models\dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class dosenFactory extends Factory
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
        return [
            'matakuliah_id'=> $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10']),
            'NIP' => $this->faker->numberBetween(7006001, 7006999),
            'Name' => $this->faker->Name,
            'sks'=> $this->faker->sks,
            'Address' => $this->faker->Address,
        ];
    }
}
