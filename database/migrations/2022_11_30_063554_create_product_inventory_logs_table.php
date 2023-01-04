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
            $table->integer('product_variant_id');
            $table->integer('previous_quantity')->nullable();
            $table->integer('current_quantity')->nullable();
            $table->integer('user_id')->nullable(); //added by
            $table->double('amount', 8, 2)->nullable();
            $table->date('date')->nullable();
            $table->text('note')->nullable();
            $table->tinyInteger('reference_type')->nullable();
            $table->tinyInteger('reference_value')->nullable();
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
