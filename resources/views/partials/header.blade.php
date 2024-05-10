<div class="sticky top-0 z-10">
    <div class="c-header">
        <div class="w-full flex justify-between">
            <div class="md:w-6/12 w-10/12">
                <a class="inline-block" href="{{ route('welcome') }}">
                    <div class="flex items-center">
                        <img class="h-[80px] md:p-4 p-2" src="{{ asset('images/logo.png') }}"/>
                        <h2 class="font-asap md:text-2xl text-lg">
                            Ben Berkenbosch
                        </h2>
                    </div>
                </a>
            </div>
            <div class="w-6/12 md:flex hidden items-center justify-end uppercase">
                <x-navigation :class="'flex'"></x-navigation>
            </div>
            <div class="flex items-center md:hidden w-2/12">
                <mobile-menu
                    ref="mobileMenuRef"
                >
                    <template v-slot:disclosure="slotProps">
                        <div @click="this.$refs.mobileMenuRef.disclose()"
                             class="c-header__bars"
                             :class="slotProps.active ? 'menu-open' : ''">
                            <div class="one"></div>
                            <div class="two my-1"></div>
                            <div class="three"></div>
                        </div>
                    </template>
                </mobile-menu>
            </div>
        </div>
    </div>
    <menu-disclosure
        ref="menuDisclosureRef"
    >
        <template v-slot:disclosure="slotProps">
            <div id="mobile-menu" class="c-mobile__menu">
                <ul id="navigation" {{ $attributes }}>
                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <div class="hidden md:block">
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
                    </div>
                    <div class="block md:hidden">
                        <li @click="this.$refs.menuDisclosureRef.openUpProfile()" class="cursor-pointer relative p-4">
                            {{ __('Albums') }}
                        </li>
                        <ul class="c-mobile__dropdown" v-if="slotProps.openAlbums">
                            @foreach(\App\Models\Album::all() as $album)
                                <x-nav-link class="w-full" :href="'/albums/'.$album->id"
                                            :classes="'p-0'"
                                            :active="$album->id == request()->route()->parameter('id')">
                                    {{ __($album->name) }}
                                </x-nav-link>
                            @endforeach
                        </ul>
                    </div>
                    <x-nav-link :href="route('music')" :active="request()->routeIs('music')">
                        {{ __('Music') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                    <li>
                        <a href="mailto:info.benberkenbosch@gmail.com">
                            {{ __('Contact') }}
                        </a>
                    </li>
                </ul>
            </div>
        </template>
    </menu-disclosure>
</div>
