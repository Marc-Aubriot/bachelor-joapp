<script>
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import { Head } from '@inertiajs/vue3';

export default {
    name: 'CheckoutSuccess',

    components: {
        Header,
        Footer,
        Head,
    },
    
    props: {
        userTickets: {
            type: Array,
            default: [],
        },
        sales: {
            type: Array,
            default: {},
        },
    },
}
</script>

<template>
   <Head title="Paiment réussi"></Head>

    <div class="h-fit w-full overflow-hidden">

        <div class="h-screen w-full relative">
            <Header></Header>

            <img src="../../../public/assets/st-quentin.jpg" alt="Drapeau des jeux olympiques de Paris 2024" class="object-cover h-full w-full">

            <main class="absolute top-2/4 w-full flex justify-center">
                <div class="w-3/4 md:w-2/6 p-10 rounded-xl flex flex-col items-center gap-6 bg-white">

                    <h1 class="text-xl font-bold">Paiement réussi</h1>
                    <a  
                        class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
                        :href="`/dashboard?section=tickets`"
                    >
                        Voir mes billets
                    </a>
                </div>   
            </main>
            
        </div>

        <Footer></Footer>

    </div>  
</template>