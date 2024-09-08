<script>
import axios from 'axios';
import { getImgPath } from '@/utilities';
import PrimaryCustomButton from './PrimaryCustomButton.vue';
import { toaster } from '@/utilities';

export default {
    name: 'Ticket',

    components: {
        PrimaryCustomButton,
    },

    props: {
        id: {
            type: Number,
            required: true,
        },
        title: {
            type: String,
            default: "default title"
        },
        photo: {
            type: String,
            default: "",
        },
        price: {
            type: String,
            default: "default price" 
        },
        description: {
            type: String,
            default: "default description"
        },
        color: {
            type: String,
            default: "black"
        },
        index: {
            type: String,
            default: null
        },
        stripeItemPrice: String,
    },

    computed: {
        user() {
            return this.$page.props.auth.user;
        },
    },

    methods: {
        getImgPath,

        async addToShoppingList() {
            try  {
                const response = await axios.post(`/addtocart`, {stripe_item_price: this.stripeItemPrice});

                if (response.data.message == 'cart updated') toaster("Billet ajouté à votre panier.", "success");
                else if (response.data.message == 'cart created') toaster("Billet ajouté à votre panier.", "success");
                else if (response.data.message == 'user not logged in') toaster("Vous devez vous connecter pour ajouter un billet au panier.", "info");
                else toaster("Erreur lors de l'ajout du billet", "error");
            } catch (e) {
                toaster("Erreur lors de l'enregistrement du billet", "error");
                console.error(e);
            }
        },
    }
}
</script>

<template>

    <article :class="`flex flex-col gap-2 rounded-lg items-center shadow-lg shadow-${color}-500/50 p-10`">

        <h3 class="font-bold text-xl">Offre {{ title }}</h3>

        <img :src="getImgPath(photo)" alt="photo de l'offre" class="rounded-lg w-96 h-44 object-cover">

        <p>{{ description }}</p>

        <p>{{ price }}€</p>

        <form @submit.prevent="addToShoppingList">
            <button  
                class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
                type="submit"
                :name="`ticket-button-${index}`"
            >
                Réserver ce billet
            </button>
        </form>

    </article>

</template>
