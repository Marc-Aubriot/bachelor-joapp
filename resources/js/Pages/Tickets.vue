<script>
import { Head, Link } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';

export default {
    name: 'Tickets',

    components: {
        Header,
        Footer,
        Head,
    },

    data() {
        return {

        }
    },

    methods: {
        getImgPath(img) {
            if (this.assetsURL) return `${this.assetsURL}/${img}`;
            else return `http://[::1]:5173/public/assets/${img}`;
        },
    },
}
</script>

<template>
    <Head title="Billets"></Head>

    <div class="h-fit w-full">

        <div class="h-screen w-full">
            <Header></Header>

            <img :src="getImgPath('jo-2024.jpeg')" alt="Drapeau des jeux olympiques de Paris 2024" class="object-cover h-full w-full">
        </div>
        
        <main class="h-fit">

            <section class="">

            </section>

        </main>

        <Footer></Footer>

    </div>  
</template>
