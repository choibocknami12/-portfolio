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
        Schema::create('board_languagelinks', function (Blueprint $table) {
            $table->id('BoardCategorylinkID');
            $table->integer('BoardID');
            $table->char('HTML', 1)->default(0);
            $table->char('CSS', 1)->default(0);
            $table->char('JavaScript', 1)->default(0);
            $table->char('PHP', 1)->default(0);
            $table->char('JAVA', 1)->default(0);
            $table->char('DataBase', 1)->default(0);
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
        Schema::dropIfExists('board_languagelinks');
    }
};
