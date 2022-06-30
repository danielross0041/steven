<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->string('name');
            $table->string('url')->nullable();
            $table->datetime('timing')->nullable();
            $table->string('prize_pool')->nullable();
            $table->integer('per_kill')->nullable();
            $table->enum('team',['SOLO','DUO','SQUAD'])->default('SQUAD');
            $table->integer('entry_fee')->nullable();
            $table->integer('total_player')->nullable();
            $table->string('map')->nullable();
            $table->string('banner')->nullable();
            $table->text('prize_desc')->nullable();
            $table->text('sponsor')->nullable();
            $table->text('desc')->nullable();
            $table->text('private_desc')->nullable();
            $table->enum('status',['INACTIVE','ACTIVE','COMPLETE','START','CANCEL'])->default('ACTIVE');

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
        Schema::dropIfExists('matches');
    }
}
