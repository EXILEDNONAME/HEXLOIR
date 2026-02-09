@extends('layouts.backend.__templates.show', ['active' => 'false', 'date' => 'false', 'daterange' => 'false', 'file' => 'true', 'status' => 'false'])
@section('title', 'Contents')

@section('table-header')
<tr>
    <td class="align-middle"> Id Tag </td>
    <td class="align-middle"> {{ $data->id_tag }} </td>
</tr>
<tr>
    <td class="align-middle"> Id Category </td>
    <td class="align-middle"> {{ $data->id_category }} </td>
</tr>
<tr>
    <td class="align-middle"> Name </td>
    <td class="align-middle"> {{ $data->name }} </td>
</tr>
<tr>
    <td class="align-middle"> Description </td>
    <td class="align-middle"> {{ $data->description }} </td>
</tr>
@endsection