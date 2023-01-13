@props(['disabled' => false])

<button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'btn']) !!}>
    {{ $slot }}
    <x-form::loading target="submit"/>
</button>




