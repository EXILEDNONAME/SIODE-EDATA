@extends('layouts.pages.index')
@push('title', 'Regions')

@push('content-head')
<th> ID Province </th>
<th> Name </th>
<th> Type </th>
<th> Postal Code </th>
@endpush

@push('content-body')
{ data: 'id_provinces' },
{ data: 'name' },
{ data: 'type' },
{ data: 'postal_code' },
@endpush
