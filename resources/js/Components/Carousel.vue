<script>
import { getImgPath } from '@/utilities';

export default {
    name: 'Carousel',

    props: {
        //  list of image name
        imgNameList: {
            type: Array,
            default: null,
        },

        //  base url for assets
        assetsURL: {
            type: String,
            default: null
        },
    },

    data() {
        return {
            currentIndex: 2,    //  index of current image
        }
    },

    methods: {
        getImgPath,

        //  load previous image index
        previousImg() {
            if (this.currentIndex > 0) this.currentIndex--;
        },

        //  load next image index
        nextImg() {
            if(this.currentIndex < this.imgNameList.length-1) this.currentIndex++;
        },

        //  load image index
        loadImgByIndex(index) {
            this.currentIndex = index;
        },
    }
}
</script>

<template>

    <div v-if="imgNameList" class="relative h-full w-full overflow-hidden">

        <!-- carousel imgs -->
        <img 
            v-for="(img, index) in imgNameList"
            :src="getImgPath(img.name)" alt="photo de Bercy" 
            :class="currentIndex == index ?
                'absolute top-0 object-cover h-full w-full duration-700 ease-in-out'
                : currentIndex < index ? 
                    'absolute top-0 object-cover h-full w-full  duration-700 ease-in-out translate-x-full'
                    :'absolute top-0 object-cover h-full w-full  duration-700 ease-in-out -translate-x-full'"
        >

        <!-- left btn -->
        <div>
            <img 
                v-if="currentIndex > 0"
                src="../../../public/assets/arrow-left-2.svg" alt="flèche gauche" 
                class="absolute top-1/2 left-10 hover:-translate-y-1 hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer" 
                @click="previousImg"
            >
        </div>

        <!-- right btn -->
        <div>
            <img 
                v-if="currentIndex < 4"
                src="../../../public/assets/arrow-right-2.svg" alt="flèche droite" 
                class="absolute top-1/2 right-10 hover:-translate-y-1 hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer" 
                @click="nextImg"
            >
        </div>

        <!-- dot line -->
        <div class="absolute bottom-14   left-1/3 flex gap-5 w-1/3 justify-center">

            <img 
                v-for="(dot, index) in imgNameList"
                src="../../../public/assets/circle.svg" 
                alt="icône de page ronde" 
                :class="currentIndex == index ? 
                    'cursor-pointer scale-150' 
                    : 'hover:scale-150 duration-50 transition ease-in-out delay-50 cursor-pointer'" 
                @click="loadImgByIndex(index)"
            >

        </div>

    </div>

    <div v-else class="h-full">
        <p>Nothing to show yet</p>
    </div>

</template>
