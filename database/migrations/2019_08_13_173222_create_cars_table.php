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
            $table->bigIncrements('id');


            //TODO:: add photos

            $table->unsignedInteger('car_model_id');
            $table->unsignedInteger('car_model_parent_id');
            $table->integer('model_year');
            $table->enum('gear_type', ['automatic', 'gear']);
            $table->enum('fuel', ['solar', 'benzene']);
            $table->integer('engine_size'); // 2000cc
            $table->integer('engine_power'); //hours
            $table->integer('distance');
            $table->double('price');
            $table->integer('passenger_number');
            $table->string('previous_holders_number');
            $table->string('color');
            $table->timestamp('sold_at')->nullable();

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
