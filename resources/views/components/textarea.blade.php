@props(['disabled' => false,'isValid'=>null,'label','error','errors'=>null,'ckeditor'=>null])
@php
    if (isset($isValid) or $errors->has($attributes->wire('model')->value())) {
       $classes = (($isValid ===false) or $errors->has($attributes->wire('model')->value()))
                    ? ' is-invalid'
                    : ' is-valid';
    } else {
        $classes = '';
    }
@endphp
@include('form::components.label')

<textarea
    @if($ckeditor) id="ckeditor" @endif {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control'.$classes]) !!}>
{{$slot}}
</textarea>
@include('form::components.footer')
@if($ckeditor)
    @push('js')
        <script src="//cdn.ckeditor.com/4.14.1/{{$ckeditor}}/ckeditor.js"></script>
        <script>
            $(document).ready(function () {
                CKEDITOR.replace('ckeditor');
            });
        </script>
    @endpush
@endif



