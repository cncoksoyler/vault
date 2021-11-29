<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('input_source_id');
            $table->float('quantitiy');
            $table->timestamps();
            
        });

        // Schema::table('stock_details', function (Blueprint $table) {
           
           
            
        //     $table->foreign('product_id')->references('id')->on('products');
        //     $table->foreign('location_id')->references('id')->on('locations');
        //     $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        //     $table->foreign('input_source_id')->references('id')->on('input_sources')->cascadeOnDelete();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_details');
    }
}
