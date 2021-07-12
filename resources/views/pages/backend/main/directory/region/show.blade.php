@extends('layouts.pages.show', ['status' => 'true'])
@push('title', 'Regions')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> ID Province </td>
      <td class="align-middle"> {{ $data->provinces->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Type </td>
      <td class="align-middle"> {{ $data->type }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Postal Code </td>
      <td class="align-middle"> {{ $data->postal_code }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Description </td>
      <td class="align-middle"> {{ $data->description }} </td>
    </tr>
    @include('extensions.datatable.page-show.main')
  </table>
</div>
@endpush
