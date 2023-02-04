@props(['label'=>null,'placeholder' => null,'multiple'=>false,'allowClear'=>false])
@php

    if ($multiple) {
      $attributes =  $attributes->merge(['multiple' => 'multiple']);
    }
         $model = $attributes['name'] ?? $attributes->wire('model')->value();
         $select_id = SmirlTech\LaravelForm\Helpers\Helpers::modelToFucntionName($model);
        if ($errors->has($model)) {
            $error = $errors->first($model);
            $error_class = 'is-invalid';
        } else {
            $error = '';
            $error_class = '';
        }
@endphp
@include('form::components.label')
<span wire:ignore>
<select wire id="{{$select_id}}" {!! $attributes->merge(['class' => 'form-control form-select '.$error_class]) !!}>
    {{$slot}}
</select>
</span>
@include('form::components.footer')
@push('js')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.css"
          integrity="sha512-pZE3NzBgokXUM9YLBGQIw99omcxiRdkMhZkz0o7g0VjC0tCFlBUqbcLKUuX8+jfsZgiZNIWFiLuZpLxXoxi53w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <script>
        $(function () {

            $("#{{$select_id}}").selectize({
                plugins: ["restore_on_backspace", "clear_button"],
                delimiter: " - ",
                persist: false,
                onChange: function (value) {
                    @if($attributes->wire('model')->value())
                    @this.
                    set('{{$model}}', value);
                    @endif
                },
            });

        });
    </script>
@endpush



