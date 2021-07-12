<?php

use App\Models\Backend\Main\Directory\Job;
use App\Models\Backend\Main\Directory\Religion;
use App\Models\Backend\Main\Directory\Region;

function jobs() {
  $items = Job::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function religions() {
  $items = Religion::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function regions() {
  $items = Region::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}
