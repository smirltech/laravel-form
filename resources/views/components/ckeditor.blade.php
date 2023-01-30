@props(['label','type'=>'basic'])
<x-form::textarea
    id="ckeditor"
    label="{{ $label }}"
    {{ $attributes }}
>
    {{$slot}}
</x-form::textarea>
@push('js')
    <script src="//cdn.ckeditor.com/4.14.1/{{$type}}/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('ckeditor');
        });
    </script>
@endpush



