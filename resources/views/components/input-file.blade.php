@props(['label'=>null,'media'=>null,'deleteFiles'=>false])
<x-form::input
    label="{{ $label }}"
    type="file"
    {{ $attributes }}
/>

@if($media)
    <x-form::list-files :media="$media" :delete="$deleteFiles"/>
@endif

@include('form::components.upload-feedback')

