<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Aeronave;
use App\Models\Motor;

class ConfigInicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles del Sistema
        $admin = Role::create(['name' => 'Administrador']);


        //Permisos del sistema
        Permission::create(['name' => 'MenuAdministrador'])->syncRoles([$admin]);
        
        //Comprobar si el usuario existe
        $useradmin= User::where('email','kayserenrique@gmail.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }

        //Crear usuario administrador
        User::create([
            'name' => 'Oliver Gomez',
            'email' => 'kayserenrique@gmail.com',
            'password' => bcrypt('123456789'),
            'email_verified_at' => '2022-02-26 20:48:29'
        ])->assignRole('Administrador');

        //Aeronave Registro 
        Aeronave::create([
            'nombre' => 'A380',
            'tipo' => 'Avión comercial',
            'matricula' => '01010236YV',
            'fabricante' => 'Airbus',
            'primer_vuelo' => '2022-02-26 20:48:29',
            'introducido' => '2022-02-26 20:48:29',
            'estado' => 'Operativo',
            'mantenimientoProgramado' => '2022-10-26 20:48:29',
            'horasvuelo' => 2000.00,
            'horasvuelorestantes' => 1800.00,
            'usuario' => 'Corpoelec',
            'otros_usuarios' => 'Ninguno',
        ]);

        Aeronave::create([
            'nombre' => 'A380',
            'tipo' => 'Avión comercial',
            'matricula' => '01010238YV',
            'fabricante' => 'Airbus',
            'primer_vuelo' => '2022-02-26 20:48:29',
            'introducido' => '2022-02-26 20:48:29',
            'estado' => 'Mantenimiento',
            'mantenimientoProgramado' => '2022-09-26 20:48:29',
            'horasvuelo' => 2000.00,
            'horasvuelorestantes' => 1700.00,
            'usuario' => 'Corpoelec',
            'otros_usuarios' => 'Ninguno',
        ]);

        Motor::create([
            'nombre' => 'F100',
            'tipo' => 'Turbofan',
            'fabricante' => 'Pratt & Whitney',
            'horasvuelomotor' => '1500',
            'horasvuelorestantesmotor' => '1300',
            'aeronave_id' => 1,
        ]);

        Motor::create([
            'nombre' => 'F100',
            'tipo' => 'Turbofan',
            'fabricante' => 'Pratt & Whitney',
            'horasvuelomotor' => '1500',
            'horasvuelorestantesmotor' => '1200',
            'aeronave_id' => 2,
        ]);


    }
}
