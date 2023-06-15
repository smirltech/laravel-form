@props(['height' => 200, 'value' => null])
@php
    $model = $attributes['name'] ?? $attributes->wire('model')->value();
    $id = SmirlTech\LaravelForm\Helpers\Helpers::modelToFucntionName($model);
@endphp
<span wire:ignore>
    <x-form::textarea id="{{ $id }}" {{ $attributes }}>
        @if ($value)
            {{ $value }}
        @endif
        {{ $slot }}
    </x-form::textarea>
</span>
<script>
    ClassicEditor
        .create(document.querySelector('#{{ $id }}'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
            language: 'fr',
        })
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @if ($attributes->wire('model')->value())
                    @this.
                    set('{{ $model }}', editor.getData());
                @endif
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
<style>
    .ck-editor__editable_inline {
        height: {{ $height }}px;
    }
</style>
