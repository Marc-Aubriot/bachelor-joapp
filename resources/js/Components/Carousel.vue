<script>
export default {
    name: 'Carousel',

    props: {
        imgNameList: {
            type: Array,
            default: null,
        },
        assetsURL: {
            type: String,
            default: null
        },
    },

    data() {
        return {
            currentIndex: 0,
        }
    },

    methods: {
        getImgPath(img) {
            if (this.assetsURL) return `${this.assetsURL}/${img}.jpg`;
            else return `http://[::1]:5173/public/assets/${img}.jpg`;
        }
    }
}
</script>

<template>

    <div v-if="imgNameList" class="h-full">
        <img :src="getImgPath(imgNameList[currentIndex])" alt="photo de Bercy" class="object-cover h-full">
    </div>

    <div v-else class="h-full">
        <p>Nothing to show yet</p>
    </div>

</template>
