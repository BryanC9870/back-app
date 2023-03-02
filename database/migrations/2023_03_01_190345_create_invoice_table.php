<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // migración para la tabla de facturas

    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_hora', $precision = 0);
            $table->text('nombre_emisor', 50);
            $table->string('nit_emisor', 12);
            $table->text('nombre_receptor', 50);
            $table->string('nit_receptor', 12);
            $table->decimal('valor_antes_iva', $precision = 8, $scale = 2);
            $table->decimal('valor_iva', $precision = 8, $scale = 2);
            $table->decimal('valor_total', $precision = 8, $scale = 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
};
