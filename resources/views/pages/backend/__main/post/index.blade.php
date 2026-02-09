@extends('layouts.backend.__templates.index', ['page' => 'datatable-index', 'activities' => 'false', 'charts' => 'false', 'active' => 'false', 'date' => 'false', 'daterange' => 'false', 'file' => 'false', 'status' => 'false'])
@section('title', 'Posts')

@section('table-header')
<th class="w-px whitespace-nowrap"><span class="kt-table-col flex items-center justify-between"><span class="kt-table-col-label kt-card-title text-sm"> Pin </span><span class="kt-table-col-sort"></span></span></th>
<th class="w-px whitespace-nowrap"><span class="kt-table-col flex items-center justify-between"><span class="kt-table-col-label kt-card-title text-sm"> Name </span><span class="kt-table-col-sort"></span></span></th>
<th class="w-px whitespace-nowrap"><span class="kt-table-col flex items-center justify-between"><span class="kt-table-col-label kt-card-title text-sm"> Tags </span><span class="kt-table-col-sort"></span></span></th>
<th class="w-px whitespace-nowrap"><span class="kt-table-col flex items-center justify-between"><span class="kt-table-col-label kt-card-title text-sm"> Categories </span><span class="kt-table-col-sort"></span></span></th>
<th class="w-px whitespace-nowrap"><span class="kt-table-col flex items-center justify-between"><span class="kt-table-col-label kt-card-title text-sm"> Description </span><span class="kt-table-col-sort"></span></span></th>
@endsection

@section('table-body')
{ data: 'pin' }, 
{ data: 'name' }, 
{ data: 'tags' }, 
{ data: 'categories' }, 
{ data: 'description' }, 
@endsection