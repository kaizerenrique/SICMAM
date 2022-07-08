<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Aeronave;
use App\Models\Horasvuelo;

class Aeronav extends Component
{
    use WithPagination;

    //variables
    public $buscar;
    public $titulo;
    public $nuevashoras;
    public $aeronave;

    public $modalhoras = false;
    public $modalaeronave = false;

    //Busquedas
    protected $queryString = [
        'buscar' => ['except' => '']
    ];

    public function render()
    {
        //obtener listado de aeronaves 

        $aeronaves = Aeronave::where('nombre', 'like', '%'.$this->buscar . '%')
                            ->orWhere('tipo', 'like', '%'.$this->buscar . '%')
                            ->orWhere('matricula', 'like', '%'.$this->buscar . '%')
                            ->orWhere('estado', 'like', '%'.$this->buscar . '%')
                            ->paginate(8);

        return view('livewire.aeronav', [
            'aeronaves' => $aeronaves,
        ]);
    }

    //Actualizar tabla para corregir falla de busqueda
    public function updatingBuscar()
    {
        $this->resetPage();
    }

    //activar modal sobre las horas de vuelo
    public function modalhorasvuelo($id)
    {
        $resul = Aeronave::find($id);
        $this->reset(['nuevashoras']);
        $this->titulo = $resul->nombre.' '.$resul->matricula;
        $this->identificador = $resul->id;
        $this->horasvuelo = $resul->horasvuelo;
        $this->horasvuelorestantes = $resul->horasvuelorestantes;
        $this->modalhoras = true;
    }

    // funcion que registra las horas de vuelo
    public function restarhoras()
    {
        $this->validate([
            'identificador' => 'required',
            'horasvuelo' => 'required',
            'horasvuelorestantes' => 'required',
            'nuevashoras' => 'required|numeric|between:0,99.99',
        ]);

        $resul = Aeronave::find($this->identificador);

        $horas = $resul->horasvuelorestantes - $this->nuevashoras;

        $resul->update([
            'horasvuelorestantes' => $horas,            
        ]);

        $idregistrador = auth()->user()->id;

        $horario = Horasvuelo::create([
            'horasvuelo' => $this->horasvuelorestantes,
            'nuevashoras' => $this->nuevashoras,
            'horasvuelorestantes' => $horas,
            'aeronave_id' => $this->identificador,
            'user_id' => auth()->user()->id,
        ]);

        $this->modalhoras = false;
    }

    //despliega el formulario para el registro de las aeronaves
    public function agregaraeronave()
    {
        $this->titulo = 'Nuevo';

        $this->reset(['aeronave']);
        $this->modalaeronave = true;
    }

    //reglas de validacion
    protected $rules = [
        'aeronave.nombre'=> 'required|string|min:3',
        'aeronave.imagen'=> 'nullable',
        'aeronave.tipo'=> 'required',
        'aeronave.matricula'=> 'required|string|min:3',
        'aeronave.fabricante'=> 'required|string|min:3',
        'aeronave.primer_vuelo'=> 'required',
        'aeronave.introducido'=> 'required',
        'aeronave.estado'=> 'required',
        'aeronave.mantenimientoProgramado'=> 'required',
        'aeronave.horasvuelo'=> 'required|numeric|between:0,99999.99',
        'aeronave.horasvuelorestantes'=> 'required|numeric|between:0,99999.99',
        'aeronave.usuario'=> 'required',
        'aeronave.otros_usuarios'=> 'nullable|string|min:4',
    ];

    //funcion que registra las aeronaves
    public function guardaraeronave()
    {
        $this->validate();

        Aeronave::create([
            'nombre' => $this->aeronave['nombre'],
            'imagen' => $this->aeronave['imagen'] ?? null,
            'tipo' => $this->aeronave['tipo'],
            'matricula' => $this->aeronave['matricula'],
            'fabricante' => $this->aeronave['fabricante'],
            'primer_vuelo' => $this->aeronave['primer_vuelo'],
            'introducido' => $this->aeronave['introducido'],
            'estado' => $this->aeronave['estado'],
            'mantenimientoProgramado' => $this->aeronave['mantenimientoProgramado'],
            'horasvuelo' => $this->aeronave['horasvuelo'],
            'horasvuelorestantes' => $this->aeronave['horasvuelorestantes'],
            'usuario' => $this->aeronave['usuario'],
            'otros_usuarios' => $this->aeronave['otros_usuarios'] ?? null
        ]);

        $this->modalaeronave = false;
    }

    public function editaraeronave(Aeronave $aeronave)
    {
        $this->titulo = 'Editar';

        $this->aeronave = $aeronave;
        $this->modalaeronave = true;
    }
}
