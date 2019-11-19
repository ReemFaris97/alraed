<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_players', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams');

            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');

            $table->string('ar_name');
            $table->string('en_name');
            $table->string('age');
            $table->string('length');
            $table->string('appearance');
            $table->enum('position',['goal_keeper','defender','mid_line','attacking']);
            $table->string('goals')->nullable();
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
        Schema::dropIfExists('team_players');
    }
}
