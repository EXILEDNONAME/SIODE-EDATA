@extends('layouts.pages.index')
@push('title', 'Cities')

@push('content-head')
<th> Name </th>
<th> Type </th>
<th> Postal Code </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'type' },
{ data: 'postal_code' },
{ data: 'description' },
@endpush
