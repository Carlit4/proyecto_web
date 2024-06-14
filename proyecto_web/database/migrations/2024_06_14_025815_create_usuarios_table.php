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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->String('email')->primary();
            $table->String('password');
            $table->String('nombre');
            //$table->String('activo')->default();
            $table->unsignedBigInteger('perfil_id');
            $table->foreign('perfil_id')->references('id')->on('perfiles');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
