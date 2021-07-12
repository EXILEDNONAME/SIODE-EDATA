@extends('layouts.pages.index')
@push('title', 'Members')

@push('filter-header')
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_directory_job(), NULL, ['data-column' => 2, 'placeholder' => '- Filter Job -', 'class' => 'form-control filter-job']) !!}
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_directory_religion(), NULL, ['data-column' => 3, 'placeholder' => '- Filter Religion -', 'class' => 'form-control filter-religion']) !!}
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_directory_region(), NULL, ['data-column' => 4, 'placeholder' => '- Filter Region -', 'class' => 'form-control filter-region']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.filter_job = $('.filter-job').val();
d.filter_religion = $('.filter-religion').val();
d.filter_region = $('.filter-region').val();
@endpush

@push('filter-data')
$('.filter-job').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
$('.filter-religion').change(function () {
  table.column(3)
  .search( $(this).val() )
  .draw();
});
$('.filter-region').change(function () {
  table.column(4)
  .search( $(this).val() )
  .draw();
});
@endpush

@push('filter-reset')
$('.filter-job').val('');
$('.filter-religion').val('');
$('.filter-region').val('');
@endpush

@push('content-head')
<th> Job </th>
<th> Religion </th>
<th> Region </th>
<th> NIK </th>
<th> Name </th>
<th> Gender </th>
<th> Address </th>
<th> Education </th>
@endpush

@push('content-body')
{ data: 'id_jobs' },
{ data: 'id_religions' },
{ data: 'id_regions' },
{ data: 'nik' },
{ data: 'name' },
{
  data: 'gender', orderable: true, 'className': 'align-middle text-center', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 0) { return ''; }
    if ( data == 1 ) { return 'Male'; }
    if ( data == 2 ) { return 'Female'; }
  }
},
{ data: 'address' },
{ data: 'education' },
@endpush

@push('content-body')

@endpush
