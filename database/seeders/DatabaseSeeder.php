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
    $this->call([
        RoleSeeder::class,
        ProveedorSeeder::class,
        EmpleadoSeeder::class,
        FacturaSeeder::class,
    ]);
}
}