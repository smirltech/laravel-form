@props(['disabled' => false,'isValid','label','error'])
@php
    if (isset($isValid )) {
        $classes = ($isValid ===true)
                    ? ' is-valid'
                    : ' is-invalid';
    } else {
        $classes = '';
    }
@endphp
@include('components.form-label')
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control'.$classes]) !!}>
@if(isset($error))
    <x-form-invalid-feedback>
        {{$error}}
    </x-form-invalid-feedback>
@endif


