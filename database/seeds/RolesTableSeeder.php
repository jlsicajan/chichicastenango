<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'Administrador';
        $admin->display_name = 'Administrador'; // optional
        $admin->description  = 'El administrador podra ver todo lo que han ingresado los trabajadores'; // optional
        $admin->save();
        
        $user = User::find(1);
        $user->attachRole($admin);
        
        $user = User::find(2);
        $user->attachRole($admin);

        $worker = new \App\Role();
        $worker->name         = 'Trabajador';
        $worker->display_name = 'Trabajador'; // optional
        $worker->description  = 'El trabajador solo podra ingresar su reporte diario'; // optional
        $worker->save();

    }
}
