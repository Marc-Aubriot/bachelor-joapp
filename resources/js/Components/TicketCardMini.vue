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

        stripeItemPrice: String,
    },

    computed: {
        user() {
            return this.$page.props.auth.user;
        },
    },

    data() {
        return {
            showArticle: true,
            ticketAmount: null,
        }
    },

    mounted() {
        this.ticketAmount = this.quantity;
    },

    methods: {
        getImgPath,

        async updateTicket(method) {

            if (this.ticketAmount <= 1 && method == 'substract') return toaster("Une quantité minimum est requise.", "error");
            try  {
                const response = await axios.post(`/cart/update/${this.id}`, {'method': method});

                if (response.data.message == 'success') {
                    if (method == 'add') this.ticketAmount++;
                    else this.ticketAmount--;
                    toaster("Quantité modifiée.", "success");
                    this.$emit('update-cart', method, this.price);
                } else if (response.data.message == 'error') {
                    toaster("Erreur lors de la modification de la quantité.", "error");
                }
                
            } catch (e) {
                toaster("Erreur lors de la mise à jour du billet", "error");
                console.error(e);
            }
        },

        async deleteTicket() {
            try  {
                const response = await axios.post(`/cart/delete/${this.id}`);
                
                if (response.data.message == 'success') {
                    this.showArticle = false;
                    toaster("Billet supprimé.", "success");
                    this.$emit('delete-item', this.id);
                } else if (response.data.message == 'error') {
                    toaster("Erreur lors de la suppression du billet.", "error");
                }
            } catch (e) {
                toaster("Erreur lors de l'effacement du billet", "error");
                console.error(e);
            }
        }
    }
}
</script>

<template>

    <article v-if="showArticle" :class="`flex flex-col mb-5 md:flex-row gap-2 w-80 md:w-full md:gap-10 rounded-lg justify-between shadow-lg shadow-${color}-500/50 md:h-40 p-2 md:p-10`">

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

            <p>Quantité: {{ ticketAmount }}</p>

            <p>Prix total: {{ ticketAmount*price }} €</p>
        </div>

        <div class="flex flex-col w-fit gap-4">
            <h3 class="font-bold text-md">Modifier ma commande</h3>

            <div class="flex w-full gap-2 justify-between">
                <button class="bg-yellow-200 px-2 flex justify-center" @click="updateTicket('substract')">Retirer 1</button>
                <button class="bg-yellow-200 px-2 flex justify-center" @click="updateTicket('add')">Ajouter 1</button>
            </div>

            <button class="bg-red-300 px-2 flex justify-center" @click="deleteTicket()">Supprimer commande</button>
        </div>

    </article>

</template>
