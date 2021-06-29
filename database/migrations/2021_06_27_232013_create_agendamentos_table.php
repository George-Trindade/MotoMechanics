<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('veiculo_id')->unsigned();
            $table->string("Servico");
            $table->text("Descricao");
            $table->date("Data");
            $table->string("Horario");
            $table->timestamps();
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
