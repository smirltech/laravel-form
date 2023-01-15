@props(['disabled' => false,'isValid'=>null,'label','error','errors'=>null,'selectPlaceholder'=>null])
@php
    if (isset($isValid) or $errors->has($attributes->wire('model')->value())) {
       $classes = (($isValid ===false) or $errors->has($attributes->wire('model')->value()))
                    ? ' is-invalid'
                    : ' is-valid';
    } else {
        $classes = '';
    }
@endphp
@include('form::components.label')
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control'.$classes]) !!}>
    <option @if(!$selectPlaceholder) disabled @endif }}>{{$placeholder??'-- Sélectionner --'}}</option>
    {{$slot}}
</select>
@include('form::components.footer')




