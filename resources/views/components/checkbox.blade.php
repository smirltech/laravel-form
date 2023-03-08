@php
    use Illuminate\Support\Str;
    $id = Str::random(10);
@endphp
@props(['label'=>null,'id'=>$id])
<div class="form-check">
    <input type="checkbox" id="{{$id}}"
           class="form-check-input"
        {{ $attributes }}>
    <label class="form-check-label"
           for="{{$id}}">{{$label}}
    </label>
</div>



