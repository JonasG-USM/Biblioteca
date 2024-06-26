<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crear un administrador
        Usuario::create([
            'nombre' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), 
            'role_id' => 1, 
        ]);

        // Crear un usuario normal
        Usuario::create([
            'nombre' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'), 
            'role_id' => 2, 
        ]);

    }
}