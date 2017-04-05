<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->increments('orderdetail_id');
            $table->integer('order_id');
            $table->foreign('order_id')->unsigned()->references('order_id')->on('orders');
            $table->integer('lesson_id');
            $table->foreign('lesson_id')->unsigned()->references('lesson_id')->on('lessons');
            $table->integer('order_sku');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('total');
            $table->tinyInteger('fulfilled');
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
        Schema::drop('orderdetails');
    }
}
