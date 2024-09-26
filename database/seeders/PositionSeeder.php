<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Positions;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Positions::create([
            "name" => "Director Creativo",
            "area" => "Marketing y estrategia",
        ]);

        Positions::create([
            "name" => "Diseñador Senior",
            "area" => "Diseño",
        ]);

        Positions::create([
            "name" => "Desarrollador Senior",
            "area" => "Tecnologia",
        ]);
    }
}
