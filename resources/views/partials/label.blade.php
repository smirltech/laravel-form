@if(!empty($label))
    <label class="form-label">{{$label}}
        @if($attributes->has('required'))
            <span title="Ce champ est obligatoire" class="text-danger">*</span>
        @endif
    </label>
@endif

