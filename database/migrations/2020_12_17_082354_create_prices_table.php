<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipment_id')->unsigned();
            $table->integer('cost_price');
            $table->integer('sale_price');
            $table->integer('rate');
            $table->integer('cost_price_sy');
            $table->integer('sale_price_sy');
            $table->integer('marketer_id')->unsigned();
            $table->integer('marketer_total');
            $table->integer('contract_id')->unsigned()->nullable();
            $table->integer('contract_total')->nullable();
            $table->integer('salesmanager_id')->unsigned();
            $table->integer('salesmanager_total');
            $table->timestamps();

            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('cascade');
            $table->foreign('marketer_id')->references('id')->on('marketers')->onDelete('cascade');
            $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('cascade');
            $table->foreign('salesmanager_id')->references('id')->on('salesmanagers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
