@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar Registrocompras</h1>
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

    <h1 class="text-center text-capitalize">Registrar Registrocompras</h1>

    <form action="{{route('registrocompras.store')}}" method="POST" autocomplete="off">
        @csrf
            <div class="row">
                <x-adminlte-input name="fecha_emision" label="Fecha_emision: " placeholder="Fecha_emision del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="fecha_vencimiento" label="Fecha_vencimiento: " placeholder="Fecha_vencimiento del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_comprobante" label="Tipo_comprobante: " placeholder="Tipo_comprobante del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="serie_comprobante" label="Serie_comprobante: " placeholder="Serie_comprobante del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="numero_comprobante" label="Numero_comprobante: " placeholder="Numero_comprobante del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_documento_proveedor" label="Tipo_documento_proveedor: " placeholder="Tipo_documento_proveedor del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="numero_documento_proveedor" label="Numero_documento_proveedor: " placeholder="Numero_documento_proveedor del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="razon_social_proveedor" label="Razon_social_proveedor: " placeholder="Razon_social_proveedor del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="base_imp_exportacion" label="Base_imp_exportacion: " placeholder="Base_imp_exportacion del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="igv_exportacion" label="Igv_exportacion: " placeholder="Igv_exportacion del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="base_imp_no_gravadas" label="Base_imp_no_gravadas: " placeholder="Base_imp_no_gravadas del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="igv_no_gravadas" label="Igv_no_gravadas: " placeholder="Igv_no_gravadas del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="base_imp_gravadas" label="Base_imp_gravadas: " placeholder="Base_imp_gravadas del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="igv_gravadas" label="Igv_gravadas: " placeholder="Igv_gravadas del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="valor_no_gravadas" label="Valor_no_gravadas: " placeholder="Valor_no_gravadas del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="importe_total" label="Importe_total: " placeholder="Importe_total del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_cambio" label="Tipo_cambio: " placeholder="Tipo_cambio del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="fecha_rcp" label="Fecha_rcp: " placeholder="Fecha_rcp del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_rcp" label="Tipo_rcp: " placeholder="Tipo_rcp del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="serie_rcp" label="Serie_rcp: " placeholder="Serie_rcp del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="numero_rcp" label="Numero_rcp: " placeholder="Numero_rcp del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="cancelado" label="Cancelado: " placeholder="Cancelado del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="observacion" label="Observacion: " placeholder="Observacion del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="guia" label="Guia: " placeholder="Guia del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="envio_contabilidad" label="Envio_contabilidad: " placeholder="Envio_contabilidad del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_igv" label="Tipo_igv: " placeholder="Tipo_igv del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_costeo" label="Tipo_costeo: " placeholder="Tipo_costeo del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="envio_contabilidad_adicional" label="Envio_contabilidad_adicional: " placeholder="Envio_contabilidad_adicional del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="userid" label="Userid: " placeholder="Userid del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="fecha_turno" label="Fecha_turno: " placeholder="Fecha_turno del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="motivo_rcp" label="Motivo_rcp: " placeholder="Motivo_rcp del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="envio_web" label="Envio_web: " placeholder="Envio_web del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_pago" label="Tipo_pago: " placeholder="Tipo_pago del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_movimiento" label="Tipo_movimiento: " placeholder="Tipo_movimiento del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="cuenta" label="Cuenta: " placeholder="Cuenta del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="isc" label="Isc: " placeholder="Isc del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="otros_tributos" label="Otros_tributos: " placeholder="Otros_tributos del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="igv_mixta" label="Igv_mixta: " placeholder="Igv_mixta del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="base_imp_mixta" label="Base_imp_mixta: " placeholder="Base_imp_mixta del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <div class="row">
                <x-adminlte-input name="tipo_destino" label="Tipo_destino: " placeholder="Tipo_destino del registrocompra"
                    fgroup-class="col-md-6" disable-feedback />
            </div>

        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form>

@stop
