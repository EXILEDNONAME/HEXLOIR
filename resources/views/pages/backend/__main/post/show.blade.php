@extends('layouts.backend.__templates.show', ['active' => 'false', 'date' => 'false', 'daterange' => 'false', 'file' => 'false', 'status' => 'false'])
@section('title', 'Posts')

@section('table-header')
<tr>
    <td class="align-middle"> Pin </td>
    <td class="align-middle"> {{ $data->pin }} </td>
</tr>
<tr>
    <td class="align-middle"> Name </td>
    <td class="align-middle"> {{ $data->name }} </td>
</tr>
<tr>
    <td class="align-middle"> Tags </td>
    <td class="align-middle"> {{ $data->tags }} </td>
</tr>
<tr>
    <td class="align-middle"> Categories </td>
    <td class="align-middle"> {{ $data->categories }} </td>
</tr>
<tr>
    <td class="align-middle"> Description </td>
    <td class="align-middle"> {{ $data->description }} </td>
</tr>
@endsection