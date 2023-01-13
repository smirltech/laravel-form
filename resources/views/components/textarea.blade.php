@props(['disabled' => false,'isValid','label','error','ckeditor'=>false])
@php
    if (isset($isValid )) {
        $classes = ($isValid ===true)
                    ? ' is-valid'
                    : ' is-invalid';
    } else {
        $classes = '';
    }
@endphp
@include('form::components.label')
<textarea
    @if($ckeditor) id="ckeditor" @endif {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control'.$classes]) !!}>
{{$slot}}
</textarea>
@if(isset($error))
    <x-form::invalid-feedback>
        {{$error}}
    </x-form::invalid-feedback>
@endif
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



