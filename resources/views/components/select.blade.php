@props([
    'label'=>null,
    'placeholder' => null,
    'multiple'=>false,
    'allowClear'=>false,
    'prepend'=>null,
    'refresh'=>false,
    'change'=>false,
    'options'=>null,
    ])
@php
    if ($multiple) {
      $attributes =  $attributes->merge(['multiple' => 'multiple']);
    }
         $model = $attributes['name'] ?? $attributes->wire('model')->value();
         $id = SmirlTech\LaravelForm\Helpers\Helpers::modelToFucntionName($model).'-'.rand(1000,9999);
        if ($errors->has($model)) {
            $error = $errors->first($model);
            $error_class = 'is-invalid';
        } else {
            $error = '';
            $error_class = '';
        }
@endphp
<div class="form-group mb-3">
    @include('form::partials.label')
    @if($refresh or $change)
        <select {!! $attributes->merge(['class' => 'form-control form-select '.$error_class]) !!}>
            <option disabled value=null>{{$placeholder ?? 'Choisir '.$label ?? ''}}</option>
            @include('form::partials.select-options')
        </select>
        @include('form::partials.footer')
    @else
        <span wire:ignore>
<select id="{{$id}}" {!! $attributes->merge(['class' => 'form-control form-select '.$error_class]) !!}>
  <option value=""></option>
    @include('form::partials.select-options')
</select>
</span>
        @include('form::partials.footer')
</div>

<!-- Start Selectize  #{{$id}} -->
<script>
    $(function () {
        $("#{{$id}}").selectize({
            plugins: ["restore_on_backspace", "clear_button"],
            delimiter: " - ",
            persist: false,
            hideSelected: true,
            closeAfterSelect: true,
            selectOnTab: true,
            setFirstOptionActive: true,
            placeholder: '{{$placeholder ?? 'Choisir '.$label ?? ''}}',
            onChange: function (value) {
            @if($attributes->wire('model')->value())
                @this.
            set('{{$model}}', value);
                @endif
            },
        });
    });
</script>
<!-- End Selectize  #{{$id}} -->
@endif
