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
         Schema::table('pedido_producto', function (Blueprint $table) {
            $table->bigInteger("producto_id")->unsigned();
            //$table->integer("cantidad")->default(1);
            
            // //N:M
            // $table->foreign("pedido_id")->references("id")->on("pedidos");
            $table->foreign("producto")->references("id")->on("productos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_producto');
    }
};
