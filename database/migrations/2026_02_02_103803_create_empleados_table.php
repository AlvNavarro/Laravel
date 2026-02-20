<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up() {
    Schema::create('empleados', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('puesto');
        $table->date('fecha_ingreso');
        $table->decimal('salario', 10, 2);
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};