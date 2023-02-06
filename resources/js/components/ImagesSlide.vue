<template>
    <draggable class="dragArea list-group w-full" :list="items" @change="setPositions()">
        <div
            class="list-group-item bg-gray-300 m-1 p-3 rounded-md text-center"
            v-for="element in items"
            :key="element.name"
        >
            <slot name="image" :url="url" :image="element" ></slot>
        </div>
    </draggable>
</template>

<script>
import {defineComponent, reactive} from 'vue';
import {VueDraggableNext} from 'vue-draggable-next'

export default defineComponent({
    components: {
        draggable: VueDraggableNext
    },
    props: {
        images: Array
    },
    setup(props) {
        const items = reactive(props.images);
        const url = window.location.origin;
        return {
            items,
            url
        };
    },

    methods: {
        setPositions: function () {
            axios.post('/api/floatingimages/position', this.items)
        }
    }
});
</script>
