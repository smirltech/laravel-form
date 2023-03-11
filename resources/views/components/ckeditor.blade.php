@props(['type'=>'classic'])
@php
    $model = $attributes['name'] ?? $attributes->wire('model')->value();
    $id = SmirlTech\LaravelForm\Helpers\Helpers::modelToFucntionName($model);

@endphp
<span wire:ignore>
    <x-form::textarea
        id="{{$id}}"
        label="{{ $label }}"
        {{ $attributes }}
    >
        {{$slot}}
    </x-form::textarea>
</span>
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/{{$type}}/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#{{$id}}'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                language: 'fr',
            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @if($attributes->wire('model')->value())
                    @this.
                    set('{{$model}}', editor.getData());
                    @endif
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endpush



