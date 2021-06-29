<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string("Modelo",120);
            $table->string("Marca",20);
            $table->string("Ano",10);
            $table->string("Cor",20);
            $table->string("Placa");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
