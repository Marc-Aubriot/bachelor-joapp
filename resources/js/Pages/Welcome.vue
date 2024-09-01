<script>
import { Head } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import Carousel from '@/Components/Carousel.vue';
import { getImgPath } from '@/utilities';

export default {
    name: "Welcome",

    components: {
        Header,
        Footer,
        Carousel,
        Head,
    },

    props: {
        canLogin: {
            type: Boolean,
        },
        canRegister: {
            type: Boolean,
        },
        articleList: {
            type: Array,
            required: false,
        },
        imgList: {
            typ: Array,
            required: false,
        },
    },

    data() {
        return {
            newsCurrentPage: 0,
            articlesForThisPage: [],
            articleSubList: [],
            newsMaxPage: 4,
        }
    },

    mounted() {
        this.populateNewSection();
    },

    methods: {
        getImgPath,

        loadArticle(articleId) {
            console.log("loading this article");
        },

        previousNewsPage() {
            if (this.newsCurrentPage > 0) {
                this.newsCurrentPage--;
                this.articlesForThisPage = this.articleSubList[this.newsCurrentPage];
            };
        },

        nextNewsPage() {
            if (this.newsCurrentPage < this.articleSubList.length-1) {
                this.newsCurrentPage++;
                this.articlesForThisPage = this.articleSubList[this.newsCurrentPage];
            };
        },

        populateNewSection() {
            let count = 0;
            let subArray = [];
            for (let i=0; i<this.articleList.length; i++) {
                subArray.push(this.articleList[i]);
                count++;
                if (count == 3) {   //  insert 3 articles in each sub array
                    count = 0;  
                    this.articleSubList.push(subArray);
                    subArray = [];
                }
            }
            this.articlesForThisPage = this.articleSubList[this.newsCurrentPage];
        }
    },
}
</script>

<template>

    <Head title="Accueil"></Head>

    <div class="h-fit w-full">

        <div class="h-screen relative">

            <Header></Header>

            <Carousel :imgNameList=imgList></Carousel>

        </div>

        <main class="h-fit w-full">

            <!-- articles section -->
            <section class="flex justify-center w-full py-16 overflow-hidden">
                
                <div class="w-4/5 md:w-3/5 flex flex-col gap-8">

                    <h2 class="text-4xl">Actualités de Paris 2024</h2>

                    <div class="border-t-black border-t py-8 flex flex-col md:flex-row md:justify-between w-full gap-10">

                        <article v-for="(article, index) in articlesForThisPage" class="flex flex-col w-full gap-6">
                              
                            <img 
                                :src="getImgPath(article.photo)" 
                                :alt="article.alt" 
                                class="cursor-pointer hover:scale-110 rounded-md h-48 w-full"
                                @click="loadArticle(article.id)"
                            >

                            <h5 
                                class="cursor-pointer hover:underline hover:underline-offset-4 w-33" 
                                @click="loadArticle(article.id)"
                            >{{ article.title }}</h5>   

                        </article>

                    </div>

                    <div class="flex justify-end w-full">

                        <div class="flex gap-2">
                            <img 
                                src="../../../public/assets/little-arrow-left.svg" 
                                alt="petite flèche à gauche" 
                                class="cursor-pointer"
                                @click="previousNewsPage"
                            >
                            <p>{{ newsCurrentPage+1 }}/{{ articleSubList.length }}</p>
                            <img 
                                src="../../../public/assets/little-arrow-right.svg" 
                                alt="petite flèche à droite" 
                                class="cursor-pointer"
                                @click="nextNewsPage"
                            >
                        </div>

                    </div>

                </div>
                
            </section>

        </main>

        <Footer></Footer> 

    </div>
   
</template>
