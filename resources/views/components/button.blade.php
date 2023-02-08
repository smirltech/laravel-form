@props(['disabled' => false,'icon'=>null])

<button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'btn']) !!}>
    @if($icon)
        <i class="{{$icon}}"></i>
    @endif
    {{ $slot }}
    <x-form::loading target="submit"/>
</button>




