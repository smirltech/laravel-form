@props(['label'=>null])
<x-form::input
    label="{{ $label }}"
    type="number" step="0.01"
    {{ $attributes }}
/>


