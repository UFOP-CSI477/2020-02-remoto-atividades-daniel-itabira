<?php

namespace Database\Factories;

use App\Models\Devedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Devedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_devedor' => $this->faker->word(),
            'nome_devedor' => $this->faker->word(),
            'cnpj_devedor' => $this->faker->word(),
         ];
    }
}
