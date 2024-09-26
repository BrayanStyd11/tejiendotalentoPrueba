<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            "name" => "Presidente",
        ]);

        Roles::create([
            "name" => "Jefe de area",
        ]);

        Roles::create([
            "name" => "Junior",
        ]);
    }
}
