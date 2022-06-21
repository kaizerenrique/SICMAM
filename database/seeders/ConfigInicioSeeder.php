<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

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


    }
}
