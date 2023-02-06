<template>
    <div v-for="index in repeat">
        <div>
            <p class="text-lg font-bold">
                SVG icon <a href="https://fontawesome.com/icons/" class="underline">(fontawesome)</a>:
            </p>
            <input placeholder="Voorbeeld: youtube" class="mt-4 c-form__input" type="text" :name="'svg'+index" :value="data[index-1] ? data[index-1].icon : ''" />
        </div>
        <div class="mt-4">
            <p class="text-lg font-bold">
                Full Url:
            </p>
            <input placeholder="https://www.youtube.com/@BenBerkenboschMusic" class="mt-4 c-form__input" type="text" :name="'url'+index" :value="data[index-1] ? data[index-1].link : ''" />
        </div>
    </div>
    <slot :repeats="repeat" name="add"></slot>
</template>

<script>

export default {
    props: {
        repeats: Array,
    },

    data() {
        return {
            repeat: this.repeats ? this.repeats.length : 1,
            data: this.repeats ?? []
        }
    }
}
</script>
