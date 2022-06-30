<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchPositionPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_position_points', function (Blueprint $table) {
            $table->id();
            $table->integer('match_id');
            $table->integer('position_1')->nullable();
            $table->integer('position_2')->nullable();
            $table->integer('position_3')->nullable();
            $table->integer('position_4')->nullable();
            $table->integer('position_5')->nullable();
            $table->integer('other')->nullable();
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
        Schema::dropIfExists('match_position_points');
    }
}
