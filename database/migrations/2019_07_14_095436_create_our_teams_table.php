<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ar_name');
            $table->string('en_name');
            $table->string('ar_job_title');
            $table->string('en_job_title');
            $table->string('ar_description');
            $table->string('en_description');
            $table->string('image');
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
        Schema::dropIfExists('our_teams');
    }
}
