@if($datalist)
    @foreach($datalist as $option)
        <option
            value="{{$option->label??(method_exists($option,'label')?$option->label():null)??$option->name??$option->nom??$option->id??'Option '.$loop->iteration}}"></option>
    @endforeach
@endif
