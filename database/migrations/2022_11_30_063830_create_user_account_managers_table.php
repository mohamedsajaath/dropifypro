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
        Schema::create('user_account_managers', function (Blueprint $table) {
            $table->id();
            $table->integer('account_manager_id');
            $table->integer('user_id');
            $table->timestamps();

            $table->unique(['account_manager_id','user_id'],'unique_user_account_manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_account_managers');
    }
};
