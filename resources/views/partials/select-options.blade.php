<option value=""></option>
@foreach($options as $option)
    <option
        value="{{$option->value??$option->id??'option'.$loop->iteration}}">{{$option->label??$option->label()??$option->name??$option->nom??$option->id??'Option '.$loop->iteration}}</option>
@endforeach
{{$slot}}
