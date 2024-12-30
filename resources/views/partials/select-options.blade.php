@if($options)
    @foreach($options as $option)
        <option value="{{($value?$option->$value:null)??$option->value ?? $option->id ?? $option->name?? $option }}">
            {{ $option->label ?? (method_exists($option, 'label') ? $option->label() : null) ?? $option->name ?? $option->nom ?? $option->id ?? $option }}
        </option>
    @endforeach
@endif
{{$slot}}
