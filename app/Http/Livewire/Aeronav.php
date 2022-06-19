<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Aeronave;

class Aeronav extends Component
{
    use WithPagination;

    //variables
    public $buscar;

    //Busquedas
    protected $queryString = [
        'buscar' => ['except' => '']
    ];

    public function render()
    {
        //obtener listado de aeronaves 
        //$aeronaves = Aeronave::paginate(10);

        $aeronaves = Aeronave::where('nombre', 'like', '%'.$this->buscar . '%')
                            ->orWhere('tipo', 'like', '%'.$this->buscar . '%')
                            ->orWhere('matricula', 'like', '%'.$this->buscar . '%')
                            ->orWhere('estado', 'like', '%'.$this->buscar . '%')
                            ->paginate(4);

        //$query = $aeronaves->toSql();
        //$aeronaves = $aeronaves->paginate(10); //paginacion
                            

        return view('livewire.aeronav', [
            'aeronaves' => $aeronaves,
        ]);
    }

    //Actualizar tabla para corregir falla de busqueda
    public function updatingBuscar()
    {
        $this->resetPage();
    }


}
