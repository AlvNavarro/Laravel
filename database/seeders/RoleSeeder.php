<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {

        User::create([
            'name' => 'Admin CRM',
            'email' => 'admin@crm.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Usuario CRM',
            'email' => 'user@crm.com',
            'password' => Hash::make('user123'),
            'role' => 'usuario',
        ]);
    }
}