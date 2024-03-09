<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['brand', 'model'];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }
}