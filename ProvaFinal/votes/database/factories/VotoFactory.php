<?php

namespace Database\Factories;

use App\Models\Voto;
use Illuminate\Database\Eloquent\Factories\Factory;

class VotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1,1000),
            'tema_id' => random_int(1,1000),
            'opcao' => random_int(1,3),
            'data' => $this->faker->dateTime($max = 'now', $timezone = null),
        ];
    }
}
