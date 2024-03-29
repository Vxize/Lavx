@props([
    'route' => '',
    'showError' => false,
])
@php
    $query = request()->query();
    $search = empty($query['search']) ? null : ['search' => $query['search']];
    $paginate = empty($query['paginate']) ? null : ['paginate' => $query['paginate']];
@endphp
<x-lavx::form
    action="{{ route($route, request()->query()) }}"
    showError="{{ $showError }}"
    type="get"
>
@if (! empty($query['search']))
    <input type="hidden" name="search" value="{{ $query['search'] }}" >
@endif
@if (! empty($query['paginate']))
    <input type="hidden" name="paginate" value="{{ $query['paginate'] }}" >
@endif
    {{ $slot }}
    <x-slot:submit>
        <x-lavx::form.submit
            display="inline-block"
            icon="fa6-solid:filter"
            text="{{ __('lavx::sys.filter') }}"
            textSize="lg:text-lg md:text-md text-base"
            padding="p-2"
            width="w-28"
            margin="mx-auto"
        />
    </x-slot>
    <x-slot:after_submit>
        <x-lavx::button
            display="inline-block"
            color="red"
            link="{{ route($route, $search) }}"
            icon="fa6-solid:filter-circle-xmark"
            text="{{ __('lavx::sys.reset') }}"
            textSize="lg:text-lg md:text-md text-base"
            padding="p-2"
            width="w-28"
            margin="mx-auto"
        />
    </x-slot>
</x-lavx::form>