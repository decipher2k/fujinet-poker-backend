<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_bets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('player')->unsigned()->index()->nullable();
            $table->foreign('player')->references('id')->on('players')->onDelete('cascade');
            $table->integer('round');
            $table->integer('bet');
            $table->string('bcrf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_bets');
    }
}
