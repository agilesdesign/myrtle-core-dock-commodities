<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->softDeletes();
        });

        Schema::create('commodityables', function (Blueprint $table) {
            $table->integer('commodity_id');
            $table->integer('commodityable_id');
            $table->string('commodityable_type');
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commodities');
        Schema::drop('commodityables');
    }
}
