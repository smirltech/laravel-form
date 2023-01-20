@props(['label'])
@php
    $error = $errors->has($attributes->wire('model')->value());
    if ($error) {
        $error_class = 'is-invalid';
    } else {
        $error_class = '';
    }
@endphp
@include('form::components.label')
<textarea  {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
{{$slot}}
</textarea>
@include('form::components.footer')



