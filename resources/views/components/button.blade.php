@props([
    'disabled' => false,
    'icon'=>null,
    'label'=>null,
    'type'=>'button',
    'target'=>null,
    'theme'=>'primary',
    'link'=>null,
    'size'=>'md',
    'sm'=>false,
    ])

@if($sm)
    @php($size='sm')
@endif


@if($link)
    <a href="{{$link}}">
        @endif
        <button
            type="{{$type}}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => "btn btn-{$theme} btn-{$size}"]) !!}>
            @if($icon)
                <i wire:loading.remove wire:target="{{$target}}" class="fa fa-{{$icon}}"></i>
            @endif
            <span wire:loading.remove wire:target="{{$target}}">{{ $label??$slot }}</span>
            <x-form::loading target="{{$target}}"/>
        </button>
        @if($link)
    </a>
@endif





