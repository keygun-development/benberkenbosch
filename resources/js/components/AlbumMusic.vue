<template>
    <div v-for="index in repeat">
        <div>
            <p class="text-lg font-bold">
                Album:
            </p>
            <select>
                <option v-for="album in parsedAlbums" :value="album.id" :selected="data[index-1] ? data[index-1].album_id === album.id : ''">
                    {{ album.name }}
                </option>
            </select>
        </div>
    </div>
    <slot :repeats="repeat" name="add"></slot>
</template>

<script>

export default {
    props: {
        repeats: Array,
        albums: String
    },

    data() {
        return {
            repeat: this.repeats ? this.repeats.length : 1,
            data: this.repeats ?? [],
            parsedAlbums: JSON.parse(this.albums)
        }
    }
}
</script>
