<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipmodels', function (Blueprint $table) {
            $table->id();
            $table->integer('hersteller_id')->nullable()->unsigned();
            $table->string('name')->default('');
            $table->timestamps();
        });

        Schema::table('ships', function (Blueprint $table) {
            $table->integer('shipmodel_id')->nullable()->unsigned()->after('id');
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
            $table->dropColumn('shipmodel_id');
        });

        Schema::dropIfExists('shipmodels');
    }
}
