@props(['label'])
<x-form::input
    label="{{ $label }}"
    type="file"
    {{ $attributes }}
/>
@include('form::components.upload-feedback')
