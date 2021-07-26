<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContribuyentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 65);
            $table->string('rfc', 65);
            $table->string('correo', 65)->nullable();
            $table->string('telefono', 65)->nullable();
            $table->string('direccion', 65)->nullable();
            $table->string('situacion', 65)->nullable();
            $table->bigInteger('id_user')->unsigned();
            $table->timestamps();
            //Llave de la tabla users
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contribuyentes');
    }
}
