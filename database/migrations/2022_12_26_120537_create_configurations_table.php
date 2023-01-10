<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->integer('lower_heart_rate');
            $table->integer('higher_heart_rate');
            $table->integer('movement_monitoring_time');
            $table->integer('movement_percentage');
            $table->integer('no_movement_monitoring_time');
            $table->integer('no_movement_percentage');
            $table->string('higher_rate');
            $table->string('lower_rate');
            $table->string('lower_movement');
            $table->string('higher_movement');
            $table->string('higher_rate_movement');
            $table->string('lower_rate_movement');
            $table->string('higher_rate_lower_movement');
            $table->string('lower_rate_higher_movement');
            $table->string('no_movement');
            $table->integer('proximity');
            $table->integer('time');
            $table->string('lower_proximity_higher_rate');
            $table->string('lower_proximity_lower_rate');
            $table->string('higher_proximity_lower_time');

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');


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
        Schema::dropIfExists('configurations');
    }
};
