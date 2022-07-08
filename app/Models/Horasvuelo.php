<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horasvuelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'horasvuelo',
        'nuevashoras',
        'horasvuelorestantes',
        'aeronave_id',
        'user_id',
    ];

    //registro de usuario 
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //registro de aeronave 
    public function aeronave()
    {
        return $this->belongsTo(Aeronave::class, 'aeronave_id');
    }
}
