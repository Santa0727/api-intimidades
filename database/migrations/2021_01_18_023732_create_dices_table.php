<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dices', function (Blueprint $table) {
            $table->id();
            $table->json('place');
            $table->json('action');
            $table->integer('level');
            $table->enum('lang', ['ENG', 'SPA', 'RUS']);
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
        Schema::dropIfExists('dices');
    }
}
