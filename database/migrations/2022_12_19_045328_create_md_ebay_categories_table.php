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
        Schema::create('md_ebay_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->index('ebay_category_index');
            $table->integer('level')->default(0);
            $table->string('name', 50);
            $table->integer('parent_id')->index('parent_id_index');
            $table->tinyInteger('leaf_category');
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
        Schema::dropIfExists('md_ebay_categories');
    }
};
