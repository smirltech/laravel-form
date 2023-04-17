@props(['media'=>null,'delete'=>false])
<x-form::input
    type="file"
    {{ $attributes }}
/>

@if($media)
    <x-form::list-files :media="$media" :delete="$delete"/>
@endif

@include('form::components.upload-feedback')

