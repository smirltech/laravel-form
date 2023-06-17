@props([
    'disabled' => false,
    'icon'=>null,
    'label'=>null,
    'target'=>'submit',
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
        <button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => "btn btn-{$theme} btn-{$size}"]) !!}>
            @if($icon)
                <i wire:loading.remove class="fa fa-{{$icon}}"></i>
            @endif
            <span wire:loading.remove>{{ $label??$slot }}</span>
            @if($target)
                <x-form::loading target="{{$target}}"/>
            @endif
        </button>
        @if($link)
    </a>
@endif





