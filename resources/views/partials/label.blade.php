@if(!empty($label))
    <label class="form-label">{{$label}}
        @if($attributes->has('required'))
            <span title="{{ __('laravel-form.field.required') }}" class="text-danger">*</span>
        @endif
    </label>
@endif

