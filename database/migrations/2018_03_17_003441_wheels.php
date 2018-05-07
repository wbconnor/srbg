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
            $table->text('description');
            $table->decimal('diameter', 2, 2);
            $table->integer('rotation');
            $table->decimal('torque', 2, 2);
            $table->boolean('brushless_motor');
            $table->integer('resolution');

            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->integer('drive_id')->unsigned();
            $table->foreign('drive_id')->references('id')->on('drives');

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
        Schema::drop('wheels');
    }
}
