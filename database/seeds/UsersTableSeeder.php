<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'sicajancoy@gmail.com',
            'password' => bcrypt('super.16'),
        ]);
        DB::table('users')->insert([
            'name' => 'Fabian Sicajan Coy',
            'email' => 'fabian',
            'password' => bcrypt('12fabian78'),
        ]);
    }
}
