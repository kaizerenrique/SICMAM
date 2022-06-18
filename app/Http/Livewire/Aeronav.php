<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Aeronave;

class Aeronav extends Component
{
    use WithPagination;


    public function render()
    {
        //obtener listado de aeronaves 
        $aeronaves = Aeronave::paginate(10);

        return view('livewire.aeronav', [
            'aeronaves' => $aeronaves,
        ]);
    }
}
