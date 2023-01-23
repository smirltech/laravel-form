@props(['label','selectPlaceholder' => true,'placeholder'=>'-- Sélectionner --'])
@php
    $error = $errors->has($attributes->wire('model')->value());
    if ($error) {
        $error_class = 'is-invalid';
    } else {
        $error_class = '';
    }
@endphp
@include('form::components.label')
<select {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
    <option value="" @if(!$selectPlaceholder) disabled @endif }}>{{$placeholder}}</option>
    {{$slot}}
</select>
@include('form::components.footer')




