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
<input {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
@include('form::components.footer')


