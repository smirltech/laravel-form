@props(['target'])
<span wire:loading wire:target="{{$target??''}}" class="ml-2">
    <i class="fa fa-spinner"></i>
</span>
