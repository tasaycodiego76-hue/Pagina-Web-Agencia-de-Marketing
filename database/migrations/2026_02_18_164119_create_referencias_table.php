<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('referencias', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->text('comentario');
        $table->string('foto')->default('cliente.png');
        $table->string('cargo')->default('Cliente Nuevo');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referencias');
    }
};
