<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create(['nombre' => 'Admin']);
        Role::create(['nombre' => 'Usuario']);
    }
}
