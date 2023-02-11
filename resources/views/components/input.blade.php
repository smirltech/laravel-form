@props(['label'=>null,'prepend'=>null])
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
@include('form::components.label')
@if($prepend != null)
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">{{$prepend}}</span>
    </div>

    @endif
    <input {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
    @if($prepend != null)
</div>
@endif
@include('form::components.footer')
