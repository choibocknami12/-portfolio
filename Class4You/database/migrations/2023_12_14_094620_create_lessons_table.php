<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('LessonID');
            $table->integer('ChapterID');
            $table->string('LessonTitle', 100);
            $table->string('LessonContent', 100);
            $table->string('LessonVideoID', 100);
            $table->float('LessonProgress')->default(0);
            $table->float('LessonRunningTime')->default(0);
            $table->char('LessonFlg', 1)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
