<?php

// DATA - MEMBERS
Route::group([
  'as' => 'main.data.members.',
  'prefix' => 'dashboard/data/members',
  'namespace' => 'Backend\Main\Data',
], function(){
  Route::get('status-done/{id}', 'MemberController@status_done')->name('status-done')->middleware(['auth', 'administrator']);
  Route::get('status-pending/{id}', 'MemberController@status_pending')->name('status-pending')->middleware(['auth', 'administrator']);
  Route::get('enable/{id}', 'MemberController@enable')->name('enable')->middleware(['auth', 'administrator']);
  Route::get('disable/{id}', 'MemberController@disable')->name('disable')->middleware(['auth', 'administrator']);
  Route::get('status/{id}/{slug}', 'MemberController@status')->name('status')->middleware(['auth', 'administrator']);
  Route::get('delete/{id}', 'MemberController@delete')->name('delete')->middleware(['auth', 'administrator']);
  Route::get('deleteall', 'MemberController@deleteall')->name('deleteall')->middleware(['auth', 'administrator']);
  Route::resource('/', 'MemberController')->middleware(['auth', 'administrator'])->parameters(['' => 'id']);
});
