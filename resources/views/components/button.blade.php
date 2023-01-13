<button {!! $attributes->merge(['class' => 'btn']) !!}>
    {{$slot}}
    <x-loading target="submit"/>
</button>




