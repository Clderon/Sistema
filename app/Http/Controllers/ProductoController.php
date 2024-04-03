<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $productos = Producto::all();
        
        // $productos = Producto::latest()->paginate(3);

        $productos = Producto::latest()->orderBy('nombre', 'asc')->paginate(6);

        return view('productos.listar', compact('productos'));

        // $productos = Producto::paginate(6);
        // return view('productos.listar', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // ? esto muestra la vista de creación
        return view('productos.registrar');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ? con la vista y sus datos se guarda la info
        // dd($request->all());

        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|decimal:2|gt:0'
        ], [    
            'nombre.required' => 'El valor del campo :attribute es obligatorio.',
            // 'nombre.string' => 'El valor del campo :attribute debe ser string .',
            'precio.required' => 'El valor del campo :attribute es obligatorio.',
            'precio.decimal' => 'El valor del campo :attribute debe ser decimal con :decimal dígito después del punto.',
            'precio.gt' => 'El valor del campo :attribute debe ser mayor que :value.'
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.create') -> with('success', 'Producto registrado cono éxito....');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        // return redirect()->route('productos.editar');
        return view('productos.editar', ['producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        // dd($producto);
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|decimal:2|gt:0'
        ], [
            'nombre.required' => 'El valor del campo :attribute es obligatorio.',
            // 'nombre.string' => 'El valor del campo :attribute debe ser string .',
            'precio.required' => 'El valor del campo :attribute es obligatorio.',
            'precio.decimal' => 'El valor del campo :attribute debe ser decimal con :decimal dígito después del punto.',
            'precio.gt' => 'El valor del campo :attribute debe ser mayor que :value.'
        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index') -> with('success', 'Producto editado cono éxito....');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
