<?php
namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller {
    public function index() {
    $proveedores = \App\Models\Proveedor::all();
    return view('proveedores.index', compact('proveedores'));
}

public function create() { return view('proveedores.create'); }

public function store(Request $request) {
    $request->validate([
        'nombre_empresa' => 'required',
        'contacto' => 'required',
        'telefono' => 'required',
        'email' => 'required|email'
    ]);
    \App\Models\Proveedor::create($request->all());
    return redirect()->route('proveedores.index')->with('success', 'Proveedor guardado');
}
}