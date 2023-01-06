<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('order_type');
            $table->longText('sales_note')->nullable();
            $table->double('sub_total', 20,2);
            $table->double('total_tax', 20,2)->default(0);
            $table->double('due_amount', 20,2)->default(0);
            $table->double('total', 20,2);
            $table->string('type');
            $table->double('profit', 20,2)->default(0);
            $table->string('status');
            $table->double('all_discount', 20,2)->default(0);
            $table->integer('customer_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->integer('branch_id');
            $table->integer('transfer_branch_id')->nullable();
            $table->integer('table_id')->nullable();
            $table->integer('created_by');
            $table->string('returned_invoice')->nullable();
            $table->string('return_type')->nullable();
            $table->string('invoice_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
