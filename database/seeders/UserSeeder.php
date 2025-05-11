<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Yisireth Murcia',
            'email' => 'yisireth95@gmail.com',
            'password' => Hash::make('12345'), // Asegúrate de usar Hash para la contraseña
            'rol' => 'admin', // Si tienes un campo rol en tu tabla users
            // 'avatar' => 'avatars/default.png',
            'telefono' => '3125719288',
        ]);
        User::create([
            'name' => 'Leder Ramos ',
            'email' => 'Leder@gmail.com',
            'password' => Hash::make('12345'), // Asegúrate de usar Hash para la contraseña
            'rol' => 'negocio', // Si tienes un campo rol en tu tabla users
            // 'avatar' => 'avatars/default.png',
            'telefono' => '3102662675',
        ]);
        User::create([
            'name' => 'Richar Armando',
            'email' => 'Richar@gmail.com',
            'password' => Hash::make('12345'), // Asegúrate de usar Hash para la contraseña
            'rol' => 'turista', // Si tienes un campo rol en tu tabla users
            // 'avatar' => 'avatars/default.png',
            'telefono' => '3102662675',
        ]);
    }
}
