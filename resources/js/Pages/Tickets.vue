<script>
import { Head } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import TicketCard from '@/Components/TicketCard.vue';
import { getImgPath } from '@/utilities';

export default {
    name: 'Tickets',

    components: {
        Header,
        Footer,
        Head,
        TicketCard,
    },

    props: {
        ticketList: {
            type: Array,
            required: false,
            default: "hello"
        },
    },

    data() {
        return {

        }
    },

    methods: {
        getImgPath,

        scrollToOffers() {
            const element = document.getElementById('billets');
            element.scrollIntoView({ behavior: 'smooth' });
        }

    },
}
</script>

<template>
    <Head title="Billets"></Head>

    <div class="h-fit w-full overflow-hidden">

        <div class="h-screen w-full relative">
            <Header></Header>

            <img src="../../../public/assets/stade-de-france.jpg" alt="Drapeau des jeux olympiques de Paris 2024" class="object-cover h-full w-full">

            <div class="absolute top-3/4 w-full flex justify-center">
                <button 
                    class="bg-amber-200 w-1/3 p-4 rounded-full hover:bg-amber-400 transition ease-in-out duration-300"
                    @click="scrollToOffers"
                >Voir toutes nos offres</button>
            </div>
            
        </div>
        
        <main class="h-fit">

            <section id="billets" class="flex justify-center w-screen py-16 overflow-hidden">
                
                <div class="w-4/5 md:w-3/5 flex flex-col gap-8">

                    <h2 class="text-4xl">Nos offres d'entrées</h2>

                    <div class="border-t-black border-t py-8 flex flex-col md:flex-row md:justify-between w-full gap-10">

                        <TicketCard 
                            v-for="(ticket, index) in ticketList"
                            :title="ticket.title" 
                            :photo="ticket.photo"
                            :price="ticket.price"
                            :description="ticket.description"
                            :color="ticket.color"
                        ></TicketCard>

                    </div>

                </div>
                 
            </section>

        </main>

        <Footer></Footer>

    </div>  
</template>
