<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Importante para gestionar archivos

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(10); 
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        // 1. Validación avanzada (Requisito: Validar correctamente)
        $request->validate([
            'nombre'        => 'required|string|max:255',
            'email'         => 'required|email|unique:clientes',
            'telefono'      => 'required|string',
            'direccion'     => 'required|string',
            'foto'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Max 2MB
            'documento_pdf' => 'nullable|mimes:pdf|max:5000', // Max 5MB
        ]);

        // 2. Recogemos los datos excepto los archivos por ahora
        $data = $request->except(['foto', 'documento_pdf']);

        // 3. Subida de Imagen (Requisito: Subida de imágenes)
        if ($request->hasFile('foto')) {
            // Guarda la foto en storage/app/public/fotos_clientes
            $path = $request->file('foto')->store('fotos_clientes', 'public');
            $data['foto'] = $path;
        }

        // 4. Subida de PDF (Requisito: Subida y gestión de archivos)
        if ($request->hasFile('documento_pdf')) {
            // Guarda el PDF en storage/app/public/pdfs_clientes
            $path = $request->file('documento_pdf')->store('pdfs_clientes', 'public');
            $data['documento_pdf'] = $path;
        }

        // 5. Crear el registro con las rutas de los archivos
        Cliente::create($data);

        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente creado con foto y documento correctamente.');
    }

    // Añadimos el método destroy para probar los permisos de Admin
    public function destroy(Cliente $cliente)
    {
        // Opcional: Borrar los archivos del disco al eliminar el cliente
        if($cliente->foto) Storage::delete('public/' . $cliente->foto);
        if($cliente->documento_pdf) Storage::delete('public/' . $cliente->documento_pdf);

        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado.');
    }
}