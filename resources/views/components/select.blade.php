@props(['label','placeholder' => true,'placeholderDisabled' => false,'placeholderText'=>'-- Sélectionner --'])
@php
    $model = $attributes->wire('model')->value();
    if ($errors->has($model)) {
        $error = $errors->first($model);
        $error_class = 'is-invalid';
    } else {
        $error = '';
        $error_class = '';
    }
@endphp
@include('form::components.label')
<select {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
    @if($placeholder)
        <option selected value="" @if(!$placeholderDisabled) disabled @endif }}>{{$placeholderText}}</option>
    @endif
    {{$slot}}
</select>
@include('form::components.footer')




