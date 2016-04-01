<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_occupations', function (Blueprint $table) {
            $table->unsignedInteger('occupation_id');
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students_occupations');
    }
}
