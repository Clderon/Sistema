<?php
// spell:disable

namespace App\Http\Controllers;

use App\Models\Registrocompra;
use Illuminate\Http\Request;

class Registrocomprascontroller extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        // $registrocompras = Registrocompra::latest()->paginate(5);
        $registrocompras = Registrocompra::orderBy('id', 'desc')->paginate(8);


        return view('registrocompras.index', compact('registrocompras'));
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('registrocompras.registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'fecha_emision' => 'required|date',
            'fecha_vencimiento' => 'nullable|date',
            'tipo_comprobante' => 'nullable|integer',
            'serie_comprobante' => 'nullable|string|max:8',
            'numero_comprobante' => 'nullable|integer',
            'tipo_documento_proveedor' => 'nullable|integer',
            'numero_documento_proveedor' => 'nullable|string|max:12',
            'razon_social_proveedor' => 'nullable|string|max:128',
            'base_imp_exportacion' => 'nullable|numeric',
            'igv_exportacion' => 'nullable|numeric',
            'base_imp_no_gravadas' => 'nullable|numeric',
            'igv_no_gravadas' => 'nullable|numeric',
            'base_imp_gravadas' => 'nullable|numeric',
            'igv_gravadas' => 'nullable|numeric',
            'valor_no_gravadas' => 'nullable|numeric',
            'importe_total' => 'nullable|numeric',
            'tipo_cambio' => 'nullable|numeric',
            'fecha_rcp' => 'nullable|date',
            'tipo_rcp' => 'nullable|string|max:2',
            'serie_rcp' => 'nullable|string|max:8',
            'numero_rcp' => 'nullable|string|max:16',
            'cancelado' => 'nullable|integer',
            'observacion' => 'nullable|string|max:128',
            'guia' => 'nullable|string|max:64',
            'envio_contabilidad' => 'nullable|integer',
            'tipo_igv' => 'nullable|integer',
            'tipo_costeo' => 'nullable|integer',
            'envio_contabilidad_adicional' => 'nullable|integer',
            'userid' => 'nullable|string|max:32',
            'fecha_turno' => 'nullable|date',
            'motivo_rcp' => 'nullable|string|max:2',
            'envio_web' => 'nullable|integer',
            'tipo_pago' => 'nullable|integer',
            'tipo_movimiento' => 'nullable|integer',
            'cuenta' => 'nullable|string|max:32',
            'isc' => 'nullable|numeric',
            'otros_tributos' => 'nullable|numeric',
            'igv_mixta' => 'nullable|numeric',
            'base_imp_mixta' => 'nullable|numeric',
            'tipo_destino' => 'nullable|integer',
        ]);
        
       // Crear un nuevo registro utilizando los datos del formulario validados
        Registrocompra::create($request->all());

        // Redireccionar con un mensaje de éxito
        return redirect()->route('registrocompras.create')->with('success', 'Producto registrado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registrocompra $registrocompra)
    {

        //
        return view('registrocompras.editar', ['registrocompra'=>$registrocompra]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registrocompra $registrocompra)
    {
        // dd($registrocompra);

        $request->validate([
            'fecha_emision' => 'required|date',
            'fecha_vencimiento' => 'nullable|date',
            'tipo_comprobante' => 'nullable|integer',
            'serie_comprobante' => 'nullable|string|max:8',
            'numero_comprobante' => 'nullable|integer',
            'tipo_documento_proveedor' => 'nullable|integer',
            'numero_documento_proveedor' => 'nullable|string|max:12',
            'razon_social_proveedor' => 'nullable|string|max:128',
            'base_imp_exportacion' => 'nullable|numeric',
            'igv_exportacion' => 'nullable|numeric',
            'base_imp_no_gravadas' => 'nullable|numeric',
            'igv_no_gravadas' => 'nullable|numeric',
            'base_imp_gravadas' => 'nullable|numeric',
            'igv_gravadas' => 'nullable|numeric',
            'valor_no_gravadas' => 'nullable|numeric',
            'importe_total' => 'nullable|numeric',
            'tipo_cambio' => 'nullable|numeric',
            'fecha_rcp' => 'nullable|date',
            'tipo_rcp' => 'nullable|string|max:2',
            'serie_rcp' => 'nullable|string|max:8',
            'numero_rcp' => 'nullable|string|max:16',
            'cancelado' => 'nullable|integer',
            'observacion' => 'nullable|string|max:128',
            'guia' => 'nullable|string|max:64',
            'envio_contabilidad' => 'nullable|integer',
            'tipo_igv' => 'nullable|integer',
            'tipo_costeo' => 'nullable|integer',
            'envio_contabilidad_adicional' => 'nullable|integer',
            'userid' => 'nullable|string|max:32',
            'fecha_turno' => 'nullable|date',
            'motivo_rcp' => 'nullable|string|max:2',
            'envio_web' => 'nullable|integer',
            'tipo_pago' => 'nullable|integer',
            'tipo_movimiento' => 'nullable|integer',
            'cuenta' => 'nullable|string|max:32',
            'isc' => 'nullable|numeric',
            'otros_tributos' => 'nullable|numeric',
            'igv_mixta' => 'nullable|numeric',
            'base_imp_mixta' => 'nullable|numeric',
            'tipo_destino' => 'nullable|integer',
        ]);


        $registrocompra->update($request->all());
        return redirect()->route('registrocompras.index') -> with('success', 'Producto editado cono éxito....');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registrocompra $registrocompra)
    {
        $registrocompra->delete();
        return redirect()->route('registrocompras.index');
    }
}
