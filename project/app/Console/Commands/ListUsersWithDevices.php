<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Costumer;

class ListUsersWithDevices extends Command
{
    protected $signature = 'users:list';

    protected $description = 'List users with their devices';

    public function handle()
    {
        $costumers = Costumer::all();
        
        foreach ($costumers as $costumer) {
            $this->line("Nombre: {$costumer->name}");

            if ($costumer->devices->isEmpty()) { 
                $this->line("  No tiene dispositivos.");
            } else {
                $this->line("  Dispositivos");
                foreach ($costumer->devices as $device) { 
                    $this->line("   - {$device->brand} {$device->model}");
                }
            }
        }
    }
}
