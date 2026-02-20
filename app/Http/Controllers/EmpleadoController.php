<?php
namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller {
    public function index() {
    $empleados = \App\Models\Empleado::all();
    return view('empleados.index', compact('empleados'));
}

public function create() { return view('empleados.create'); }

public function store(Request $request) {
    $request->validate([
        'nombre' => 'required',
        'puesto' => 'required',
        'fecha_ingreso' => 'required|date',
        'salario' => 'required|numeric'
    ]);
    \App\Models\Empleado::create($request->all());
    return redirect()->route('empleados.index')->with('success', 'Empleado guardado');
} 
}