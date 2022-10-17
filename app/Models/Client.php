<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{

    static $rules = [
        'Nombre' => 'required',
        'Apellido' => 'required',
        "email" => ["required", "unique"],
        'telefono' => 'required',
    ];
    use HasFactory;
    protected $fillable = ['Nombre', 'Apellido', 'telefono', 'direccion_id', 'email'];

    public function direccion()
    {
        return $this->belongsTo(Direction::class, 'direccion_id');
    }
}
