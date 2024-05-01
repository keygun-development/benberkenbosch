<template>
    <template v-if="analyticCookies">
        <slot v-if="!videoSrc" name="loader"></slot>
        <div class="w-full flex justify-center flex-col items-center" v-else>
            <div class="c-youtube md:w-6/12 w-full" v-html="videoSrc"></div>
            <p class="text-center mt-2">
                {{ title }}
            </p>
        </div>
    </template>
    <template v-else>
        <p class="flex mb-2">
            Sorry, you need to accept the <a
            class="openPreferences mx-1 hover:underline text-gray-400 hover:cursor-pointer">analytics</a> cookies to
            view this content.
        </p>
    </template>
</template>

<script>

export default {
    props: {
        title: String,
    },

    data() {
        return {
            videoSrc: '',
            analyticCookies: false
        }
    },

    methods: {
        loadIframe(src) {
            this.videoSrc = src
        }
    },

    mounted() {
        window.addEventListener('analyticsCookiesLoaded', () => {
            this.analyticCookies = window.analyticCookies;
        });
    }
}
</script>
