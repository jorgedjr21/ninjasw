<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartupQuestionsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startup_question_answers', function (Blueprint $table) {
            $table->unsignedInteger('question_id');
            $table->foreign('question_id')->references('id')->on('startup_questions');
            $table->unsignedInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->unsignedInteger('startup_id');
            $table->foreign('startup_id')->references('id')->on('startups');
            $table->text('answer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('startup_question_answers');
    }
}
