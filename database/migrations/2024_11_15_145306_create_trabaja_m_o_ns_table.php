<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajaMONsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajamons', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('profesion');
            $table->string('edad');
            $table->integer('vida')->unsigned();
            $table->integer('ataque')->unsigned();
            $table->integer('defensa')->unsigned();
            $table->integer('velocidad')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajamons');
    }
}
