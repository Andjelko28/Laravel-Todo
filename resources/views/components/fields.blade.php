@props(['label','name'])

<div class="w-50">
    @if($label)
    <x-label :$name :$label/>
    @endif
    <div class="mb-2">
        {{$slot}}
    </div>
</div>
