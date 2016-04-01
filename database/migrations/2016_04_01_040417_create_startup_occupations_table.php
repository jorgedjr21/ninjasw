<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartupOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startup_occupations', function (Blueprint $table) {
            $table->unsignedInteger('occupation_id');
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->unsignedInteger('startup_id');
            $table->foreign('startup_id')->references('id')->on('startups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('startup_occupations');
    }
}
