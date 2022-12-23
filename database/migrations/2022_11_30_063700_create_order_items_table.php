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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->text('title');
            $table->double('amount', 8, 2);
            $table->string('sku');
<<<<<<< HEAD
            $table->text('ebay_item_id');
=======
            $table->string('ebay_item_id');
>>>>>>> 6f80b511ac043c423a866c833b33803afc87b6c3
            $table->integer('quantity');
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
        Schema::dropIfExists('order_items');
    }
};
