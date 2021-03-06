@props([
    'width' => 'max-w-md',
    'margin' => 'mx-auto my-6',
    'padding' => 'p-6',
    'background' => 'bg-white',
    'border' => 'border',
])
@php
    $box_class = 'rounded-lg shadow-lg w-full '.$width
        .' '.$margin
        .' '.$padding
        .' '.$border
        .' '.$background;
@endphp
<div {{ $attributes->merge(['class' => $box_class]) }} >
    {{ $slot }}
</div>