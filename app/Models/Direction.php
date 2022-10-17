<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direction extends Model
{
    use HasFactory;
    protected $fillable = ['direccion_id', 'direccion', 'id_estado'];

    public function direcciones()
    {
        return $this->belongsTo(Client::class, 'direccion_id', 'direccion_id');
    }
    public function estado()
    {
        return $this->belongsTo(State::class, 'id_estado', 'id_estado');
    }
}
