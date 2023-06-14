@props(['label'=>null,'prepend'=>null,'icon'=>null])
@php
    $model = $attributes['name'] ?? $attributes->wire('model')->value();
    if ($errors->has($model)) {
    $error = $errors->first($model);
    $error_class = 'is-invalid';
    } else {
    $error = '';
    $error_class = '';
    }

@endphp
<div class="form-group">
    @include('form::partials.label')
    @if($prepend or $icon)
        <div class="input-group mb-3">
            <div class="input-group-prepend">
        <span class="input-group-text">
          @if($icon)
                <i class="fas fa-{{$icon}}"></i>
            @endif{{$prepend}}
        </span>
            </div>

            @endif
            <input {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
            @if($prepend or $icon)
        </div>
    @endif
</div>
@include('form::partials.footer')
