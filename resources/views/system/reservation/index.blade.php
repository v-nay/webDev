@extends('system.layouts.listing')
@section('header')
<x-system.search-form :action="$indexUrl">
    <x-slot name="inputs">
        <x-system.form.form-inline-group :input="['name' => 'keyword', 'placeholder' => 'Keyword', 'default' => Request::get('keyword')]"></x-system.form.form-inline-group>
    </x-slot>
</x-system.search-form>
@endsection
@section('create')
@endsection

@section('table-heading')
<tr>
    <th scope="col">{{translate('S.N')}}</th>
    <th scope="col">{{translate('Name')}}</th>
    <th scope="col">{{translate('Phone')}}</th>
    <th scope="col">{{translate('Date')}}</th>
    <th scope="col">{{translate('Time')}}</th>
</tr>
@endsection

@section('table-data')
@php $pageIndex = pageIndex($items); @endphp
@foreach($items as $key=>$item)
<tr>
    <td>{{SN($pageIndex, $key)}}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->phone }}</td>
    <td>{{ $item->date }}</td>
    <td>{{ $item->time }}</td>
</tr>
@endforeach
@endsection