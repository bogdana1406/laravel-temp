<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->references('id')->on('brand');
            $table->string('model');
            $table->smallInteger('seats');
            $table->smallInteger('doors');
            $table->enum('transmission types', ['manual', 'automatic']);
            $table->smallInteger('year');
            $table->integer('engine_id')->references('id')->on('engine');
            $table->string('price');
            $table->text('about')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
