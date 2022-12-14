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
        Schema::create('ebay_accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('refresh_token');
            $table->text('access_token');
            $table->date('connected_date');
            $table->String('site_id');
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
        Schema::dropIfExists('ebay_accounts');
    }
};
