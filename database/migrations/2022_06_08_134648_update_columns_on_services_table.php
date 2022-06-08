<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('services', function (Blueprint $table) {
      $table->longText('description')->change();
      $table->longText('description_long')->nullable(true)->change();
      $table->string('description_short')->nullable(true)->change();
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    //
  }
};
