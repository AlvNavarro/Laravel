<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Factura;
use App\Models\Empleado;
use App\Models\Proveedor;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. USUARIO PRINCIPAL (Para entrar al panel)
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Alvaro',
                'password' => bcrypt('12345678'),
            ]
        );

        // 2. CLIENTES (5 registros)
        for ($i = 1; $i <= 5; $i++) {
            Cliente::create([
                'nombre' => "Cliente VIP $i",
                'email' => "cliente$i@gmail.com",
                'telefono' => "60011122$i",
                'direccion' => "Calle Principal $i"
            ]);
        }

        // 3. PRODUCTOS (5 registros)
        for ($i = 1; $i <= 5; $i++) {
            Producto::create([
                'nombre' => "Producto Tech $i",
                'descripcion' => "Descripción detallada del producto $i",
                'precio' => 15.99 * $i,
                'stock' => 10 * $i
            ]);
        }

        // 4. PROVEEDORES (Sincronizado con tus vistas de 'empresa')
for ($i = 1; $i <= 5; $i++) {
    \App\Models\Proveedor::create([
        'nombre' => "Proveedor $i S.L.",
        'contacto' => "Contacto $i",
        'email' => "proveedor$i@gmail.com",
        'telefono' => "60011122$i"
    ]);
}

        // 5. EMPLEADOS
        for ($i = 1; $i <= 5; $i++) {
    \App\Models\Empleado::create([
        'nombre' => "Empleado $i",
        'puesto' => "Especialista $i",
        'email' => "staff$i@crm.com",
        'telefono' => "70055544$i"
    ]);
}

        // 6. FACTURAS (Asociadas al cliente con ID 1)
        for ($i = 1; $i <= 5; $i++) {
    \App\Models\Factura::create([
        'numero' => "INV-00$i",
        'total' => 100 * $i,
        'fecha' => now(),
        'cliente_id' => 1
    ]);
}
    }
}