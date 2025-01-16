@extends('system.layouts.form')
@section('inputs')
<x-system.form.form-group :input="['name' => 'name','required'=>'true', 'label' => 'Heading Name','default'=> $item->name ?? old('name'), 'error' => $errors->first('name')]" />

@endsection