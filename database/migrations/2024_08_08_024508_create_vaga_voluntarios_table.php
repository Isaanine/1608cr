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
        Schema::create('vaga_voluntarios', function (Blueprint $table) {
            $table->increments('Id_Vaga');
            $table->string('Nomearea')->nullable();
            $table->string('Telefone', 15)->nullable();
            $table->string('Email')->nullable();
            $table->string('Cidade')->nullable();
            $table->text('Sobre')->nullable();
            $table->string('Dias')->nullable();
            $table->time('Horario')->nullable();
            $table->unsignedInteger('Id_Curso')->nullable();
            $table->foreign('Id_Curso')->references('Id_Curso')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaga_voluntarios');
    }
};
