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
        Schema::create('variant_specific_values', function (Blueprint $table) {
            $table->id();
            $table->integer('variant_specific_id');
            $table->string('value')->unique();
            $table->timestamps();

            $table->unique(['variant_specific_id','value'],'unique_variant_specific_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variant_specific_values');
    }
};
