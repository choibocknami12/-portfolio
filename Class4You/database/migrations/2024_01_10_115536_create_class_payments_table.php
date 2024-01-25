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
        Schema::create('class_payments', function (Blueprint $table) {
            $table->id('PaymentID');
            $table->integer('EnrollmentID');
            $table->integer('PaymentAmount')->default(0);
            $table->char('PaymentMeans', 1)->default(0);
            $table->char('PaymentState', 1)->default(0);
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
        Schema::dropIfExists('class_payments');
    }
};
