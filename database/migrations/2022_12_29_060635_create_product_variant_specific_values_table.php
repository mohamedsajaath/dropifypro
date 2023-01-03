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
        Schema::create('product_variant_specific_values', function (Blueprint $table) {
            $table->id();
            $table->integer('variant_id');
            $table->integer('variant_specific_value_id');
            $table->timestamps();

            $table->unique(['variant_id','variant_specific_value_id'],'unique_product_variant_attribute');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_variant_specific_values');
    }
};
