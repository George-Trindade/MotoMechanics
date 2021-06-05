<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Nome",120);
            $table->string("Marca",20);
            $table->string("Ano",10);
            $table->string("Cor",20);
            $table->string("Servico",120);
            $table->text("Descricao");
            $table->date("Data");
            $table->string("Horario",20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
