<template>
    <slot name="disclosure" :openAlbums="openAlbums"></slot>
</template>

<script>
export default {
    data() {
        return {
            openAlbums: false
        }
    },

    methods: {
        openUpProfile: function() {
            this.openAlbums = !this.openAlbums
        },
    }
}
</script>
