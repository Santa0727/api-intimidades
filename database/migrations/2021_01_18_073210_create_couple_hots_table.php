<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoupleHotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couple_hots', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Q', 'D']);
            $table->enum('gender', ['M', 'F']);
            $table->text('value');
            $table->integer('shot');
            $table->enum('lang', ['ENG', 'RUS', 'SPA']);
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
        Schema::dropIfExists('couple_hots');
    }
}
