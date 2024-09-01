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
            type: Number,
            default: 1,
        },
        qrCode: {
            type: Object,
            default: {},
        },
        dateUsed: {
            type: String,
            default: null,
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

                <p v-if="dateUsed != null">--</p>
                <p v-else>Non utilisé</p>
            </div>
        </div>

        <div class="flex flex-col w-fit gap-4">
            <h3 class="font-bold text-md">Billet</h3>

            <p v-if="dateUsed != null">Utilisé le :</p>
            <p v-else>--</p>

            <p v-if="dateUsed != null">{{ dateUsed.substring(0, 10) }}</p>
            <p v-else>--</p>
        </div>

        <div class="flex flex-col items-center w-full md:w-fit gap-4">
            <img :src="`${qrCode[1]}`" alt="" class="qrcode">
        </div>

    </article>

</template>

<style>
.qrcode {
    width: 100px;
    height: 100px;
}
</style>
