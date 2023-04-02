<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('color')->unsigned()->index()->nullable();
            $table->foreign('color')->references('id')->on('colors')->onDelete('cascade');
            $table->bigInteger('value')->unsigned()->index()->nullable();
            $table->foreign('value')->references('id')->on('values')->onDelete('cascade');
            $table->boolean('played');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
