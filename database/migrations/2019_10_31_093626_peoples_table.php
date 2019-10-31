<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('age');
            $table->string('year_of_birth');
            $table->string('year_of_death');
            $table->string('special_features');
            $table->string('hair_color');
            $table->string('eye_color');
            $table->string('height');
            $table->string('weight');
            $table->string('nationality');
            $table->string('occupation');
            $table->string('status_text');
            $table->integer('img_id');
            $table->integer('status_id');
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
        Schema::dropIfExists('people');
    }
}
