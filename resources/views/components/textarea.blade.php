@props(['label'])
@php
    $model = $attributes->wire('model')->value();
    if ($errors->has($model)) {
        $error = $errors->first($model);
        $error_class = 'is-invalid';
    } else {
        $error = '';
        $error_class = '';
    }
@endphp
@include('form::components.label')
<textarea  {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
{{$slot}}
</textarea>
@include('form::components.footer')



