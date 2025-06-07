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
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dateTime('fecha');
            $table->string('cod_ped')->unique();
            $table->text('observacion')->nullable;
            $table->integer("estado")->default(1);

            //N:1
            $table->bigInteger("cliente_id")->unsigned();
            $table->foreign('client_id')->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos');
    }
};
