<template>
    <slot name="disclosure" :active="active"></slot>
</template>

<script>

export default {
    data() {
        return {
            active: false
        }
    },

    methods: {
        disclose: function() {
            const mobileMenu = document.getElementById('mobile-menu')

            this.active = !this.active

            if (mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active')
                mobileMenu.style.height = '0px'
            } else {
                mobileMenu.classList.add('active')
                mobileMenu.style.height = mobileMenu.scrollHeight+'px';
            }
        }
    }
}
</script>
