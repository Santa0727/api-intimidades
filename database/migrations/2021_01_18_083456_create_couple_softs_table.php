<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoupleSoftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couple_softs', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Q', 'D']);
            $table->enum('gender', ['M', 'F']);
            $table->text('value');
            $table->integer('shot');
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
        Schema::dropIfExists('couple_softs');
    }
}
