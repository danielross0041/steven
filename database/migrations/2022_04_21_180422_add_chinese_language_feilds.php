<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChineseLanguageFeilds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('games', function (Blueprint $table) {
            $table->text('description_zh')->after('description')->nullable();
        });
        Schema::table('matches', function (Blueprint $table) {
            $table->text('prize_desc_zh')->after('prize_desc')->nullable();
            $table->text('sponsor_zh')->after('sponsor')->nullable();
            $table->text('desc_zh')->after('desc')->nullable();
            $table->text('private_desc_zh')->after('private_desc')->nullable();
            $table->text('result_zh')->after('result')->nullable();
        });
        Schema::table('site_settings', function (Blueprint $table) {
            $table->text('footer_desc_zh')->after('footer_desc')->nullable();
            $table->text('copyright_zh')->after('copyright')->nullable();
        });
        Schema::table('announcements', function (Blueprint $table) {
            $table->text('announcement_zh')->after('announcement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
