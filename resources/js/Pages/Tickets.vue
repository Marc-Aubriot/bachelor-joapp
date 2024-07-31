<script>
import { Head, Link } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import Ticket from '@/Components/Ticket.vue';
import { getImgPath } from '@/utilities';

export default {
    name: 'Tickets',

    components: {
        Header,
        Footer,
        Head,
        Ticket,
    },

    props: {
        tickets: {
            type: Array,
            required: false,
        },
    },

    data() {
        return {

        }
    },

    methods: {
        getImgPath,

    },
}
</script>

<template>
    <Head title="Billets"></Head>

    <div class="h-fit w-full">

        <div class="h-screen w-full">
            <Header></Header>

            <img src="../../../public/assets/stade-de-france.jpg" alt="Drapeau des jeux olympiques de Paris 2024" class="object-cover h-full w-full">
        </div>
        
        <main class="h-fit">

            <section class="flex justify-center w-screen py-16 overflow-hidden">
                
                <div class="w-4/5 md:w-3/5 flex flex-col gap-8">

                    <h2 class="text-4xl">Nos offres d'entrées</h2>

                    <div class="border-t-black border-t py-8 flex flex-col md:flex-row md:justify-between w-full gap-10">

                        <Ticket 
                            
                            title="Duo" 
                            photo="../../../public/assets/stade-de-france.jpg"
                            price="400" 
                            description="Offre pour 2 entrées"
                            color="blue"
                        ></Ticket>

                        <Ticket 
                            
                            title="Solo" 
                            photo="../../../public/assets/stade-de-france.jpg"
                            price="250" 
                            description="Offre pour 1 entrée"
                            color="white"
                        ></Ticket>

                        <Ticket 
                            
                            title="Familiale" 
                            photo="../../../public/assets/stade-de-france.jpg"
                            price="700" 
                            description="Offre pour 4 entrées"
                            color="red"
                        ></Ticket>

                    </div>

                </div>
                 
            </section>

        </main>

        <Footer></Footer>

    </div>  
</template>
