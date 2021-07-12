<?php

namespace App\Models\Backend\Main\Data;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Directory\Job;
use App\Models\Backend\Main\Directory\Religion;
use App\Models\Backend\Main\Directory\Region;

class Member extends Model {

  use LogsActivity;

  protected $table = 'members';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function jobs(){
    return $this->belongsTo(Job::class, 'id_job');
  }

  public function religions(){
    return $this->belongsTo(Religion::class, 'id_religion');
  }

  public function regions(){
    return $this->belongsTo(Region::class, 'id_region');
  }

}
