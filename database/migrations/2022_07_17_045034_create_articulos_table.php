<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->enum('articuloB', array('USB', 'Maus324','CargadorPTC', 'CargadorPTUSB' ));
            $table->float('precio', 8, 2)->required();
            $table->enum('articuloC', array('PCcoreli3', 'PCcoreli5','PCcoreli7', 'PCcorelInside' ));
            $table->float('precio2', 8, 2)->required();
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
        Schema::dropIfExists('articulos');
    }
}
