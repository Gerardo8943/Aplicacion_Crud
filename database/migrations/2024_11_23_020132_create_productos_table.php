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
    Schema::create('productos', function (Blueprint $table){
    $table->id();
    $table->string('nombre', 255); //Es el nombre del producto
    $table->text('descripcion')->nullable(); //Descripcion del producto (Opcional)
    $table->decimal('precio_costo', 10, 2);// Precio de costo del producto
    $table->decimal('precio_venta', 10, 2);
    $table->string('image'); //Se especifica la ruta de la imagen
    $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
