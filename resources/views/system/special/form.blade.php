@extends('system.layouts.form')
@section('inputs')
<x-system.form.form-group :input="['name' => 'name','required'=>'true', 'label' => 'Special Name','default'=> $item->name ?? old('name'), 'error' => $errors->first('name')]" />
<x-system.form.form-group :input="['name' => 'desc', 'required'=>'true', 'label' => 'Special Description','default'=> $item->desc ?? old('desc'), 'error' => $errors->first('desc')]" />
<x-system.form.form-group :input="['label' => 'Special Image','required'=>true]">
    <x-slot name='inputs'>
        <x-system.form.input-file :input="[
                'name' => 'img',
                'type' => 'file',
                'placeholder' => ' special image',
                'error' => $errors->first('img'),
                'required' => true
            ]" />
        @if (isset($item->img))
        <img src="{{asset('uploads/special/'.$item->img)}}" style="height: 100px;width:100px;margin-bottom:5px">
        @else

        @endif
    </x-slot>
</x-system.form.form-group>
<x-system.form.form-group :input="['name' => 'price','required'=>'true', 'label' => 'Special price','default'=> $item->price ?? old('price'), 'error' => $errors->first('price')]" />

@endsection