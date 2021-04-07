<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_category', function (Blueprint $table) {
          $table->BigInteger('category_id')->unsigned();
           $table->BigInteger('service_id')->unsigned();;
        });
        Schema::table('service_category', function($table) {
             $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

         });
         Schema::table('service_category', function($table) {
             $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
