<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->increments('order_id')->unique();

             $table->bigInteger('CNP')->unsigned()->nullable();
            $table->foreign('CNP')->references('CNP')->on('users')
                  ->onUpdate('cascade')->onDelete('set null');

            $table->bigInteger('id_product')->unsigned()->nullable();
            $table->foreign('id_product')->references('id_product')
                ->on('products')->onUpdate('cascade')->onDelete('set null');

            $table->integer('quantity')->unsigned();
            $table->string('address');
            $table->string('city');
            $table->string('county');
            $table->float('postal_code');
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
        Schema::dropIfExists('order_products');
    }
}
