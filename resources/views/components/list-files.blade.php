@props(['media','delete' => false])
<ol class="list-group mt-3">
    @foreach($media as $m)
        <li class="list-group-item">
            <i class="fa fa-{{$m->icon}}"></i>
            <a class="" title="Voir"
               href="{{route('media.show', $m)}}"
               target="_blank">{{$m->filename}}</a>
            @if($delete)
                |
                <button type="button" class="btn btn-sm btn-outline-danger">
                    <i wire:click="deleteMedia('{{$m->id}}')"
                       class="fa fa-minus"></i>
                </button>
            @endif

        </li>
    @endforeach
</ol>


