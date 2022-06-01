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
        Schema::table('videos', function (Blueprint $table) {
            $table->string("title");
            $table->string("description");
            $table->string("thumb_default");
            $table->string("thumb_medium");
            $table->string("thumb_high");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
          $table->dropColumn("title");
          $table->dropColumn("description");
          $table->dropColumn("thumb_default");
          $table->dropColumn("thumb_medium");
          $table->dropColumn("thumb_high");
        });
    }
};
