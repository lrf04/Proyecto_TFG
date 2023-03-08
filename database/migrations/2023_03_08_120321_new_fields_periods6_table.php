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
            $table->dropColumn('day_id');
            $table->time('timeFinish')->after('time');
            $table->string('day')->after('id');

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
            $table->foreign('day_id')->references('id')->on('days');
            $table->dropColumn('timeFinish');
            $table->dropColumn('day');
        });
    }
};
