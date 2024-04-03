<!-- spell:disable --> 
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrocompras', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_emision')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->smallInteger('tipo_comprobante')->nullable();
            $table->string('serie_comprobante', 8)->nullable();
            $table->integer('numero_comprobante')->nullable();
            $table->smallInteger('tipo_documento_proveedor')->nullable();
            $table->string('numero_documento_proveedor', 12)->nullable();
            $table->string('razon_social_proveedor', 128)->nullable();
            $table->decimal('base_imp_exportacion', 16, 6)->nullable();
            $table->decimal('igv_exportacion', 16, 6)->nullable();
            $table->decimal('base_imp_no_gravadas', 16, 6)->nullable();
            $table->decimal('igv_no_gravadas', 16, 6)->nullable();
            $table->decimal('base_imp_gravadas', 16, 6)->nullable();
            $table->decimal('igv_gravadas', 16, 6)->nullable();
            $table->decimal('valor_no_gravadas', 16, 6)->nullable();
            $table->decimal('importe_total', 16, 6)->nullable();
            $table->decimal('tipo_cambio', 16, 6)->nullable();
            $table->date('fecha_rcp')->nullable();
            $table->string('tipo_rcp', 2)->nullable();
            $table->string('serie_rcp', 8)->nullable();
            $table->string('numero_rcp', 16)->nullable();
            $table->bigInteger('cancelado')->nullable();
            $table->string('observacion', 128)->nullable();
            $table->string('guia', 64)->nullable();
            $table->smallInteger('envio_contabilidad')->default(1);
            $table->smallInteger('tipo_igv')->nullable();
            $table->smallInteger('tipo_costeo')->nullable();
            $table->bigInteger('envio_contabilidad_adicional')->default(0);
            $table->string('userid', 32)->nullable();
            $table->date('fecha_turno')->nullable();
            $table->string('motivo_rcp', 2)->nullable();
            $table->smallInteger('envio_web')->default(0);
            $table->smallInteger('tipo_pago')->default(1);
            $table->smallInteger('tipo_movimiento')->default(1);
            $table->string('cuenta', 32)->nullable();
            $table->decimal('isc', 16, 6)->nullable();
            $table->decimal('otros_tributos', 16, 6)->nullable();
            $table->decimal('igv_mixta', 16, 6)->nullable();
            $table->decimal('base_imp_mixta', 16, 6)->nullable();
            $table->smallInteger('tipo_destino')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrocompras');
    }
};
