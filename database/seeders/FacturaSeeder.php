<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Factura;

class FacturaSeeder extends Seeder
{
    public function run(): void
    {
        Factura::create([
            'cliente_id' => 1,
            'numero_factura' => 'FAC-2026-001',
            'fecha' => '2026-02-20',
            'total' => 1250.50,
        ]);

        Factura::create([
            'cliente_id' => 1,
            'numero_factura' => 'FAC-2026-002',
            'fecha' => '2026-02-21',
            'total' => 450.00,
        ]);
    }
}