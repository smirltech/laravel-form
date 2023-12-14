@props(['label'=>null,'prepend'=>null,'icon'=>null,'datalist'=>null])
@php
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
<div class="form-group mb-3">
    @include('form::partials.label')
    @if($prepend or $icon)
        <div class="input-group mb-3">
            <div class="input-group-prepend">
        <span class="input-group-text">
          @if($icon)
                <i class="fas fa-{{$icon}}"></i>
            @endif{{$prepend}}
        </span>
            </div>
        </div>
    @endif
    <input list="{{$id}}-list" {!! $attributes->merge(['class' => 'form-control '.$error_class]) !!}>
    @include('form::partials.footer')

    @if($datalist)
        <datalist id="{{$id}}-list">
            @include('form::partials.datalist')
        </datalist>
    @endif
    @if($prepend or $icon)
    </div>
    @endif
</div>
