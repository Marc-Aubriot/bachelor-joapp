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
    }
}
</script>

<template>
   <Head title="Paiment réussi"></Head>

    <div class="h-fit w-full overflow-hidden">

        <main class="h-screen w-full relative">
            <Header></Header>

            <img src="../../../public/assets/st-quentin.jpg" alt="Drapeau des jeux olympiques de Paris 2024" class="object-cover h-full w-full">

            <div class="absolute top-2/4 w-full flex justify-center">
                <div class="w-3/4 md:w-2/6 p-10 rounded-xl flex flex-col items-center gap-6 bg-white">

                    <h1 class="text-xl font-bold">Paiement annulé</h1>
                </div>   
            </div>
            
        </main>

        <Footer></Footer>

    </div>  
</template>