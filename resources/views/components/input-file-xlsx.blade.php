@props(['label'=>null])
<x-form::input-file
    label="{{ $label }}"
    accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
    {{ $attributes }}
/>
