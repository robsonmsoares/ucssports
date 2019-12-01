<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifications', function (Blueprint $table) {
            $table->bigIncrements('classificationId');
            $table->integer('posicao');
            $table->integer('campId');
            $table->integer('rodada');
            $table->integer('timeId');
            $table->integer('pontos');
            $table->integer('vitorias');
            $table->integer('empates');
            $table->integer('derrotas');
            $table->integer('golsPro');
            $table->integer('golsContra');
            $table->integer('saldoGols');
            $table->timestamps();

            $table->foreign('campId')
                ->references('campId')->on('campeonatos')
                ->onDelete('cascade');

            $table->foreign('rodada')
                ->references('rodada')->on('rodadas')
                ->onDelete('cascade');

            $table->foreign('timeId')
                ->references('timeId')->on('times')
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
        Schema::dropIfExists('classifications');
    }
}
