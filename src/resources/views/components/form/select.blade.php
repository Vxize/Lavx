@props([
    'disabled' => false,
    'readonly' => false,
    'name' => '',
    'label' => '',
    'id' => null,
    'option' => [],
    'selected' => '',
    'hideOnOneOption' => true,
])
@php
    $count = is_array($option) ? count($option) : $option->count();
    $hidden = $count === 1 && $hideOnOneOption ? 'hidden' : '';
@endphp
@if ($label && !$hidden)
    <x-lavx::form.label for="{{ $name }}" value="{{ $label }}" />
@endif
<select
    @disabled($disabled)
    @readonly($readonly)
    id="{{ $id ?? $name }}"
    name="{{ $name }}"
    {{ $attributes->merge(['class' => 'appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight disabled:cursor-not-allowed focus:outline-none focus:shadow-outline '.$hidden])}}
>
    @if ($count === 1)
        @foreach ($option as $val => $text)
            <option disabled selected value="{{ $val }}">{{ $text }}</option>
        @endforeach
    @else
        @if (!$selected)
            <option disabled selected value="">{{ __('lavx::sys.please').__('lavx::sys.select') }}</option>
        @endif
        @foreach ($option as $val => $text)
            <option
                value="{{ $val }}"
                @selected($selected && $selected == $val)
            >{{ $text }}</option>
        @endforeach
    @endif
</select>