<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componentesmotor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    //motor al que pertenece
    public function motor()
    {
        return $this->belongsTo(Motor::class);
    }
}
