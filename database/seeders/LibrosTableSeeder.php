<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Libro::create([
            'titulo' => 'Cien Años de Soledad',
            'autor' => 'Gabriel García Márquez',
            'categoria_id' => 1, 
        ]);

        Libro::create([
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'categoria_id' => 2,
        ]);

        Libro::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'categoria_id' => 3,
        ]);

        Libro::create([
            'titulo' => 'El Principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'categoria_id' => 4,
        ]);

        Libro::create([
            'titulo' => 'Fahrenheit 451',
            'autor' => 'Ray Bradbury',
            'categoria_id' => 3,
        ]);
    }
}
