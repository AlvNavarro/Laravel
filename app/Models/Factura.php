<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_factura', 
        'cliente_id', 
        'fecha', 
        'total'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}