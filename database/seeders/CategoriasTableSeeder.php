<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Ficción',
            'descripcion' => 'Libros de ficción.',
        ]);

        Categoria::create([
            'nombre' => 'Clásicos',
            'descripcion' => 'Libros clásicos de la literatura.',
        ]);

        Categoria::create([
            'nombre' => 'Ciencia Ficción',
            'descripcion' => 'Libros de ciencia ficción.',
        ]);

        Categoria::create([
            'nombre' => 'Literatura Infantil',
            'descripcion' => 'Libros para niños.',
        ]);
    }
}
