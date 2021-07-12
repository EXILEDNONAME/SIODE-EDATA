<?php

use App\Models\Backend\Main\Directory\Job;
use App\Models\Backend\Main\Directory\Religion;
use App\Models\Backend\Main\Directory\Region;
use App\Models\Backend\Main\Directory\Province;

function provinces() {
  $items = Province::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function filter_directory_job() {
  $items = Job::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_directory_religion() {
  $items = Religion::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_directory_region() {
  $items = Region::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}
