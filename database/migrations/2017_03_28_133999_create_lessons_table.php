<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('lesson_id');
            $table->integer('course_id');
            $table->foreign('course_id')->unsigned()->references('course_id')->on('courses');
            $table->string('lesson_sku');
            $table->string('lesson_name');
            $table->string('long_description');
            $table->string('short_description');
            $table->string('level');
            $table->integer('price');
            $table->tinyInteger('available');
            $table->tinyInteger('discount_available');
            $table->string('picture');
            $table->integer('ranking');
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
        Schema::drop('lessons');
    }
}
