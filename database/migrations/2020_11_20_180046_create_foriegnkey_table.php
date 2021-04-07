<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForiegnkeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('services', function($table) {
            $table->foreign('sub_categories_id')->references('id')->on('sub_categories')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('sub_categories', function($table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
          Schema::table('carts', function($table) {
             $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');

         });
          Schema::table('carts', function($table) {
             $table->foreign('cart_collection_id')->references('id')->on('cart_groups')->onDelete('cascade')->onUpdate('cascade');

         });
          Schema::table('operations', function($table) {
             $table->foreign('service_provider_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

         });
          Schema::table('operations', function($table) {
             $table->foreign('cart_collection_id')->references('id')->on('cart_groups')->onDelete('cascade')->onUpdate('cascade');

         });
          Schema::table('operations', function($table) {
             $table->foreign('service_user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

         });
          
          Schema::table('favourites', function($table) {
             $table->foreign('service_provider_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

         });
          Schema::table('favourites', function($table) {
             $table->foreign('service_user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

         });
           Schema::table('rate_and_reviews', function($table) {
             $table->foreign('service_provider_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

         });
          Schema::table('rate_and_reviews', function($table) {
             $table->foreign('service_user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
