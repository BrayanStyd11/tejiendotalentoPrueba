<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeesPositions;

class EmployeePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeesPositions::create([
            "id_employee" => 1,
            "id_position" => 1,
            "id_boss" => 2,
        ]);

        EmployeesPositions::create([
            "id_employee" => 1,
            "id_position" => 2,
            "id_boss" => 2,
        ]);

        EmployeesPositions::create([
            "id_employee" => 1,
            "id_position" => 3,
            "id_boss" => 2,
        ]);
    }
}
