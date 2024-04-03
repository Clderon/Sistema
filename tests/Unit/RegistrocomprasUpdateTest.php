<?php

namespace Tests\Unit;

use App\Http\Controllers\Registrocomprascontroller;
use App\Models\Registrocompra;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class RegistrocomprasUpdateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test a successful update of a record.
     *
     * @return void
     */
    public function test_update_success()
    {
        // Create a new Registrocompra instance
        $registrocompra = Registrocompra::factory()->create();

        // Define los datos actualizados
        $updatedData = [
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
        ];

        // Create a new instance of the controller
        $controller = new Registrocomprascontroller();

        // Create a fake request with updated data
        $request = new Request($updatedData);

        // Act: Llama al método de actualización del controlador
        $response = $controller->update($request, $registrocompra);

        // Assert: Verifica que la respuesta sea una redirección
        $this->assertInstanceOf(\Illuminate\Http\RedirectResponse::class, $response);

        // Assert: Verifica que el registro se haya actualizado en la base de datos
        $this->assertDatabaseHas('registrocompras', $updatedData);
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
