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
        //
        Schema::dropIfExists('reviews');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->integer('product_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }
};
