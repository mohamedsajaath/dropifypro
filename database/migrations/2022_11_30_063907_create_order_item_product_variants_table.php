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
        Schema::create('order_item_product_variants', function (Blueprint $table) {
            $table->id();
            $table->integer('order_item_id');
            $table->integer('product_variant_id');
            $table->timestamps();

            $table->unique(['order_item_id','product_variant_id'],'unique_order_item_product_variant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item_product_variants');
    }
};
