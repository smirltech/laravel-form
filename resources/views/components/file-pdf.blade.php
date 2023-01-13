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
@include('form::components.label')
<input accept="application/pdf"
       type="file" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control'.$classes]) !!}>
@include('form::components.upload-feedback')
@if(isset($error))
    <x-form::invalid-feedback>
        {{$error}}
    </x-form::invalid-feedback>
@endif


