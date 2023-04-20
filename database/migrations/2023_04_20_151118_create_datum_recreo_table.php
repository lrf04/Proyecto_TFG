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
        Schema::create('datum_recreo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('datum_id');
            $table->foreign('datum_id')->references('id')->on('datum')->onDelete('cascade');

            $table->integer('periodo_id');
            $table->integer('steps');
            $table->integer('total_movimiento');
            $table->integer('total_no_movimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datum_recreo');
    }
};
