@props(['disabled' => false,'icon'=>null,'label'=>null,'target'=>'submit','theme'=>'primary'])

<button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'btn btn-'.$theme]) !!}>
    @if($icon)
        <i class="fa fa-{{$icon}}"></i>
    @endif
    {{ $label??$slot }}
    @if($target and $attributes['type']=='submit')
        <x-form::loading target="{{$target}}"/>
    @endif
</button>




