<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('restaurants', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->default('');
        $table->string('location');
        $table->string('phone');
        $table->string('price');
        $table->string('style');
        $table->string('hours');
        $table->integer('rating')->default(0);
        $table->string('website');
        $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
