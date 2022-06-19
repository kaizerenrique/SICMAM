<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Aeronave;
use Illuminate\Http\Request;

class DashboardEstadisticas extends Component
{
    public function render()
    {
        $users_count = User::count();
        //$aeronaves_count = Aeronave::count();
        $aviones = Aeronave::where('tipo', 'avion')->count();
        $helicopteros = Aeronave::where('tipo', 'helicoptero')->count();

        //$data=session()->all();
        
        return view('livewire.dashboard-estadisticas',[
            'users_count' => $users_count,
            'aviones' => $aviones,
            'helicopteros' => $helicopteros,
        ]);
    }
}
