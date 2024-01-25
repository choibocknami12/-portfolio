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
        Schema::create('boards', function (Blueprint $table) {
            $table->id('BoardID');
            $table->integer('ClassID')->nullable();
            $table->integer('UserID');
            $table->char('BoardCategoryID', 1)->default(0);
            // $table->integer('EnrollmentID')->nullable();
            $table->string('BoardTitle', 100);
            $table->string('BoardComment', 10000);
            $table->integer('BoardView')->default(0);
            // $table->integer('BoardRecommended')->default(0);
            // $table->integer('BoardNotRecommended')->default(0);
            $table->char('BoardFlg', 1)->default(0);
            $table->char('BoardInstructorFlg', 1)->default(0);
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
        Schema::dropIfExists('boards');
    }
};
