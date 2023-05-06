@props(['disabled' => false,'icon'=>null,'label'=>null,'target'=>null,'theme'=>'primary'])

<button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'btn btn-'.$theme]) !!}>
    @if($icon)
        <i class="fa fa-{{$icon}}"></i>
    @endif
    {{ $label??$slot }}
    @if($target)
        <x-form::loading target="{{$target}}"/>
    @endif
</button>




