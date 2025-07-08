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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->decimal('Subtotal', 10,2);
            $table->decimal('impuestos',10,2);
            $table->decimal('total',10,2);

            $table->unsignedBigInteger('idcliente');
            $table->foreign('idcliente')->references('id')->on('clientes');

            $table->unsignedBigInteger('idestado');
            $table->foreign('idestado')->references('id')->on('estados');

            $table->unsignedBigInteger('idpago');
            $table->foreign('idpago')->references('id')->on('modo_pagos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
