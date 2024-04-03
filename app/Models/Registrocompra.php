<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrocompra extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_emision',
        'fecha_vencimiento',
        'tipo_comprobante',
        'serie_comprobante',
        'numero_comprobante',
        'tipo_documento_proveedor',
        'numero_documento_proveedor',
        'razon_social_proveedor',
        'base_imp_exportacion',
        'igv_exportacion',
        'base_imp_no_gravadas',
        'igv_no_gravadas',
        'base_imp_gravadas',
        'igv_gravadas',
        'valor_no_gravadas',
        'importe_total',
        'tipo_cambio',
        'fecha_rcp',
        'tipo_rcp',
        'serie_rcp',
        'numero_rcp',
        'cancelado',
        'observacion',
        'guia',
        'envio_contabilidad',
        'tipo_igv',
        'tipo_costeo',
        'envio_contabilidad_adicional',
        'userid',
        'fecha_turno',
        'motivo_rcp',
        'envio_web',
        'tipo_pago',
        'tipo_movimiento',
        'cuenta',
        'isc',
        'otros_tributos',
        'igv_mixta',
        'base_imp_mixta',
        'tipo_destino',
    ];
}
