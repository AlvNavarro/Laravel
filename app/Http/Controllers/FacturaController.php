<?php
namespace App\Http\Controllers;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller {
    public function index() {
    $facturas = \App\Models\Factura::with('cliente')->get();
    return view('facturas.index', compact('facturas'));
}

public function create() { 
    $clientes = \App\Models\Cliente::all();
    return view('facturas.create', compact('clientes')); 
}

public function store(Request $request) {
    $request->validate([
        'numero_factura' => 'required|unique:facturas',
        'cliente_id' => 'required|exists:clientes,id',
        'fecha' => 'required|date',
        'total' => 'required|numeric',
        'pdf' => 'nullable|mimes:pdf|max:2048' 
    ]);

    $datos = $request->all();

    if ($request->hasFile('pdf')) {

        $rutaPdf = $request->file('pdf')->store('facturas', 'public');
        $datos['pdf'] = $rutaPdf;
    }

    \App\Models\Factura::create($datos);

    return redirect()->route('facturas.index')->with('success', 'Factura generada correctamente');
}
}