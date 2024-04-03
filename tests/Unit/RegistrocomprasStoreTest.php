<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\Registrocomprascontroller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;


class RegistrocomprasStoreTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_store_creates_new_record()
    {
        // Arrange
        $controller = new Registrocomprascontroller();
        $request = new Request([
            'fecha_emision' => '2024-04-03',
            'fecha_vencimiento' => '2024-04-10',
            'tipo_comprobante' => 1,
            'serie_comprobante' => 'ABC123',
            'numero_comprobante' => 123456,
            'tipo_documento_proveedor' => 1,
            'numero_documento_proveedor' => '1234567890',
            'razon_social_proveedor' => 'Proveedor S.A.',
            'base_imp_exportacion' => 100.50,
            'igv_exportacion' => 18.09,
            'base_imp_no_gravadas' => 75.25,
            'igv_no_gravadas' => 13.55,
            'base_imp_gravadas' => 200.75,
            'igv_gravadas' => 36.14,
            'valor_no_gravadas' => 50.25,
            'importe_total' => 400.00,
            'tipo_cambio' => 3.50,
            'fecha_rcp' => '2024-04-05',
            'tipo_rcp' => 'AA',
            'serie_rcp' => 'DEF456',
            'numero_rcp' => '9876543210',
            'cancelado' => 1,
            'observacion' => 'Observación de prueba',
            'guia' => 'Guía de prueba',
            'envio_contabilidad' => 1,
            'tipo_igv' => 1,
            'tipo_costeo' => 1,
            'envio_contabilidad_adicional' => 1,
            'userid' => 'user123',
            'fecha_turno' => '2024-04-07',
            'motivo_rcp' => 'BB',
            'envio_web' => 1,
            'tipo_pago' => 1,
            'tipo_movimiento' => 1,
            'cuenta' => 'Cuenta de prueba',
            'isc' => 5.50,
            'otros_tributos' => 10.75,
            'igv_mixta' => 20.50,
            'base_imp_mixta' => 150.25,
            'tipo_destino' => 1,
        ]);

        // Act
        $controller->store($request);

        // Assert
        $this->assertDatabaseHas('registrocompras', [
            'fecha_emision' => '2024-04-03',
            'fecha_vencimiento' => '2024-04-10',
            'tipo_comprobante' => 1,
            'serie_comprobante' => 'ABC123',
            'numero_comprobante' => 123456,
            'tipo_documento_proveedor' => 1,
            'numero_documento_proveedor' => '1234567890',
            'razon_social_proveedor' => 'Proveedor S.A.',
            'base_imp_exportacion' => 100.50,
            'igv_exportacion' => 18.09,
            'base_imp_no_gravadas' => 75.25,
            'igv_no_gravadas' => 13.55,
            'base_imp_gravadas' => 200.75,
            'igv_gravadas' => 36.14,
            'valor_no_gravadas' => 50.25,
            'importe_total' => 400.00,
            'tipo_cambio' => 3.50,
            'fecha_rcp' => '2024-04-05',
            'tipo_rcp' => 'AA',
            'serie_rcp' => 'DEF456',
            'numero_rcp' => '9876543210',
            'cancelado' => 1,
            'observacion' => 'Observación de prueba',
            'guia' => 'Guía de prueba',
            'envio_contabilidad' => 1,
            'tipo_igv' => 1,
            'tipo_costeo' => 1,
            'envio_contabilidad_adicional' => 1,
            'userid' => 'user123',
            'fecha_turno' => '2024-04-07',
            'motivo_rcp' => 'BB',
            'envio_web' => 1,
            'tipo_pago' => 1,
            'tipo_movimiento' => 1,
            'cuenta' => 'Cuenta de prueba',
            'isc' => 5.50,
            'otros_tributos' => 10.75,
            'igv_mixta' => 20.50,
            'base_imp_mixta' => 150.25,
            'tipo_destino' => 1,
        ]);
    }

   public function test_store_fails_with_invalid_data()
    {
        // Arrange
        $controller = new Registrocomprascontroller();
        $request = new Request([
            'fecha_emision' => '2024-04-03',
            'fecha_vencimiento' => '2024-04-10',
            'tipo_comprobante' => 1,
            'serie_comprobante' => 'ABC123',
            'numero_comprobante' => 123456,
            'tipo_documento_proveedor' => 1,
            'numero_documento_proveedor' => '1234567890',
            'razon_social_proveedor' => 'Proveedor S.A.',
            'base_imp_exportacion' => 100.50,
            'igv_exportacion' => 18.09,
            'base_imp_no_gravadas' => 75.25,
            'igv_no_gravadas' => 13.55,
            'base_imp_gravadas' => 200.75,
            'igv_gravadas' => 36.14,
            'valor_no_gravadas' => 50.25,
            'importe_total' => 400.00,
            'tipo_cambio' => 3.50,
            'fecha_rcp' => '2024-04-05',
            'tipo_rcp' => 'AA',
            'serie_rcp' => 'DEF456',
            'numero_rcp' => '9876543210',
            'cancelado' => 1,
            'observacion' => 'Observación de prueba',
            'guia' => 'Guía de prueba',
            'envio_contabilidad' => 1,
            'tipo_igv' => 1,
            'tipo_costeo' => 1,
            'envio_contabilidad_adicional' => 1,
            'userid' => 'user123',
            'fecha_turno' => '2024-04-07',
            'motivo_rcp' => 'BB',
            'envio_web' => 1,
            'tipo_pago' => 1,
            'tipo_movimiento' => 1,
            'cuenta' => 'Cuenta de prueba',
            'isc' => 5.50,
            'otros_tributos' => 10.75,
            'igv_mixta' => 20.50,
            'base_imp_mixta' => 150.25,
            'tipo_destino' => 1,
        ]);

        // Act
        // Intenta almacenar los datos inválidos y espera que se lance una excepción de validación
        $this->expectException(\Illuminate\Validation\ValidationException::class);

        // Intenta almacenar los datos inválidos
        $controller->store($request);
    }



}
