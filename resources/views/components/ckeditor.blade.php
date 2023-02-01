@props(['label'=>null,'type'=>'basic'])
<span wire:ignore>
    <x-form::textarea
        id="ckeditor"
        label="{{ $label }}"
        {{ $attributes }}
    >
        {{$slot}}
    </x-form::textarea>
</span>
@push('js')
    <script src="http://cdn.ckeditor.com/4.14.1/{{$type}}/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('ckeditor');
        });
    </script>
@endpush



