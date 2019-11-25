<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('age');
            $table->enum('gender', ['ذكر', 'أنثي'])->default('ذكر');
            $table->string('qualification');
            $table->string('nationality');
            $table->string('phone');
            $table->string('email');
            $table->string('work_type');
            $table->string('type');
            $table->string('volunteer_time');
            $table->string('goal');
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
        Schema::dropIfExists('volunteers');
    }
}
