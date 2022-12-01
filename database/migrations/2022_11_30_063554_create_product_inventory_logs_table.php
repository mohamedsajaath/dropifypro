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
        Schema::create('product_inventory_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_variant_id');
            $table->integer('previous_quantity');
            $table->integer('current_quantity');
            $table->foreignId('user_id'); //added by
            $table->double('amount', 8, 2);
            $table->date('date');
            $table->text('note');
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
        Schema::dropIfExists('product_inventory_logs');
    }
};
