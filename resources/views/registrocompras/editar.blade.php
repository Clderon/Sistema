@extends('adminlte::page')

@section('title', 'Editar Productos')

@section('content_header')
    <h1 class="m-0 text-dark">Editar REGISTROCOMPRAS</h1>
@stop

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            {{-- <strong>Hubo errores en los datos:</strong> --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong> {{ Session::get('success') }}  </strong>
        </div>
    @endif

    <h1 class="text-center text-capitalize"> Editar registrocompras</h1>

    <form action="{{route('registrocompras.update', $registrocompra)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="row">
            <x-adminlte-input name='fecha_emision' label='Fecha de emisión: ' placeholder='Ingrese la fecha de emisión' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->fecha_emision}}'/>
            <x-adminlte-input name='fecha_vencimiento' label='Fecha de vencimiento: ' placeholder='Ingrese la fecha de vencimiento' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->fecha_vencimiento}}'/>
            <x-adminlte-input name='tipo_comprobante' label='Tipo de comprobante: ' placeholder='Ingrese el tipo de comprobante' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_comprobante}}'/>
            <x-adminlte-input name='serie_comprobante' label='Serie de comprobante: ' placeholder='Ingrese la serie de comprobante' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->serie_comprobante}}'/>
            <x-adminlte-input name='numero_comprobante' label='Número de comprobante: ' placeholder='Ingrese el número de comprobante' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->numero_comprobante}}'/>
            <x-adminlte-input name='tipo_documento_proveedor' label='Tipo de documento del proveedor: ' placeholder='Ingrese el tipo de documento del proveedor' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_documento_proveedor}}'/>
            <x-adminlte-input name='numero_documento_proveedor' label='Número de documento del proveedor: ' placeholder='Ingrese el número de documento del proveedor' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->numero_documento_proveedor}}'/>
            <x-adminlte-input name='razon_social_proveedor' label='Razón social del proveedor: ' placeholder='Ingrese la razón social del proveedor' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->razon_social_proveedor}}'/>
            <x-adminlte-input name='base_imp_exportacion' label='Base imponible de exportación: ' placeholder='Ingrese la base imponible de exportación' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->base_imp_exportacion}}'/>
            <x-adminlte-input name='igv_exportacion' label='IGV de exportación: ' placeholder='Ingrese el IGV de exportación' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->igv_exportacion}}'/>
            <x-adminlte-input name='base_imp_no_gravadas' label='Base imponible no gravadas: ' placeholder='Ingrese la base imponible no gravadas' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->base_imp_no_gravadas}}'/>
            <x-adminlte-input name='igv_no_gravadas' label='IGV no gravadas: ' placeholder='Ingrese el IGV no gravadas' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->igv_no_gravadas}}'/>
            <x-adminlte-input name='base_imp_gravadas' label='Base imponible gravadas: ' placeholder='Ingrese la base imponible gravadas' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->base_imp_gravadas}}'/>
            <x-adminlte-input name='igv_gravadas' label='IGV gravadas: ' placeholder='Ingrese el IGV gravadas' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->igv_gravadas}}'/>
            <x-adminlte-input name='valor_no_gravadas' label='Valor no gravadas: ' placeholder='Ingrese el valor no gravadas' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->valor_no_gravadas}}'/>
            <x-adminlte-input name='importe_total' label='Importe total: ' placeholder='Ingrese el importe total' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->importe_total}}'/>
            <x-adminlte-input name='tipo_cambio' label='Tipo de cambio: ' placeholder='Ingrese el tipo de cambio' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_cambio}}'/>
            <x-adminlte-input name='fecha_rcp' label='Fecha de RCP: ' placeholder='Ingrese la fecha de RCP' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->fecha_rcp}}'/>
            <x-adminlte-input name='tipo_rcp' label='Tipo de RCP: ' placeholder='Ingrese el tipo de RCP' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_rcp}}'/>
            <x-adminlte-input name='serie_rcp' label='Serie de RCP: ' placeholder='Ingrese la serie de RCP' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->serie_rcp}}'/>
            <x-adminlte-input name='numero_rcp' label='Número de RCP: ' placeholder='Ingrese el número de RCP' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->numero_rcp}}'/>
            <x-adminlte-input name='cancelado' label='Cancelado: ' placeholder='Ingrese cancelado' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->cancelado}}'/>
            <x-adminlte-input name='observacion' label='Observación: ' placeholder='Ingrese la observación' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->observacion}}'/>
            <x-adminlte-input name='guia' label='Guía: ' placeholder='Ingrese la guía' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->guia}}'/>
            <x-adminlte-input name='envio_contabilidad' label='Envío a contabilidad: ' placeholder='Ingrese envío a contabilidad' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->envio_contabilidad}}'/>
            <x-adminlte-input name='tipo_igv' label='Tipo de IGV: ' placeholder='Ingrese tipo de IGV' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_igv}}'/>
            <x-adminlte-input name='tipo_costeo' label='Tipo de costeo: ' placeholder='Ingrese tipo de costeo' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_costeo}}'/>
            <x-adminlte-input name='envio_contabilidad_adicional' label='Envío a contabilidad adicional: ' placeholder='Ingrese envío a contabilidad adicional' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->envio_contabilidad_adicional}}'/>
            <x-adminlte-input name='userid' label='User ID: ' placeholder='Ingrese el User ID' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->userid}}'/>
            <x-adminlte-input name='fecha_turno' label='Fecha de turno: ' placeholder='Ingrese la fecha de turno' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->fecha_turno}}'/>
            <x-adminlte-input name='motivo_rcp' label='Motivo de RCP: ' placeholder='Ingrese el motivo de RCP' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->motivo_rcp}}'/>
            <x-adminlte-input name='envio_web' label='Envío web: ' placeholder='Ingrese envío web' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->envio_web}}'/>
            <x-adminlte-input name='tipo_pago' label='Tipo de pago: ' placeholder='Ingrese tipo de pago' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_pago}}'/>
            <x-adminlte-input name='tipo_movimiento' label='Tipo de movimiento: ' placeholder='Ingrese tipo de movimiento' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_movimiento}}'/>
            <x-adminlte-input name='cuenta' label='Cuenta: ' placeholder='Ingrese cuenta' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->cuenta}}'/>
            <x-adminlte-input name='isc' label='ISC: ' placeholder='Ingrese ISC' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->isc}}'/>
            <x-adminlte-input name='otros_tributos' label='Otros tributos: ' placeholder='Ingrese otros tributos' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->otros_tributos}}'/>
            <x-adminlte-input name='igv_mixta' label='IGV mixta: ' placeholder='Ingrese IGV mixta' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->igv_mixta}}'/>
            <x-adminlte-input name='base_imp_mixta' label='Base imponible mixta: ' placeholder='Ingrese base imponible mixta' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->base_imp_mixta}}'/>
            <x-adminlte-input name='tipo_destino' label='Tipo de destino: ' placeholder='Ingrese tipo de destino' fgroup-class='col-md-6' disable-feedback value='{{$registrocompra->tipo_destino}}'/>


        </div>
        <x-adminlte-button class="btn-flat" type="submit" label="Actualizar" theme="success" icon="fas fa-lg fa-save"/>
    </form>

@stop
