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
        Schema::table('periods', function (Blueprint $table) {
            $table->dropForeign(['day_id']);
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade')->change();

            $table->dropForeign(['subject_id']);
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('periods', function (Blueprint $table) {
            $table->removeColumn('day_id');
            $table->removeColumn('subject_id');
        });
    }
};
