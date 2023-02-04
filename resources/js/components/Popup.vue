<template>
    <slot name="openpopup"></slot>
    <div class="c-popup" v-if="open">
        <div class="c-popup__container">
            <div class="flex items-center justify-center h-full overflow-y-auto">
                <div class="c-popup__card" :class="width">
                    <div class="flex justify-end">
                        <div @click="close()">
                            <i class="fa-solid fa-xmark text-red-500 font-bold text-3xl cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="scrollbar">
                        <slot :id="id" name="popup"></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        width: String
    },

    data() {
        return {
            open: false,
            id: 0,
        }
    },

    methods: {
        openPopup: function (id) {
            this.open = true
            this.id = id
        },

        close: function () {
            this.open = false
        }
    }
}
</script>
