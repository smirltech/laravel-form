@props(['media'=>null,'delete'=>false,'icon'=>'upload'])
<x-form::input
    type="file"
    icon="{{ $icon }}"
    {{ $attributes }}
/>

@if($media)
    <x-media::list :media="$media" :delete="$delete"/>
@endif

@include('form::partials.upload-feedback')

