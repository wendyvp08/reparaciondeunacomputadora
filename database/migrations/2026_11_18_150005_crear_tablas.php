<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $t) {
            $t->id();
            $t->string('nombre', 60)->unique();
            $t->string('descripcion', 200);
        });

        Schema::create('guias', function (Blueprint $t) {
            $t->id();
            $t->unsignedBigInteger('categoriaid');
            $t->string('titulo', 120);
            $t->string('resumen', 255);
            $t->string('nivel', 20);
            $t->unsignedSmallInteger('minutos');
            $t->foreign('categoriaid')->references('id')->on('categorias')->onDelete('cascade');
        });

        Schema::create('pasos', function (Blueprint $t) {
            $t->id();
            $t->unsignedBigInteger('guiaid');
            $t->unsignedTinyInteger('numero');
            $t->text('instruccion');
            $t->foreign('guiaid')->references('id')->on('guias')->onDelete('cascade');
        });

        Schema::create('herramientas', function (Blueprint $t) {
            $t->id();
            $t->string('nombre', 80)->unique();
            $t->string('descripcion', 200);
        });

        Schema::create('guiaherramienta', function (Blueprint $t) {
            $t->unsignedBigInteger('guiaid');
            $t->unsignedBigInteger('herramientaid');
            $t->primary(['guiaid', 'herramientaid']);
            $t->foreign('guiaid')->references('id')->on('guias')->onDelete('cascade');
            $t->foreign('herramientaid')->references('id')->on('herramientas')->onDelete('cascade');
        });

        Schema::create('sistemas', function (Blueprint $t) {
            $t->id();
            $t->string('nombre', 60);
            $t->string('familia', 30);
            $t->string('version', 30);
            $t->string('tamano', 20);
            $t->string('sitio', 100);
        });

        Schema::create('consultas', function (Blueprint $t) {
            $t->id();
            $t->unsignedBigInteger('categoriaid');
            $t->string('nombre', 80);
            $t->string('correo', 100);
            $t->string('equipo', 80);
            $t->text('problema');
            $t->string('estado', 20)->default('Pendiente');
            $t->date('fecha');
            $t->foreign('categoriaid')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultas');
        Schema::dropIfExists('sistemas');
        Schema::dropIfExists('guiaherramienta');
        Schema::dropIfExists('herramientas');
        Schema::dropIfExists('pasos');
        Schema::dropIfExists('guias');
        Schema::dropIfExists('categorias');
    }
};