<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nationality');
            $table->string('birth_date');
            $table->string('birth_area');
            $table->string('live_area');
            $table->string('phone');
            $table->json('game');
            $table->enum('student', ['نعم', 'لا']);
            $table->enum('job', ['نعم', 'لا']);
            $table->enum('transport', ['نعم', 'لا']);
            $table->enum('club', ['نعم', 'لا']);
            $table->text('opinion')->nullable();
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
        Schema::dropIfExists('desires');
    }
}
