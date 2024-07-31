<script>
import { getImgPath } from '@/utilities';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

export default {
    name: 'Ticket',

    components: {
        ResponsiveNavLink,
    },

    props: {
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
    },

    methods: {
        getImgPath,
    }
}
</script>

<template>

    <article :class="`flex flex-col gap-10 rounded-lg items-center shadow-lg shadow-${color}-500/50 p-10`">

        <h3 class="font-bold text-xl">Offre {{ title }}</h3>

        <img :src="getImgPath(photo)" alt="photo de l'offre" class="rounded-lg">

        <p>{{ description }}</p>

        <p>{{ price }}€</p>
 
        <!-- <button 
            class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
            @click="loadTicketOfferPage(title)"
        >Réserver ce billet</button> -->
        <ResponsiveNavLink 
            class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
            :href="`/billets/${title}`"
        >Réserver ce billet</ResponsiveNavLink>

    </article>

</template>
