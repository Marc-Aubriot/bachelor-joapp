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
        quantity: {
            type: String,
            default: 1,
        },
        qrCode: {
            type: Object,
            default: {},
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
                toaster("Billet enregistré.", "success");
            } catch (e) {
                toaster("Erreur lors de l'enregistrement du illet", "error");
                console.error(e);
            }
        },
    }
}
</script>

<template>

    <article :class="`flex flex-col mb-5 md:flex-row gap-2 w-80 md:w-full md:gap-10 rounded-lg justify-between shadow-lg shadow-${color}-500/50 md:h-40 p-2 md:p-10`">

        <div class="flex w-fit gap-10">
            <div class="flex flex-col w-fit gap-10">
                <img :src="getImgPath(photo)" alt="photo de l'offre" class="rounded-lg w-32 h-32 object-cover">
            </div>

            <div class="flex flex-col w-fit gap-4">
                <h3 class="font-bold text-md">Offre {{ title }}</h3>

                <p>{{ description }}</p>

                <p>Prix unitaire: {{ price }} €</p>
            </div>
        </div>

        <div class="flex flex-col w-fit gap-4">
            <h3 class="font-bold text-md">Coût total</h3>

            <p>Quantité: {{ quantity }}</p>

            <p>Prix total: {{ quantity*price }} €</p>
        </div>

        <div class="flex flex-col w-fit gap-4">
            <h3 class="font-bold text-md">Modifier ma commande</h3>

            <p>- + Valider</p>

            <p>Supprimer commande</p>
        </div>

    </article>

</template>
