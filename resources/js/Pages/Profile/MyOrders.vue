<script>
export default {
    name: 'MyOrders',

    props: {
        orders: {
            type: Array,
            default: [],
        },
    },

    mounted() {
        console.log(this.orders);
    },
}
</script>

<template>
    <div class="flex flex-col items-center h-fit w-full">

        <div class="flex flex-col gap-6 w-full md:w-4/5 h-fit">       
            
            <div v-for="(order,index) in orders" class="flex flex-col md:flex-row md:justify-between w-full md:w-4/5 border p-3">
               <div class="flex gap-1"> 
                    <p>Le: {{ order.created_at.substring(0,10) }}</p>
                    <p>à: {{ order.created_at.substring(11,16) }}</p>
                </div>

                <p>payé: {{ order.amount_paid }}</p>

                <p> status: {{ order.status }}</p>
            </div>

        </div>

    </div>
    
</template>