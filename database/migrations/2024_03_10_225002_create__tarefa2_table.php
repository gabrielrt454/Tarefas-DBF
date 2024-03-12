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
        Schema::create('tarefa2', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('raca');
            $table->string('classe');
            $table->integer('idade');
            $table->string('arma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tarefa2');
    }
};
