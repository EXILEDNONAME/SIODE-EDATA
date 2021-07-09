<?php

use App\Models\Backend\Main\Directory\Job;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class JobSeeder extends Seeder {

  public function run() {
    $data = [
      [
        'name'          => 'Lainnya',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Wirausaha',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Wiraswasta',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Freelance',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Pelajar',
        'created_at'    => Carbon::now(),
      ],
    ];

    Job::insert($data);
  }
}
