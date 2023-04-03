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
        Schema::create('datum_class', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('datum_id');
            $table->foreign('datum_id')->references('id')->on('datum')->onDelete('cascade');

            $table->integer('periodo_id');
            $table->integer('total_intervalos_movimiento');
            $table->integer('total_nervioso_movimiento');
            $table->integer('total_calmado_movimiento');
            $table->integer('total_intervalos_ritmo');
            $table->integer('total_nervioso_ritmo');
            $table->integer('total_calmado_ritmo');

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
        Schema::dropIfExists('datum_class');
    }
};
