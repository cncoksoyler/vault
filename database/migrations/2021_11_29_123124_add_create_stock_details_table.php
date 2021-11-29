<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreateStockDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('stock_details', function (Blueprint $table) {
           
           
            
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('input_source_id')->references('id')->on('input_sources')->cascadeOnDelete();
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
    }
}
