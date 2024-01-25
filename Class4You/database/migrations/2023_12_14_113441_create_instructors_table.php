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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id('InstructorID');
            $table->string('InstructorEmail')->unique();
            $table->timestamp('UserEmail_verified_at')->nullable();
            $table->string('InstructorPassword');
            $table->string('InstructorFullName', 50)->nullable();
            $table->string('InstructorPhoneNumber', 20)->nullable();
            $table->string('InstructorHistory', 1000)->nullable();
            $table->char('InstructorFlg', 1)->default(0);
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
        Schema::dropIfExists('instructors');
    }
};
