<script>
import TicketCardQr from '@/Components/TicketCardQr.vue';
export default {
    name: 'MyTickets',

    components: {
        TicketCardQr,
    },

    props: {
        tickets: {
            type: Array,
            default: [],
        },
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
    <div class="content">

        <div class="ticket-wrapper">       
            <TicketCardQr
                v-for="(ticket, index) in tickets"
                :id="ticket.id"
                :title="ticket.title" 
                :photo="ticket.photo"
                :price="ticket.price"
                :description="ticket.description"
                :color="ticket.color"
                :stripeItemPrice="ticket.stripe_item_price"
                :quantity="ticket.quantity"
                :qrCode="ticket.qrCode"
                :dateUsed="ticket.date_used"
            ></TicketCardQr>
        </div>

    </div>
    
</template>

<style>
.content {
    width: 100%;
    height: fit-content;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ticket-wrapper {
    width: 80%;
    height: fit-content;
}
</style>