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
            $table->id('Codigo');
            $table->string('Nome');
            $table->string('CPF')->unique();
            $table->string('E-mail')->unique();
            $table->unsignedBigInteger('Categoria')->default(3);
            $table->foreign('Categoria')->references('Codigo')->on('categorias');
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
