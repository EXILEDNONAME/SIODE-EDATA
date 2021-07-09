<?php

use App\Models\Backend\Main\Directory\Religion;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class ReligionSeeder extends Seeder {
  public function run() {
    $data = [
      [
        'name'          => 'Lainnya',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Islam',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Kristen',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Budha',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Hindu',
        'created_at'    => Carbon::now(),
      ],
    ];

    Religion::insert($data);
  }

}
