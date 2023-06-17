@php $id = \Illuminate\Support\Str::random(10); @endphp
@props(['label' => null, 'id' => $id])
<div class="form-check">
    <input type="checkbox" id="{{ $id }}" {{ $attributes->merge(['class' => 'form-check-input']) }}>
    <label {!! $attributes->merge(['class' => 'form-check-label']) !!} for="{{ $id }}">{{ $label }}
    </label>
</div>
