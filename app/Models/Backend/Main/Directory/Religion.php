<?php

namespace App\Models\Backend\Main\Directory;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Religion extends Model {

  use LogsActivity;

  protected $table = 'religions';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
