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
            $table->integer('user_id');
            $table->tinyInteger('status');
<<<<<<< HEAD
            $table->text('ebay_order_id');
=======
            $table->string('ebay_order_id');
>>>>>>> 6f80b511ac043c423a866c833b33803afc87b6c3
            $table->double('total_amount', 8, 2);
            $table->integer('total_quantity');
            $table->json('content')->nullable();
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
