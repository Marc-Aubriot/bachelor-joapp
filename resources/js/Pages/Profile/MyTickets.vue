<script>
import TicketCardMini from '@/Components/TicketCardMini.vue';
export default {
    name: 'MyTickets',

    components: {
        TicketCardMini,
    },

    props: {
        tickets: {
            type: Array,
            default: [],
        }
    },

    mounted() {
        console.log(this.tickets);
    },

    data() {
        return {
        }
    },

    methods: {
    }
}
</script>

<template>
    <div>
        <TicketCardMini
            v-for="(ticket, index) in tickets"
            :id="ticket.id"
            :title="ticket.title" 
            :photo="ticket.photo"
            :price="ticket.price"
            :description="ticket.description"
            :color="ticket.color"
            :stripeItemPrice="ticket.stripe_item_price"
            :quantity="ticket.quantity"
        ></TicketCardMini>
    </div>
</template>