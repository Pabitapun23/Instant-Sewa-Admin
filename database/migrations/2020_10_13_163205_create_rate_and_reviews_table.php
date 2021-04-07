<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\softDeletes;
use Illuminate\Support\Facades\Schema;

class CreateRateAndReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_and_reviews', function (Blueprint $table) {
            $table->id();
            $table->float('rating');
            $table->string('reviews')->nullable();
            $table->BigInteger('service_provider_id')->unsigned();
           $table->BigInteger('service_user_id')->unsigned();
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
        Schema::dropIfExists('rate_and_reviews');
    }
}
