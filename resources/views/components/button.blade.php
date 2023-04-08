@props(['disabled' => false,'icon'=>null,'label'=>null,'target'=>null])

<button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'btn']) !!}>
    @if($icon)
        <i class="fa fa-{{$icon}}"></i>
    @endif
    {{ $label??$slot }}
    @if($target)
        <x-form::loading target="{{$target}}"/>
    @endif
</button>




