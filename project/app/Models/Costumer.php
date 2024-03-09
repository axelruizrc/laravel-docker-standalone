<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Costumer extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'level', 'address'];

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
