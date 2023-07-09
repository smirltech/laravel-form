@props(['link','size' => 'sm'])
<a href="{{ $link }}" {{ $attributes->merge(['class' => "btn btn-link btn-$size"]) }}>
    {{ $slot }}
</a>
