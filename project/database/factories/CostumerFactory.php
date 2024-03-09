<?php

namespace Database\Factories;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory; // ¡Asegúrate de importar HasFactory!

class CostumerFactory extends Factory
{
    use HasFactory; // ¡Asegúrate de usar HasFactory!

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'level' => $this->faker->numberBetween(0, 5),
            'address' => $this->faker->address,
        ];
    }
}
