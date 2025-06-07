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
        Schema::table('clientes', function (Blueprint $table) {
        $table->string("nombre_completo")->nullable();
        $table->string("ci_nit")->nullable();
        $table->string("telefono")->nullable();
        $table->string("direccion")->nullable();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
        $table->dropColumn(["nombre_completo", "ci_nit", "telefono", "direccion"]);
    });
    }
};
