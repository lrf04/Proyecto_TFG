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
        Schema::table('configurations', function (Blueprint $table) {
            $table->dropColumn('movement_monitoring_time');
            $table->dropColumn('movement_percentage');
            $table->dropColumn('no_movement_monitoring_time');
            $table->dropColumn('no_movement_percentage');
            $table->dropColumn('proximity');
            $table->dropColumn('time');
            $table->dropColumn('lower_proximity_lower_rate');
            $table->dropColumn('higher_proximity_lower_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('configurations', function (Blueprint $table) {
            $table->integer('movement_monitoring_time')->nullable();
            $table->integer('movement_percentage')->nullable();
            $table->integer('no_movement_monitoring_time')->nullable();
            $table->integer('no_movement_percentage')->nullable();
            $table->integer('proximity')->nullable();
            $table->integer('time')->nullable();
            $table->integer('lower_proximity_lower_rate')->nullable();
            $table->integer('higher_proximity_lower_time')->nullable();
        });
    }
};
