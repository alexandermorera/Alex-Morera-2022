<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarProductosUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('usuarios', function (Blueprint $table){
            $table->unsignedBigInteger('productos_id');
            $table->foreign('productos')->references('id')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table){
            $table->dropColumn('productos_id');
            $table->dropForeign('productos_id');

        }); 
    }
}
