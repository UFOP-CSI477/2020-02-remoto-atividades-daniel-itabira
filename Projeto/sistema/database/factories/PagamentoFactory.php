<?php

namespace Database\Factories;

use App\Models\Pagamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pagamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_remesa' => $this->faker->word(),
            'id_credor' => $this->faker->word(),
            'id_devedor' => $this->faker->word(),
            'valor_inicial' => $this->faker->word(),
            'valor_final' => $this->faker->word(),
            'status' => $this->faker->word(),
            'motivo' => $this->faker->word(),
        ];
    }
}
