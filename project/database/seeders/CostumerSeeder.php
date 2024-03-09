<?php

// database/seeders/CostumerSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Costumer;
use App\Models\Device;


class CostumerSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $costumer = Costumer::factory()->create([
                'name' => 'Costumer ' . ($i + 1),
                'level' => rand(0, 5),
                'address' => 'Address ' . ($i + 1),
            ]);

            $device = Device::factory()->create(['costumer_id' => $costumer->id]);
        }
    }
}

