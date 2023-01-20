@props(['label'])
@php
    $error = $errors->has($attributes->wire('model')->value());
    if ($error) {
        $error_class = 'is-invalid';
    } else {
        $error_class = '';
    }
@endphp
@include('form::components.label')
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
    <option @if(!$selectPlaceholder) disabled @endif }}>{{$placeholder??'-- Sélectionner --'}}</option>
    {{$slot}}
</select>
@include('form::components.footer')




