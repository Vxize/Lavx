@props([
    'disabled' => false,
    'checked' => false,
    'id',
    'name',
    'label',
])

<x-lavx::form.label for="{{ $id ?? $name }}" class="inline-flex items-center ml-2">
    <x-lavx::form.input
        id="{{ $id ?? $name }}"
        type="checkbox"
        class="lg:w-8 md:w-6 sm:w-5 lg:h-8 md:h-6 sm:h-5 text-indigo-600"
        name="{{ $name }}"
        disabled="{{ $disabled }}"
        checked="{{ $checked }}"
        {{ $attributes }}
    />
    <span class="ml-2">{{ $label }}</span>
</x-lavx::form.label>