<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('nick_name');
            $table->integer('registration')->unique();
            $table->string('position');
            $table->string('team_preference');
            $table->string('sold_to');
            $table->string('status');
            $table->integer('league_id')->unsigned();
            $table->foreign('league_id')->references('league_id')->on('leagues')->onDelete('cascade');
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
        Schema::dropIfExists('players');
    }
}
