<x-lavx::layout.page margin="mx-auto mt-6" :width="$width ?? 'max-w-lg' ">
    @if (isset($title) && $title)
        <x-lavx::h1
            :color="$title_color ?? 'text-blue-800' "
            :text="$title" 
        />
    @endif
    @if (isset($subtitle) && $subtitle)
        <x-lavx::h2
            :color="$subtitle_color ?? 'text-green-800' "
            :text="$subtitle"
        />
    @endif
    @if (isset($return_link) && $return_link)
        <x-lavx::button
            :link="$return_link"
            :color="$return_color ?? 'green' "
            :text="$return_text ?? __('lavx::sys.back') "
            :external="$return_external ?? false"
        />
    @endif
    @if (isset($alert) && $alert)
        <x-lavx::alert
            :color="$alert_color ?? '' "
            :text="$alert"
            :escaped="$alert_escaped ?? false"
        />
    @endif
    @if (isset($button_link) && $button_link)
        <x-lavx::button
            :link="$button_link"
            :color="$button_color ?? '' "
            :text="$button_text ?? __('lavx::sys.back') "
            :external="$button_external ?? false"
        />
    @endif
</x-lavx::layout.page>