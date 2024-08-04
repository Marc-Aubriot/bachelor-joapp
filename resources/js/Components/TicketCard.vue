<script>
import { router, useForm  } from '@inertiajs/vue3'
import { getImgPath } from '@/utilities';
import PrimaryCustomButton from './PrimaryCustomButton.vue';
import axios from 'axios';

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
        stripe_checkout_link: String,
    },

    computed: {
        user() {
            return this.$page.props.auth.user
        },
        message() {
            return this.$page.props.flash.message
        },
        csrf() {
            return this.$page.props.csrf_token
        },
    },

    mounted() {
        console.log(this.stripe_checkout_link)
    },

    methods: {
        getImgPath,

        async addToShoppingList(item) {
            try  {
                console.log(this.user);
                const response = await axios.post(`/addtocart/${item}`);
                console.log(response);
            } catch (e) {
                console.log(e);
            }
        },
    }
}
</script>

<template>

    <article :class="`flex flex-col gap-10 rounded-lg items-center shadow-lg shadow-${color}-500/50 p-10`">

        <h3 class="font-bold text-xl">Offre {{ title }}</h3>

        <img :src="getImgPath(photo)" alt="photo de l'offre" class="rounded-lg w-96 h-44 object-cover">

        <p>{{ description }}</p>

        <p>{{ price }}€</p>

        <!-- <form method="POST" @submit.prevent="addToShoppingList(id)">
            <PrimaryCustomButton>Ajouter au panier</PrimaryCustomButton>
        </form> -->

        <a  
            v-if="user != null"
            target="_blank"
            class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
            :href="stripe_checkout_link"
        >
            Réserver ce billet
        </a>

        <a  
            v-else
            class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
            href="/login"
        >
            Réserver ce billet
        </a>

    </article>

</template>
