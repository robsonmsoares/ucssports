<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampeonatoTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campeonato_times', function (Blueprint $table) {
            $table->integer('campId');
            $table->integer('timeId');
            $table->timestamps();

            $table->foreign('campId')
                ->references('campId')->on('campeonatos')
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
        Schema::dropIfExists('campeonato_times');
    }
}
