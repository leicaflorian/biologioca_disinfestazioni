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
        Schema::table('services', function (Blueprint $table) {
            $table->string("meta_title")->after("title");
            $table->string("second_title")->after("meta_title")->nullable();
            $table->longText("second_content")->after("description_short")->nullable();
            
            $table->longText("description")->change();
            $table->longText("description_long")->change();
            
            $table->renameColumn("description_short", "meta_description");
            $table->renameColumn("description_long", "description_short");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
          $table->dropColumn("meta_title");
          $table->dropColumn("second_title");
          $table->dropColumn("second_content");
  
          $table->text("description")->change();
          $table->text("description_short")->change();
          
          $table->renameColumn("description_short", "description_long");
          $table->renameColumn("meta_description", "description_short");
        });
    }
};
