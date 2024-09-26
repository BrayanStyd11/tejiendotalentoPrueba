<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            "email" => "admin@gmail.com",
            "password" => Hash::make('123456'),
            "name" => "Administrador",
            "id_rol" => 1
        ]);
        $user->saveOrFail();
    }
}
