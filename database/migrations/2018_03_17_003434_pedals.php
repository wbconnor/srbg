<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->text('description');
            $table->boolean('clutch');
            $table->integer('resolution');

            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->integer('tension_id')->unsigned();
            $table->foreign('tension_id')->references('id')->on('tensions');

            $table->integer('mount_id')->unsigned();
            $table->foreign('mount_id')->references('id')->on('hard_mount_option');

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
        Schema::drop('pedals');
    }
}
