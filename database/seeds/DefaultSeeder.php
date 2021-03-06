<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder {
  public function run() {

    // Default
    $this->call(Accesses::class);
    $this->call(Users::class);

    // Packet
    $this->call(ProvinceSeeder::class);
    $this->call(RegionSeeder::class);

    $this->call(JobSeeder::class);
    $this->call(ReligionSeeder::class);
  }
}
