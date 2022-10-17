<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function direccion()
    {
        return $this->belongsTo(Direction::class, 'direccion_id', 'id');
    }
}
