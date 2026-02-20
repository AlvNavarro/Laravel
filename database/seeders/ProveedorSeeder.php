<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    \App\Models\Proveedor::create([
        'nombre_empresa' => 'Tecnología Global S.A.',
        'contacto' => 'Juan Pérez',
        'telefono' => '600111222',
        'email' => 'contacto@tecglobal.com'
    ]);

    \App\Models\Proveedor::create([
        'nombre_empresa' => 'Logística Express',
        'contacto' => 'María García',
        'telefono' => '655444333',
        'email' => 'info@logex.es'
    ]);

    \App\Models\Proveedor::create([
        'nombre_empresa' => 'Suministros Industriales',
        'contacto' => 'Carlos Ruiz',
        'telefono' => '611999888',
        'email' => 'ventas@sumindustria.com'
    ]);
}
}
