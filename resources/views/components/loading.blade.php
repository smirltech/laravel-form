@props(['target'])
<span wire:loading wire:target="{{ $target ?? '' }}" class="ml-2">
    <i class="spinner-border spinner-border-sm"></i>
</span>
