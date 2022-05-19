<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $csvfile     = 'services.csv';
    $file_handle = fopen(__DIR__ . "/" . $csvfile, 'r');
    Service::truncate();
    while (($row = fgetcsv($file_handle, 0, ",")) !== false) {
      //Dump out the row for the sake of clarity.
      Service::create([
        'slug'              => $row[1],
        'name'              => $row[0],
        'title'             => $row[7],
        'description'       => $row[8],
        'description_long'  => $row[13],
        'description_short' => $row[11],
        'img_cover'         => $row[9],
        'img_cover_low_res' => $row[9],
        'img_cover_alt'     => $row[13],
        'has_page'          => $row[16],
        'featured'          => $row[17],
        'order'             => $row[26],
      ]);
    }
  }
}
