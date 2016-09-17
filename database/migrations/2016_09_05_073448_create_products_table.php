<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('sku',50)->unique();
            $table->string('name',100);
            $table->float('price');
            $table->string('image');
            $table->longtext('description');
            $table->float('weight');
            $table->float('stock');
            $table->string('location');
            $table->integer('category')->unsigned();
            $table->foreign('category')->references('id')->on('categories');
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
        //
        Schema::drop('products');
    }
}
