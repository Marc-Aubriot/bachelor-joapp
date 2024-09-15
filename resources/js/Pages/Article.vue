<script>
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import { Head } from '@inertiajs/vue3';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { getImgPath } from '@/utilities';

export default {
    name: 'Article',

    components: {
        Header,
        Footer,
        Head,
        ResponsiveNavLink,
    },

    props: {
        article: {
            type: Object,
            default: {},
        },
    },

    methods: {
        getImgPath,
    },
}
</script>

<template>

    <Head title="Article"></Head>

    <Header opacity="bg-opacity-100" position="initial"></Header>

    <main class="flex justify-center w-full overflow-hidden">

        <article class="flex flex-col items-center gap-5">
            <h1 class="font-semibold text-xl mt-6">{{ article.title }}</h1>
            
            <div class="w-full md:w-2/4 p-6">
                <img :src="getImgPath(article.photo)" alt="" class="w-full rounded-xl">
            </div>
            

            <div v-html="article.body" class="flex flex-col w-full md:w-2/4 items-center p-6"></div>
            
            <p class="italic pb-6 text-sm">Contenu généré par chat-gpt</p>
        </article>
    
    </main>

    <Footer></Footer>

</template>
