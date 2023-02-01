@props(['label'=>null,'placeholder' => null,'multiple'=>false])
@php

    if ($multiple) {
      $attributes =  $attributes->merge(['multiple' => 'multiple']);
    }
         $model = $attributes['name'] ?? $attributes->wire('model')->value();
        if ($errors->has($model)) {
            $error = $errors->first($model);
            $error_class = 'is-invalid';
        } else {
            $error = '';
            $error_class = '';
        }
@endphp
@include('form::components.label')
<select {!! $attributes->merge(['class' => 'select2 form-control form-select '.$error_class]) !!}>
    {{$slot}}
</select>
@include('form::components.footer')
@push('js')
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2(
                {
                    theme: 'bootstrap4',
                    placeholder: '{{$placeholder}}',
                    allowClear: true
                }
            );
        });
    </script>
@endpush



