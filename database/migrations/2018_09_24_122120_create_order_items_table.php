<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('product_id');
            $table->integer('variant_id');
            $table->string('type')->nullable();
            $table->float('quantity');
            $table->double('price', 20,2);
            $table->double('discount', 20,2)->default(0);
            $table->double('sub_total', 20,2)->default(0);
            $table->integer('tax_id')->nullable();
            $table->integer('order_id');
            $table->integer('adjust_stock_type_id')->default(0);
            $table->string('note')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
