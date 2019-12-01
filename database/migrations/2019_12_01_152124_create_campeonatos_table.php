<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampeonatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campeonatos', function (Blueprint $table) {
            $table->bigIncrements('campId');
            $table->string('nome');
            $table->integer('ano');
            $table->integer('qtdTimes');
            $table->char('casaFora',1);
            $table->date('dataInicio');
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
        Schema::dropIfExists('campeonatos');
    }
}
