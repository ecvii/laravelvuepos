<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('shipping_area_id');
            $table->double('price');
            $table->string('shipping_address');
            $table->integer('order_id');
            $table->integer('branch_id');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('shipping_information');
    }
}
