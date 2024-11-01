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
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 200);
            $table->decimal('costo', 10);
            $table->unsignedInteger('tipo_servicios_id')->index('fk_servicios_tipo_servicios1_idx');
            $table->unsignedInteger('vehiculo_id')->index('fk_servicios_vehiculo1_idx');
            $table->unsignedInteger('clientes_id')->index('fk_servicios_clientes1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
