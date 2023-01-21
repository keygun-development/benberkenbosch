<ul {{ $attributes }}>
    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
        {{ __('Home') }}
    </x-nav-link>
    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
        {{ __('Albums') }}
    </x-nav-link>
    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
        {{ __('Music') }}
    </x-nav-link>
    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
        {{ __('About') }}
    </x-nav-link>
    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
        {{ __('Contact') }}
    </x-nav-link>
</ul>
