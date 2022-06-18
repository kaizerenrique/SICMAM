<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeronave extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'imagen', 'tipo', 'fabricante', 'primer_vuelo', 'introducido', 'retirado', 'estado', 'usuario', 'otros_usuarios' ];
}

