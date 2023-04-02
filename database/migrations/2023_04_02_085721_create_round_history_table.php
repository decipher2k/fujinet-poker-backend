<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round_history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('player_won')->unsigned()->index()->nullable();
            $table->foreign('player_won')->references('id')->on('players')->onDelete('cascade');
            $table->integer('round_num');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('round_history');
    }
}
