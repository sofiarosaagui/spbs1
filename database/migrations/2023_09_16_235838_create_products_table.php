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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->double('price',8,2);
            $table->string('description');
            $table->integer('existence');
            $table->string('image_1'); 
            $table->string('image_2');
            $table->string('image_3');
            $table->double('capability',5,2);
            $table->string('capability_type');
            $table->string('color');
            $table->string('type');
            $table->string('status');
            $table->foreignId('supplier_id');
            

            $table->foreign('supplier_id')->references('id')->on('suppliers')  ->onUpdate('cascade')
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
        Schema::dropIfExists('products');
    }
};
