<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('students_id');
            $table->foreign('students_id')->references('id')->on('users');
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedInteger('occupation_id');
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->string('university',80);
            $table->string('course',50);
            $table->string('grade',25);
            $table->text('resume');
            $table->text('skills');
            $table->string('github',80)->nullable();
            $table->string('linkedin',80);
            $table->string('student_phrase',50);
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
        Schema::drop('students');
    }
}
