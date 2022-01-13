<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateShipsWithNewFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ships', function (Blueprint $table) {
            //
            $table->float('length')->default(0.0);
            $table->float('width')->default(0.0);
            $table->float('weight')->default(0.0);
            $table->string('power')->nullable();
            $table->string('motor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ships', function (Blueprint $table) {
            //
            $table->dropColumn('length');
            $table->dropColumn('width');
            $table->dropColumn('weight');
            $table->dropColumn('power');
            $table->dropColumn('motor');
        });
    }
}
