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
        $table->string('location')->default('');
        $table->string('phone')->default('');
        $table->string('price')->default('');
        $table->string('style')->default('');
        $table->string('hours')->default('');
        $table->integer('rating')->default(0);
        $table->string('website')->default('');
        // $table->string('path')->default('/image/default.jpg');
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
