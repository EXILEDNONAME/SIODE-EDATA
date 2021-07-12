@extends('layouts.pages.show', ['status' => 'true'])
@push('title', 'Members')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Job </td>
      <td class="align-middle"> {{ $data->jobs->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Religion </td>
      <td class="align-middle"> {{ $data->religions->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Region </td>
      <td class="align-middle"> {{ $data->regions->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> NIK </td>
      <td class="align-middle"> {{ $data->nik }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Gender </td>
      <td class="align-middle"> {{ $data->gender }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Education </td>
      <td class="align-middle"> {{ $data->education }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Address </td>
      <td class="align-middle"> {{ $data->address }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Description </td>
      <td class="align-middle"> {{ $data->description }} </td>
    </tr>
    @include('extensions.datatable.page-show.main')
  </table>
</div>
@endpush
