@props(['disabled' => false,'isValid'=>null,'label','error','errors'=>null])
@php
    if (isset($isValid) or $errors->has($attributes->wire('model')->value())) {
       $classes = (($isValid ===false) or $errors->has($attributes->wire('model')->value()))
                    ? ' is-invalid'
                    : ' is-valid';
    } else {
        $classes = '';
    }
@endphp
<input
    type="file" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control'.$classes]) !!}>
@include('form::components.upload-feedback')
@include('form::components.footer')




