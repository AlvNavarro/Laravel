<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Muestra la lista de clientes (Paso 11 de tu guía)
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // Muestra el formulario para crear un cliente
    public function create()
    {
        return view('clientes.create');
    }

    // --- ESTO ES EL PASO 3: GUARDAR EN BASE DE DATOS ---
    public function store(Request $request)
    {
        // 1. Validamos los datos según los requisitos del proyecto [cite: 7]
        $request->validate([
            'nombre'    => 'required|string|max:255',
            'email'     => 'required|email|unique:clientes',
            'telefono'  => 'required|string',
            'direccion' => 'required|string',
        ]);

        // 2. Creamos el registro en MySQL [cite: 16]
        Cliente::create($request->all());

        // 3. Redireccionamos con un mensaje de éxito
        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente creado correctamente.');
    }
}