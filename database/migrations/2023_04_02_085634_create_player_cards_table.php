<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('player')->unsigned()->index()->nullable();
            $table->foreign('player')->references('id')->on('players')->onDelete('cascade');
            $table->integer('round');
            $table->bigInteger('card')->unsigned()->index()->nullable();
            $table->foreign('card')->references('id')->on('cards')->onDelete('cascade');
            $table->boolean('is_hidden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_cards');
    }
}
