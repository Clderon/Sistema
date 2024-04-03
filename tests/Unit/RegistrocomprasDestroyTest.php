<?php

use Tests\TestCase;
use App\Models\Registrocompra;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrocomprasDestroyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test successful deletion of a record.
     *
     * @return void
     */
    public function test_destroy_success()
    {
        // Crear un usuario autenticado para simular la autenticación
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        // Crear un registro de ejemplo en la base de datos
        $registrocompra = Registrocompra::factory()->create();

        // Realizar una solicitud HTTP DELETE al endpoint del controlador para eliminar el registro
        $response = $this->delete(route('registrocompras.destroy', $registrocompra->id));

        // Verificar que la respuesta sea un redireccionamiento
        $response->assertRedirect(route('registrocompras.index'));

        // Verificar que el registro ya no exista en la base de datos
        $this->assertDatabaseMissing('registrocompras', [
            'id' => $registrocompra->id,
        ]);
    }

    public function test_destroy_fails_if_record_not_found()
    {
        // Crear un usuario autenticado para simular la autenticación
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        // Crear un ID de registro que no exista en la base de datos
        $nonExistentId = 9999;

        // Intentar eliminar un registro que no existe en la base de datos
        $response = $this->delete(route('registrocompras.destroy', $nonExistentId));

        // Verificar que la respuesta sea un redireccionamiento a la ruta 'registrocompras.index'
        $response->assertRedirect(route('registrocompras.index'));

        // Verificar que se haya mostrado un mensaje de error
        $response->assertSessionHas('error');

        // Verificar que no se haya eliminado ningún registro en la base de datos
        $this->assertDatabaseMissing('registrocompras', ['id' => $nonExistentId]);
    }


}
