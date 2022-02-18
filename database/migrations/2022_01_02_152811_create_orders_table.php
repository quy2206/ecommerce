<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->string('code');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('comment');
            $table->tinyInteger('shipping_method');
            $table->integer('shipping_fee');
            $table->tinyInteger('status');
            $table->date('order_date');
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
        Schema::dropIfExists('orders');
    }
}
