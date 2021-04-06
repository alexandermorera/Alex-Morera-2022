<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercio', function (Blueprint $table) {
            $table->charset='utf8mb4';
            $table->id();
            $table->timestamps();
            $table->integer('documento')->unique();
            $table->string('nombre');
            $table->bigInteger('telefono');
            $table->enum('transaccion',['aprobado','rechazado'])->default('rechazado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comercio');
    }
}
