@php
    $model = $attributes->wire('model')->value();
@endphp
@props(['label',$model])

<x-form::input-file
    label="{{ $label }}"
    accept="image/*"
    {{ $attributes }}
/>

@if($$model)
    <div class="mt-3">
        @if(is_array($$model))
            <div class="row">
                @foreach($$model as $m)
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="#">
                                <img class="img-thumbnail" src="{{ $m?->temporaryUrl() }}"
                                     alt="Image 1">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <img class="img-thumbnail" src="{{ $$model?->temporaryUrl() }}"
                 alt="Image 1">
        @endif
    </div>
@endif






