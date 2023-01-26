<template>
    <slot name="dropdown"></slot>
</template>

<script>

export default {

    methods: {
        clicked: function () {
            const menu = document.getElementById('menu-dropdown')
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden')
            } else {
                menu.classList.add('hidden')
            }
        }
    }
}
</script>
