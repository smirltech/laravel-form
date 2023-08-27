@if($options)
    @foreach($options as $option)
        <option value="{{ $option->value ?? $option->id ?? $option->name?? 'option'. $loop->iteration }}">
            {{ $option->label ?? (method_exists($option, 'label') ? $option->label() : null) ?? $option->name ?? $option->nom ?? $option->id ?? 'Option '. $loop->iteration }}
        </option>
    @endforeach
@endif
{{$slot}}
