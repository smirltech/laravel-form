@props(['disabled' => false])

<button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'btn btn-primary']) !!}>
    {{ $slot }}
    <x-loading target="submit"/>
</button>
