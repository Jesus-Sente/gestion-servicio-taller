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
        Schema::table('servicios', function (Blueprint $table) {
            $table->foreign(['clientes_id'], 'fk_servicios_clientes1')->references(['id'])->on('clientes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_servicios_id'], 'fk_servicios_tipo_servicios1')->references(['id'])->on('tipo_servicios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['vehiculo_id'], 'fk_servicios_vehiculo1')->references(['id'])->on('vehiculo')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropForeign('fk_servicios_clientes1');
            $table->dropForeign('fk_servicios_tipo_servicios1');
            $table->dropForeign('fk_servicios_vehiculo1');
        });
    }
};
