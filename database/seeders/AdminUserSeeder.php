<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin1@example.com',
            'password' => Hash::make('senha_admin'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Administrador',
            'email' => 'admin2@example.com',
            'password' => Hash::make('senha_admin'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Administrador',
            'email' => 'admin3@example.com',
            'password' => Hash::make('senha_admin'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Administrador',
            'email' => 'admin4@example.com',
            'password' => Hash::make('senha_admin'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Administrador',
            'email' => 'admin5@.com',
            'password' => Hash::make('senha_admin'),
            'is_admin' => true,
        ]);
    }
}
