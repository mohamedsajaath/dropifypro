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
        Schema::create('user_products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('product_variant_id');
<<<<<<< HEAD
            $table->text('ebay_item_id');
=======
            $table->String('ebay_item_id');
>>>>>>> 6f80b511ac043c423a866c833b33803afc87b6c3
            $table->double('ebay_price', 8, 2);
            $table->date('date');
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
        Schema::dropIfExists('user_products');
    }
};
