<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employees;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employees::create([
            'name' => 'Brayan',
            'lastname' => 'Triana',
            'document' => '1026307251',
            'phone' => '3242342821',
            'city' => 'Bogotá',
            'department' => 'Bogotá',
            'address' => 'Cra 93 B # 128 b 23',
            'id_rol' => '3',
        ]);

        Employees::create([
            'name' => 'Kevin',
            'lastname' => 'Buelvas',
            'document' => '52873409',
            'phone' => '3007819686',
            'city' => 'Bogotá',
            'department' => 'Bogotá',
            'address' => 'Cra 93 B # 128 b 23',
            'id_rol' => '2',
        ]);
    }
}
