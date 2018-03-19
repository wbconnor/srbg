<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shifters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->boolean('hard_mount');

            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->integer('configuration_id')->unsigned();
            $table->foreign('configuration_id')->references('id')->on('configurations');

            $table->timestamps();
            $table->softDeletes();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shifters');
    }
}
