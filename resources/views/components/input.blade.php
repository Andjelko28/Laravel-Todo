@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'name' => $name,
        'class' => 'form-control',
        'value' => old($name),
    ];
@endphp

<x-fields :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-fields>
