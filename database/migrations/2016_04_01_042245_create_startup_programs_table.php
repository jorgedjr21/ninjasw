<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartupProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startup_programs', function (Blueprint $table) {
            $table->unsignedInteger('startup_id');
            $table->foreign('startup_id')->references('id')->on('startups');
            $table->unsignedInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('startup_programs');
    }
}
