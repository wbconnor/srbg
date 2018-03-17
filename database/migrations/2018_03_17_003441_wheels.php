<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wheels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->decimal('diameter', 2, 2);
            $table->integer('rotation');
            $table->decimal('torque', 2, 2);
            $table->string('materials');
            $table->string('drive');
            $table->boolean('brushless_motor');
            $table->integer('resolution');
            $table->boolean('shifter_option');
            
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->integer('compatibility_id')->unsigned();
            $table->foreign('compatibility_id')->references('id')->on('compatibilities');

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
        Schema::drop('wheels');
    }
}
