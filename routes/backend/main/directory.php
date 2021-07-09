<?php

// DIRECTORY - JOBS
Route::group([
  'as' => 'main.directory.jobs.',
  'prefix' => 'dashboard/directory/jobs',
  'namespace' => 'Backend\Main\Directory',
], function(){
  Route::get('status-done/{id}', 'JobController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'JobController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'JobController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'JobController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'JobController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'JobController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'JobController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'JobController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});

// DIRECTORY - RELIGIONS
Route::group([
  'as' => 'main.directory.religions.',
  'prefix' => 'dashboard/directory/religions',
  'namespace' => 'Backend\Main\Directory',
], function(){
  Route::get('status-done/{id}', 'ReligionController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'ReligionController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'ReligionController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'ReligionController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'ReligionController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'ReligionController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'ReligionController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'ReligionController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});
