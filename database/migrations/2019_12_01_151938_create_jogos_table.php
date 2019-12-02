<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->bigIncrements('jogosId');
            $table->integer('campId');
            $table->integer('rodada');
            $table->integer('timeCasaId');
            $table->integer('timeForaId');
            $table->integer('golsTimeCasa');
            $table->integer('golsTimeFora');
            $table->timestamps();
            $table->date('deleted_at')->nullable();

            $table->foreign('campId')
                ->references('campId')->on('campeonatos')
                ->onDelete('cascade');

            $table->foreign('rodada')
                ->references('rodada')->on('rodadas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogos');
    }
}
