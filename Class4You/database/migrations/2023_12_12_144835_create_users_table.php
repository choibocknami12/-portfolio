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
        Schema::create('users', function (Blueprint $table) {
            $table->id('UserID');
            $table->string('UserEmail')->unique();
            $table->timestamp('UserEmail_verified_at')->nullable();
            $table->string('UserPassword');
            $table->string('UserName', 50);
            $table->string('UserPhoneNumber', 20);
            $table->date('UserBirthDate');
            $table->string('UserPostcode')->nullable();
            $table->string('UserRoadAddress')->nullable();
            $table->string('UserDetailedAddress')->nullable();
            $table->char('UserTermsofUse',1)->default(0);
            $table->char('UserPrivacy',1)->default(0);
            $table->char('UserState',1)->default(0);
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
        Schema::dropIfExists('users');
    }
};
