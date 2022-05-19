<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_teams', function (Blueprint $table) {
            $table->id();
            $table->string('ar_name');
            $table->string('en_name');
            $table->string('image');
            $table->string('number')->unique();
            $table->string('ar_job');
            $table->string('en_job');
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
        Schema::dropIfExists('first_teams');
    }
}
