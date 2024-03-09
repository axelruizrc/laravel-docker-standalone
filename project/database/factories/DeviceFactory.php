<?php

// database/factories/DeviceFactory.ph
namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Asegúrate de importar HasFactory

class DeviceFactory extends Factory
{
    use HasFactory; // Asegúrate de usar HasFactory
    protected $model = Device::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->word, 
            'model' => $this->faker->word, 
        ];
    }
}
