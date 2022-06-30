<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_players', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('match_id');
            $table->integer('kills')->default(0)->nullable();
            $table->integer('position')->default(null)->nullable();
            $table->string('kill_amount')->default(null)->nullable();
            $table->string('win_prize')->default(null)->nullable();
            $table->string('total_amount')->default(null)->nullable();
            $table->string('bonus')->default(null)->nullable();
            $table->string('refund')->default(null)->nullable();
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
        Schema::dropIfExists('match_players');
    }
}
