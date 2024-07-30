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
            currentIndex: 2,
        }
    },

    methods: {
        getImgPath(img) {
            if (this.assetsURL) return `${this.assetsURL}/${img}.jpg`;
            else return `http://[::1]:5173/public/assets/${img}.jpg`;
        },

        previousImg() {
            if (this.currentIndex > 0) this.currentIndex--;
        },

        nextImg() {
            if(this.currentIndex < this.imgNameList.length-1) this.currentIndex++;
        },

        loadImgByIndex(index) {
            this.currentIndex = index;
        },
    }
}
</script>

<template>

    <div v-if="imgNameList" class="relative h-full w-full">

        <!-- carousel imgs -->
        <img :src="getImgPath(imgNameList[0])" alt="photo de Bercy" 
            :class="currentIndex == 0 ?
                'absolute top-0 object-cover h-full w-full duration-700 ease-in-out'
                : 'absolute top-0 object-cover h-full w-full duration-700 ease-in-out -translate-x-full'"
        >

        <img :src="getImgPath(imgNameList[1])" alt="photo de Bercy" 
            :class="currentIndex == 1 ?
                'absolute top-0 object-cover h-full w-full duration-700 ease-in-out'
                : currentIndex < 1 ? 
                    'absolute top-0 object-cover h-full w-full  duration-700 ease-in-out translate-x-full'
                    :'absolute top-0 object-cover h-full w-full  duration-700 ease-in-out -translate-x-full'"
        >

        <img :src="getImgPath(imgNameList[2])" alt="photo de Bercy" 
            :class="currentIndex == 2 ?
                'absolute top-0 object-cover h-full w-full duration-700 ease-in-out'
                : currentIndex < 2 ? 
                    'absolute top-0 object-cover h-full w-full  duration-700 ease-in-out translate-x-full'
                    :'absolute top-0 object-cover h-full w-full  duration-700 ease-in-out -translate-x-full'"
        >

        <img :src="getImgPath(imgNameList[3])" alt="photo de Bercy" 
            :class="currentIndex == 3 ?
                'absolute top-0 object-cover h-full w-full duration-700 ease-in-out'
                : currentIndex < 3 ? 
                    'absolute top-0 object-cover h-full w-full  duration-700 ease-in-out translate-x-full'
                    :'absolute top-0 object-cover h-full w-full  duration-700 ease-in-out -translate-x-full'"
        >

        <img :src="getImgPath(imgNameList[4])" alt="photo de Bercy" 
            :class="currentIndex == 4 ?
                'absolute top-0 object-cover h-full w-full duration-700 ease-in-out'
                : currentIndex < 4 ? 
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
        <div class="absolute bottom-5 left-1/3 flex gap-5 w-1/3 justify-center">

            <img src="../../../public/assets/circle.svg" alt="icône de page ronde" 
                :class="currentIndex == 0 ? 
                    'cursor-pointer scale-125' 
                    : 'hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer'" 
                @click="loadImgByIndex(0)"
            >

            <img src="../../../public/assets/circle.svg" alt="icône de page ronde" 
                :class="currentIndex == 1 ? 
                    'cursor-pointer scale-125' 
                    : 'hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer'" 
                @click="loadImgByIndex(1)"
            >

            <img src="../../../public/assets/circle.svg" alt="icône de page ronde" 
                :class="currentIndex == 2 ? 
                    'cursor-pointer scale-125' 
                    : 'hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer'" 
                @click="loadImgByIndex(2)"
            >

            <img src="../../../public/assets/circle.svg" alt="icône de page ronde" 
                :class="currentIndex == 3 ? 
                    'cursor-pointer scale-125' 
                    : 'hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer'" 
                @click="loadImgByIndex(3)"
            >

            <img src="../../../public/assets/circle.svg" alt="icône de page ronde" 
                :class="currentIndex == 4 ? 
                    'cursor-pointer scale-125' 
                    : 'hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer'"  
                @click="loadImgByIndex(4)"
            >

        </div>

    </div>

    <div v-else class="h-full">
        <p>Nothing to show yet</p>
    </div>

</template>
