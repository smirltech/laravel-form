@props(['media'=>null,'delete'=>false])
<x-form::input
    type="file"
    {{ $attributes }}
/>

@if($media)
    <x-media::list :media="$media" :delete="$delete"/>
@endif

@include('form::components.upload-feedback')

