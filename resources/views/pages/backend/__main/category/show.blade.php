@extends('layouts.backend.__templates.show', ['active' => 'false', 'date' => 'false', 'daterange' => 'false', 'file' => 'false', 'status' => 'false'])
@section('title', 'Categories')

@section('table-header')
<tr>
    <td class="align-middle"> Name </td>
    <td class="align-middle"> {{ $data->name }} </td>
</tr>
<tr>
    <td class="align-middle"> Description </td>
    <td class="align-middle"> {{ $data->description }} </td>
</tr>
@endsection