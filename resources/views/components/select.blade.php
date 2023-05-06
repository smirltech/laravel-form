@props([
    'label'=>null,
    'placeholder' => null,
    'multiple'=>false,
    'allowClear'=>false,
    'prepend'=>null,
    'refresh'=>false,
    'options'=>null,
    ])
@php
    if ($multiple) {
      $attributes =  $attributes->merge(['multiple' => 'multiple']);
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
@include('form::components.label')
@if($refresh)
    <select {!! $attributes->merge(['class' => 'form-control form-select '.$error_class]) !!}>
        @if($options)
            @foreach($options as $option)
                <option
                    value="{{$option->value??$option->id??'option'.$loop->iteration}}">{{$option->label??$option->name??$option->nom??$option->id??'Option '.$loop->iteration}}</option>
            @endforeach
        @else
            {{$slot}}
        @endif
    </select>
@else
    <span wire:ignore>
<select id="{{$id}}" {!! $attributes->merge(['class' => 'form-control form-select '.$error_class]) !!}>
        <option value=""></option>
   @if($options)
        @foreach($options as $option)
            <option
                value="{{$option->value??$option->id??'option'.$loop->iteration}}">{{$option->label??$option->name??$option->nom??$option->id??'Option '.$loop->iteration}}</option>
        @endforeach
    @else
        {{$slot}}
    @endif
</select>
</span>
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
@include('form::components.footer')


