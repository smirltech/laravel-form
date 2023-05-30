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
        <button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => "btn btn-{$theme} btn-{$size}"]) !!}>
            @if($icon)
                <i class="fa fa-{{$icon}}"></i>
            @endif
            {{ $label??$slot }}
            @if($target and $attributes['type']=='submit')
                <x-form::loading target="{{$target}}"/>
            @endif
        </button>
    </a>
@endif





