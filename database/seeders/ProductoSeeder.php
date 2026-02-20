<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Producto::create([
        'nombre' => 'Laptop Pro 15"',
        'descripcion' => 'Procesador i7, 16GB RAM, 512GB SSD',
        'precio' => 1200.00,
        'stock' => 15
    ]);

    \App\Models\Producto::create([
        'nombre' => 'Monitor 27" 4K',
        'descripcion' => 'Panel IPS con precisión de color del 99%',
        'precio' => 350.50,
        'stock' => 20
    ]);

    \App\Models\Producto::create([
        'nombre' => 'Teclado Mecánico RGB',
        'descripcion' => 'Switches red, silencioso y ergonómico',
        'precio' => 85.00,
        'stock' => 50
    ]);
}
}
