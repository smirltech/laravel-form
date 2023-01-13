@props(['disabled' => false,'selectPlaceholder' => false,'isValid','label','error','placeholder'])
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
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control'.$classes]) !!}>
    <option @if(!$selectPlaceholder) disabled @endif }}>{{$placeholder??'-- Sélectionner --'}}</option>
    {{$slot}}
</select>
@if(isset($error))
    <x-form-invalid-feedback>
        {{$error}}
    </x-form-invalid-feedback>
@endif



