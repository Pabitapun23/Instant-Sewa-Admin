<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoryServiceProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category_service_providers', function (Blueprint $table) {
         $table->id();
        $table->BigInteger('service_provider_id')->unsigned();
        $table->BigInteger('subcategories_id')->unsigned();;
        $table->timestamps();
        });
        Schema::table('sub_category_service_providers', function($table) {
             $table->foreign('service_provider_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

         });
         Schema::table('sub_category_service_providers', function($table) {
             $table->foreign('subcategories_id')->references('id')->on('sub_categories')->onDelete('cascade')->onUpdate('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_category_service_providers');
    }
}
