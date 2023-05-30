@foreach($options as $option)
    <option
        value="{{$option->value??$option->id??'option'.$loop->iteration}}">{{$option->label??(method_exists($option,'label')?$option->label():null)??$option->name??$option->nom??$option->id??'Option '.$loop->iteration}}</option>
@endforeach
{{$slot}}
