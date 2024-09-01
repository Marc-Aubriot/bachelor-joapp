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
    <div class="flex flex-col items-center h-fit w-full">

        <div class="w-full md:w-4/5 h-fit">       
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