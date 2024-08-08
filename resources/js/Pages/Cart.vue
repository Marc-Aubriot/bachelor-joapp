<script>
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import { Head } from '@inertiajs/vue3';
import TicketCardMini from '@/Components/TicketCardMini.vue';
import { toaster } from '@/utilities';
import axios from 'axios';

export default {
    name: 'Cart',

    components: {
        Header,
        Footer,
        Head,
        TicketCardMini,
    },

    props: {
        cart: Array,
        ticketlist: Array,
    },

    mounted() {
        console.log(this.cart);
        console.log(this.ticketlist);
    },

    methods: {
        async addToShoppingList() {
            try  {
                const response = await axios.get(`/cart/${this.cart.id}/checkout`);
                //toaster("Billet enregistré.", "success");
            } catch (e) {
                toaster("Erreur lors de l'enregistrement du illet", "error");
                console.error(e);
            }
        },
    }

}
</script>

<template>
   <Head title="Panier"></Head>

    <div class="h-fit w-full overflow-hidden">

        <div class="h-screen w-full relative">
            <Header></Header>

            <img src="../../../public/assets/st-quentin.jpg" alt="Drapeau des jeux olympiques de Paris 2024" class="object-cover h-full w-full">

            <main class="absolute top-24 w-full h-fit md:h-5/6 flex flex-col md:flex-row items-center md:justify-evenly">

                <div class="w-3/4 h-fit md:w-3/6 p-10 rounded-xl flex flex-col gap-6 bg-white">

                    <h1 class="text-xl font-bold">Mon panier</h1>
                    
                    <div class="flex flex-col gap-10">

                        <TicketCardMini
                            v-for="(ticket, index) in ticketlist"
                            :id="ticket[0].id"
                            :title="ticket[0].title" 
                            :photo="ticket[0].photo"
                            :price="ticket[0].price"
                            :description="ticket[0].description"
                            :color="ticket[0].color"
                            :stripeItemPrice="ticket[0].stripe_item_price"
                            :quantity="ticket[1]"
                        ></TicketCardMini>

                    </div>

                </div>

                <div class="w-3/4 h-5/6 md:w-1/6 p-10 rounded-xl flex flex-col gap-6 bg-white">

                    <h2 class="text-xl font-bold">Ma facture</h2>
                    <form @submit.prevent="addToShoppingList">
                        <button  
                            class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
                            type="submit"
                        >
                            Payer ma commande
                        </button>
                    </form>
                </div>   

            </main>
            
        </div>

        <Footer></Footer>

    </div>  

</template>
