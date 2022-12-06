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
            $table->integer('previous_quantity');
            $table->integer('current_quantity');
            $table->integer('user_id'); //added by
            $table->double('amount', 8, 2);
            $table->date('date');
            $table->text('note');
            $table->tinyInteger('reference_type');
            $table->tinyInteger('reference_value');
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
