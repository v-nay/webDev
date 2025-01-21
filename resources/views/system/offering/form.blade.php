@extends('system.layouts.form')
@section('inputs')
<x-system.form.form-group :input="['name' => 'name','required'=>'true', 'label' => 'Offering Name','default'=> $item->name ?? old('name'), 'error' => $errors->first('name')]" />
<x-system.form.form-group :input="['name' => 'desc', 'required'=>'true', 'label' => 'Offering Description','default'=> $item->desc ?? old('desc'), 'error' => $errors->first('desc')]" />
<x-system.form.form-group :input="['label' => 'Offering Image','required'=>true]">
    <x-slot name='inputs'>
        <x-system.form.input-file :input="[
                'name' => 'img',
                'type' => 'file',
                'placeholder' => ' Offering image',
                'error' => $errors->first('img'),
                'required' => true
            ]" />
        @if (isset($item->img))
        <img src="{{asset('uploads/offering/'.$item->img)}}" style="height: 100px;width:100px;margin-bottom:5px">
        @else

        @endif
    </x-slot>
</x-system.form.form-group>

@endsection