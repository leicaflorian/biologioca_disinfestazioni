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
    Schema::create('services', function (Blueprint $table) {
      $table->id();
      $table->string('slug')->unique();
      $table->string('name');
      $table->string('title');
      $table->string('description');
      $table->string('description_long')->nullable(true);
      $table->string('description_short')->nullable(true);
      $table->string('img_cover');
      $table->string('img_cover_low_res')->nullable(true);
      $table->string('img_cover_alt')->nullable(true);
      $table->boolean('has_page')->default(false)->nullable(true);
      $table->boolean('featured')->default(false)->nullable(true);
      $table->smallInteger('order')->default(-1)->nullable(true);
      $table->timestamps();
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('services');
  }
};
