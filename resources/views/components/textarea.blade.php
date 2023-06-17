@props(['label' => null])
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
@include('form::partials.label')
<textarea {!! $attributes->merge(['class' => 'form-control ' . $error_class]) !!}>
{{ $slot }}
</textarea>
@include('form::partials.footer')
