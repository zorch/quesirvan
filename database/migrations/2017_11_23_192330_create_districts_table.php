<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('state_id')->nullable();
            $table->integer('municipality_id')->nullable();
            $table->string('colony')->nullable();
            $table->integer('cp')->nullable();
            $table->integer('another_cp')->nullable();
            $table->integer('section')->nullable();
            $table->integer('local_district')->nullable();
            $table->string('municipality')->nullable();
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
        Schema::dropIfExists('districts');
    }
}
