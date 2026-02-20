<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    \App\Models\Empleado::create([
        'nombre' => 'Ana Martínez',
        'puesto' => 'Gerente de Ventas',
        'fecha_ingreso' => '2024-01-15',
        'salario' => 2500.00
    ]);

    \App\Models\Empleado::create([
        'nombre' => 'Pedro Sánchez',
        'puesto' => 'Soporte Técnico',
        'fecha_ingreso' => '2024-02-10',
        'salario' => 1800.50
    ]);
}
}
