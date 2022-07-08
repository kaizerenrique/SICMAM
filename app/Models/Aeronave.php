<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeronave extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'imagen', 
        'tipo', 
        'matricula', 
        'fabricante', 
        'primer_vuelo', 
        'introducido', 
        'estado',
        'mantenimientoProgramado',
        'horasvuelo',
        'horasvuelorestantes', 
        'usuario', 
        'otros_usuarios', 
    ];

    //Conponentes que le pertenecen
    public function motores()
    {
        return $this->hasMany(Motor::class);
    }

    //el motor de la aeronave tiene componentes   
    public function componentes()
    {
        return $this->hasManyThrough(Componentesmotor::class, Motor::class);
    }

    //Registro de horas de vuelo
    public function registrodehoras()
    {
        return $this->hasMany(Horasvuelo::class);
    }
}

