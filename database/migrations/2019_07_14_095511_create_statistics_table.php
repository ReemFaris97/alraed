<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('first_team_id');
            $table->foreign('first_team_id')->references('id')->on('teams');

            $table->unsignedBigInteger('second_team_id');
            $table->foreign('second_team_id')->references('id')->on('teams');

            $table->unsignedBigInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches');

            $table->string('first_team_goals');
            $table->string('second_team_goals');
            $table->string('first_team_corners');
            $table->string('second_team_corners');
            $table->string('first_team_Offside');
            $table->string('second_team_Offside');
            $table->string('first_team_YCard');
            $table->string('second_team_YCard');
            $table->string('first_team_RCard');
            $table->string('second_team_RCard');
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
        Schema::dropIfExists('statistics');
    }
}
