<?php

namespace App\Models\Backend\Main\Directory;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\System\Packet\Province;

class Region extends Model {

  use LogsActivity;

  protected $table = 'regions';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function provinces(){
    return $this->belongsTo(Province::class, 'id_provinces');
  }

}
