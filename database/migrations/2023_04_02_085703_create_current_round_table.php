<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentRoundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_round', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('current_player')->unsigned()->index()->nullable();
            $table->foreign('current_player')->references('id')->on('players')->onDelete('cascade');
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
        Schema::dropIfExists('current_round');
    }
}
