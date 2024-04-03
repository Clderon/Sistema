@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center m-4">Listar REGISTROCOMPRAS </h1>
@stop

@section('content')
    <div style="overflow: auto">
        <table class="table table-bordered container mt-4 " >
            <caption>Información de REGISTROCOMPRAS</caption>
            <thead>
                <tr>
                    <th scope='col' class='text-center'>ID</th>
                    <th scope='col' class='text-center'>Fecha_emision</th>
                    <th scope='col' class='text-center'>Fecha_vencimiento</th>
                    <th scope='col' class='text-center'>Tipo_comprobante</th>
                    <th scope='col' class='text-center'>Serie_comprobante</th>
                    <th scope='col' class='text-center'>Numero_comprobante</th>
                    <th scope='col' class='text-center'>Tipo_documento_proveedor</th>
                    <th scope='col' class='text-center'>Numero_documento_proveedor</th>
                    <th scope='col' class='text-center'>Razon_social_proveedor</th>
                    <th scope='col' class='text-center'>Base_imp_exportacion</th>
                    <th scope='col' class='text-center'>Igv_exportacion</th>
                    <th scope='col' class='text-center'>Base_imp_no_gravadas</th>
                    <th scope='col' class='text-center'>Igv_no_gravadas</th>
                    <th scope='col' class='text-center'>Base_imp_gravadas</th>
                    <th scope='col' class='text-center'>Igv_gravadas</th>
                    <th scope='col' class='text-center'>Valor_no_gravadas</th>
                    <th scope='col' class='text-center'>Importe_total</th>
                    <th scope='col' class='text-center'>Tipo_cambio</th>
                    <th scope='col' class='text-center'>Fecha_rcp</th>
                    <th scope='col' class='text-center'>Tipo_rcp</th>
                    <th scope='col' class='text-center'>Serie_rcp</th>
                    <th scope='col' class='text-center'>Numero_rcp</th>
                    <th scope='col' class='text-center'>Cancelado</th>
                    <th scope='col' class='text-center'>Observacion</th>
                    <th scope='col' class='text-center'>Guia</th>
                    <th scope='col' class='text-center'>Envio_contabilidad</th>
                    <th scope='col' class='text-center'>Tipo_igv</th>
                    <th scope='col' class='text-center'>Tipo_costeo</th>
                    <th scope='col' class='text-center'>Envio_contabilidad_adicional</th>
                    <th scope='col' class='text-center'>Userid</th>
                    <th scope='col' class='text-center'>Fecha_turno</th>
                    <th scope='col' class='text-center'>Motivo_rcp</th>
                    <th scope='col' class='text-center'>Envio_web</th>
                    <th scope='col' class='text-center'>Tipo_pago</th>
                    <th scope='col' class='text-center'>Tipo_movimiento</th>
                    <th scope='col' class='text-center'>Cuenta</th>
                    <th scope='col' class='text-center'>Isc</th>
                    <th scope='col' class='text-center'>Otros_tributos</th>
                    <th scope='col' class='text-center'>Igv_mixta</th>
                    <th scope='col' class='text-center'>Base_imp_mixta</th>
                    <th scope='col' class='text-center'>Tipo_destino</th>
                    <th scope='col' class='text-center'>Acciones</th>
                </tr>
    
    
            </thead>
            
            <tbody >
                @foreach ($registrocompras->all() as $registrocompra)
                <tr>
                    <td>{{$registrocompra->id}}</td>
                    <td>{{$registrocompra->fecha_emision}}</td>
                    <td>{{$registrocompra->fecha_vencimiento}}</td>
                    <td>{{$registrocompra->tipo_comprobante}}</td>
                    <td>{{$registrocompra->serie_comprobante}}</td>
                    <td>{{$registrocompra->numero_comprobante}}</td>
                    <td>{{$registrocompra->tipo_documento_proveedor}}</td>
                    <td>{{$registrocompra->numero_documento_proveedor}}</td>
                    <td>{{$registrocompra->razon_social_proveedor}}</td>
                    <td>{{$registrocompra->base_imp_exportacion}}</td>
                    <td>{{$registrocompra->igv_exportacion}}</td>
                    <td>{{$registrocompra->base_imp_no_gravadas}}</td>
                    <td>{{$registrocompra->igv_no_gravadas}}</td>
                    <td>{{$registrocompra->base_imp_gravadas}}</td>
                    <td>{{$registrocompra->igv_gravadas}}</td>
                    <td>{{$registrocompra->valor_no_gravadas}}</td>
                    <td>{{$registrocompra->importe_total}}</td>
                    <td>{{$registrocompra->tipo_cambio}}</td>
                    <td>{{$registrocompra->fecha_rcp}}</td>
                    <td>{{$registrocompra->tipo_rcp}}</td>
                    <td>{{$registrocompra->serie_rcp}}</td>
                    <td>{{$registrocompra->numero_rcp}}</td>
                    <td>{{$registrocompra->cancelado}}</td>
                    <td>{{$registrocompra->observacion}}</td>
                    <td>{{$registrocompra->guia}}</td>
                    <td>{{$registrocompra->envio_contabilidad}}</td>
                    <td>{{$registrocompra->tipo_igv}}</td>
                    <td>{{$registrocompra->tipo_costeo}}</td>
                    <td>{{$registrocompra->envio_contabilidad_adicional}}</td>
                    <td>{{$registrocompra->userid}}</td>
                    <td>{{$registrocompra->fecha_turno}}</td>
                    <td>{{$registrocompra->motivo_rcp}}</td>
                    <td>{{$registrocompra->envio_web}}</td>
                    <td>{{$registrocompra->tipo_pago}}</td>
                    <td>{{$registrocompra->tipo_movimiento}}</td>
                    <td>{{$registrocompra->cuenta}}</td>
                    <td>{{$registrocompra->isc}}</td>
                    <td>{{$registrocompra->otros_tributos}}</td>
                    <td>{{$registrocompra->igv_mixta}}</td>
                    <td>{{$registrocompra->base_imp_mixta}}</td>
                    <td>{{$registrocompra->tipo_destino}}</td>
    
    
                    <td class="text-center" style="display: flex; justify-content: center; gap: 20px">
                        <a href="{{ route('registrocompras.edit', $registrocompra) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('registrocompras.destroy', $registrocompra) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="display: flex; justify-content: center">
        {{ $registrocompras->links() }}
    </div>
    
@stop
