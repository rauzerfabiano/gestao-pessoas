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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->unsignedBigInteger('categoria')->default(3);
            $table->foreign('categoria')->references('codigo')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
