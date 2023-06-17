@props([
    'label' => null,
    'placeholder' => null,
    'multiple' => false,
    'allowClear' => false,
    'prepend' => null,
    'refresh' => false,
    'change' => false,
    'options' => null,
])
@php
    if ($multiple) {
        $attributes = $attributes->merge(['multiple' => 'multiple']);
    }
    $model = $attributes['name'] ?? $attributes->wire('model')->value();
    $id = SmirlTech\LaravelForm\Helpers\Helpers::modelToFucntionName($model);
    if ($errors->has($model)) {
        $error = $errors->first($model);
        $error_class = 'is-invalid';
    } else {
        $error = '';
        $error_class = '';
    }
@endphp
<div class="form-group">
    @include('form::partials.label')
    @if ($refresh or $change)
        <select {!! $attributes->merge(['class' => 'form-control form-select ' . $error_class]) !!}>
            <option disabled value=null>{{ $placeholder ?? (__('Choisir ') . $label ?? '') }}</option>
            @include('form::partials.select-options')
        </select>
    @else
        <span wire:ignore>
            <select id="{{ $id }}" {!! $attributes->merge(['class' => 'form-control form-select ' . $error_class]) !!}>
                <option value=""></option>
                @include('form::partials.select-options')
            </select>
        </span>
</div>

<!-- Start Selectize  #{{ $id }} -->
<script>
    $(function() {
        $("#{{ $id }}").selectize({
            plugins: ["restore_on_backspace", "clear_button"],
            delimiter: " - ",
            persist: false,
            hideSelected: true,
            closeAfterSelect: true,
            selectOnTab: true,
            setFirstOptionActive: true,
            placeholder: '{{ $placeholder ?? (__('laravel-form.field.choice') . $label ?? '') }}',
            onChange: function(value) {
                @if ($attributes->wire('model')->value())
                    @this.
                    set('{{ $model }}', value);
                @endif
            },
        });
    });
</script>
<!-- End Selectize  #{{ $id }} -->
@endif
@include('form::partials.footer')
