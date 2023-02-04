<template>
    <slot v-if="!videoSrc" name="loader"></slot>
    <div class="w-full flex justify-center flex-col items-center" v-else>
        <div class="c-youtube md:w-6/12 w-full" v-html="videoSrc"></div>
        <p class="text-center mt-2">
            {{ title }}
        </p>
    </div>
</template>

<script>

export default {
    props: {
        title: String
    },

    data() {
        return {
            videoSrc: ''
        }
    },

    methods: {
        loadIframe(src) {
            this.videoSrc = src
        }
    }
}
</script>
