<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'fabricante',
        'horasvuelomotor',
        'horasvuelorestantesmotor',
    ];

    //aeronave al que pertenece
    public function aeronave()
    {
        return $this->belongsTo(Aeronave::class);
    }

    //Conponentes que le pertenecen
    public function componentes()
    {
        return $this->hasMany(Componentesmotor::class);
    }
}
