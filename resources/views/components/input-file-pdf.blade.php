@props(['label'])
<x-form::input-file
    label="{{ $label }}"
    accept="application/pdf"
    {{ $attributes }}
/>

