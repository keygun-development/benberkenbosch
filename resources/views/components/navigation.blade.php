<ul id="navigation" {{ $attributes }}>
    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
        {{ __('Home') }}
    </x-nav-link>
    <dropdown
        ref="dropdown"
    >
        <template #dropdown>
            <li @click="this.$refs['dropdown'].clicked()" class="cursor-pointer relative">
                {{ __('Albums') }}
                <ul id="menu-dropdown" class="c-header__dropdown hidden">
                    @foreach(\App\Models\Album::all() as $album)
                        <x-nav-link class="w-full" :href="'/albums/'.$album->id"
                                    :active="$album->id == request()->route()->parameter('id')">
                            {{ __($album->name) }}
                        </x-nav-link>
                    @endforeach
                </ul>
            </li>
        </template>
    </dropdown>
    <x-nav-link :href="route('music')" :active="request()->routeIs('music')">
        {{ __('Music') }}
    </x-nav-link>
    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
        {{ __('About') }}
    </x-nav-link>
    <a href="mailto:info.benberkenbosch@gmail.com">
        {{ __('Contact') }}
    </a>
</ul>
