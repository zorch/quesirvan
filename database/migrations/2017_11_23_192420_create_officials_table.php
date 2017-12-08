<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('gender');
            $table->integer('district');
            $table->string('city_name')->nullable();
            $table->integer('age');
            $table->string('type');
            $table->string('party');
            $table->string('facebook')->nullable();
            $table->string('facebook_count')->nullable();
            $table->string('twitter')->nullable();
            $table->string('twitter_count')->nullable();
            $table->string('instagram')->nullable();
            $table->string('avatar_path')->nullable();
            $table->text('academic_degree')->nullable();
            $table->text('aspirated_positions')->nullable();
            $table->text('actual_position')->nullable();
            $table->text('public_charges')->nullable();
            $table->text('highlights')->nullable();
            $table->text('paving')->nullable();
            $table->text('garbage_collection')->nullable();
            $table->text('wtf_expenses')->nullable();
            $table->text('payroll_officials')->nullable();
            $table->text('security')->nullable();
            $table->text('economic_networks')->nullable();
            $table->text('power_networks')->nullable();
            $table->text('party_memberships')->nullable();
            $table->text('anomalies')->nullable();
            $table->text('awards')->nullable();
            $table->text('sources')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('officials');
    }
}
