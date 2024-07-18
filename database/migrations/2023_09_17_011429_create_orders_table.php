<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->date('time');
            $table->integer('quantity');
            // $table->double('subtotal',10,2);
            $table->double('price',8,2);
            $table->string('phone', 20);
            $table->string('address');
            $table->string('status');
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            

            $table->foreign('user_id')->references('id')->on('users')  ->onUpdate('cascade')
            ->onDelete('restrict');;
            $table->foreign('product_id')->references('id')->on('products')  ->onUpdate('cascade')
            ->onDelete('restrict');;
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
};
