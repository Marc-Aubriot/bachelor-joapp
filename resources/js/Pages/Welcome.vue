<script>
import { Head, Link } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import Carousel from '@/Components/Carousel.vue';

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
        laravelVersion: {
            type: String,
            required: true,
        },
        phpVersion: {
            type: String,
            required: true,
        },
        assetsURL: {
            type: String,
            required: true,
        },
    },

    data() {
        return {
            newsCurrentPage: 0,
            articlesForThisPage: [],
            newsMaxPage: 4,
            imgList: ["vaires.jpg", "versailles.jpg", "bercy.jpg", "st-denis.jpg", "grand-palais.jpg"],
            articleList: [
                [
                    {
                        "id": 1,
                        "title": "Consultez la cartographie des JO!",
                        "photo": "jo-map.png",
                        "alt": "La carte des jeux olympiques"
                    },
                    {
                        "id": 2,
                        "title": "Les épreuves de surf!",
                        "photo": "surf.jpg",
                        "alt": "Un surfeur"
                    },
                    {
                        "id": 3,
                        "title": "Les épreuves de natation.",
                        "photo": "arena.jpg",
                        "alt": "L'arena"
                    },
                ],[
                    {
                        "id": 4,
                        "title": "Les épreuves de basketball.",
                        "photo": "basket.jpg",
                        "alt": "Stade de basket"
                    },
                    {
                        "id": 5,
                        "title": "Les épreuves de triathlon!",
                        "photo": "triatlon.jpg",
                        "alt": "Une coureuse"
                    },
                    {
                        "id": 6,
                        "title": "Les épreuves de handball.",
                        "photo": "handball.jpg",
                        "alt": "photo de l'arena"
                    },
                ],[
                    {
                        "id": 1,
                        "title": "Consultez la cartographie des JO!",
                        "photo": "jo-map.png",
                        "alt": "La carte des jeux olympiques"
                    },
                    {
                        "id": 2,
                        "title": "Les épreuves de surf!",
                        "photo": "surf.jpg",
                        "alt": "Un surfeur"
                    },
                    {
                        "id": 3,
                        "title": "Les épreuves de natation.",
                        "photo": "arena.jpg",
                        "alt": "L'arena"
                    },
                ],[
                    {
                        "id": 4,
                        "title": "Les épreuves de basketball.",
                        "photo": "basket.jpg",
                        "alt": "Stade de basket"
                    },
                    {
                        "id": 5,
                        "title": "Les épreuves de triathlon!",
                        "photo": "triatlon.jpg",
                        "alt": "Une coureuse"
                    },
                    {
                        "id": 6,
                        "title": "Les épreuves de handball.",
                        "photo": "handball.jpg",
                        "alt": "photo de l'arena"
                    }
                ],
            ],
        }
    },

    mounted() {
        this.articlesForThisPage = this.articleList[this.newsCurrentPage];
    },

    methods: {
        //  load img 
        getImgPath(img) {
            if (this.assetsURL) return `${this.assetsURL}/${img}`;
            else return `http://[::1]:5173/public/assets/${img}`;
        },

        //  load article
        loadArticle(articleId) {
            console.log("loading this article");
        },

        previousNewsPage() {
            if (this.newsCurrentPage > 0) {
                this.newsCurrentPage--;
                this.articlesForThisPage = this.articleList[this.newsCurrentPage];
            };
        },

        nextNewsPage() {
            if (this.newsCurrentPage < this.newsMaxPage-1) {
                this.newsCurrentPage++;
                this.articlesForThisPage = this.articleList[this.newsCurrentPage];
            };
        }
    },
}
</script>

<template>

    <Head title="Accueil"></Head>

    <div class="h-fit w-full">

        <div class="h-screen relative">

            <Header></Header>

            <Carousel :imgNameList=imgList :assetsURL="assetsURL"></Carousel>

        </div>

        <main class="h-fit w-full">

            <!-- articles section -->
            <section class="flex justify-center w-screen py-16">
                
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
                            <p>{{ newsCurrentPage+1 }}/{{ newsMaxPage }}</p>
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
