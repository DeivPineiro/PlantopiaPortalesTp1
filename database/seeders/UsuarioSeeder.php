<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            [
                'id' => 1,
                'name' => 'David Piñeiro',
                'email' => 'david.pineiro@davinci.edu.ar',
                'editor'=> 1,
                'password' => Hash::make('123456'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'id' => 2,
                'name' => 'Lucas Orlando',
                'email' => 'lucas.orlando@davinci.edu.ar',
                'editor'=> 1,
                'password' => Hash::make('123456'), 
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 3,
                'name' => 'Lucia Muñoz',
                'email' => 'lucia.munoz@davinci.edu.ar',
                'editor'=> 1,
                'password' => Hash::make('123456'), 
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'id' => 4,
                'name' => 'Santiago Gallino',
                'email' => 'santiago.gallino@davinci.edu.ar',
                'editor'=> 1,
                'password' => Hash::make('123456'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Fulano',
                'email' => 'fulano@davinci.edu.ar',
                'editor'=> 0,
                'password' => Hash::make('123456'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],


            ]);
    }
}
