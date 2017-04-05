<?php

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
            $table->increments('order_id');
            $table->integer('user_id');
            $table->foreign('user_id')->unsigned()->references('user_id')->on('users');
            $table->timestamp('order_date');
            $table->timestamp('required_date');
            $table->timestamp('ship_date');
            $table->string('transaction_status');
            $table->string('err_loc');
            $table->string('err_msg');
            $table->string('paid');
            $table->timestamp('payment_date');
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
        Schema::drop('orders');
    }
}
