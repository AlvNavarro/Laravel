<?php
namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller {
    public function index() {
    $productos = Producto::all();
    return view('productos.index', compact('productos'));
}

public function create() {
    return view('productos.create');
}

public function store(Request $request) {
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
        'stock'  => 'required|integer'
    ]);
    Producto::create($request->all());
    return redirect()->route('productos.index')->with('success', 'Guardado correctamente');
}
}