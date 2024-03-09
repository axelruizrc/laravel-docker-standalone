<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Costumer;
use App\Models\Device;

class CostumerTest extends TestCase
{
    public function test_costumer_can_have_multiple_devices()
    {
        $costumer = Costumer::factory()->create();
        $device1 = Device::factory()->create(['costumer_id' => $costumer->id]);
        $device2 = Device::factory()->create(['costumer_id' => $costumer->id]);

        $this->assertCount(2, $costumer->devices);
        $this->assertTrue($costumer->devices->contains($device1));
        $this->assertTrue($costumer->devices->contains($device2));
    }

    public function test_costumer_can_have_no_device()
    {
        $costumer = Costumer::factory()->create();

        $this->assertCount(0, $costumer->devices);
    }
}
