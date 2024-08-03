<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3';
const page = usePage();
const user = computed(() => page.props.auth.user);

const logout = () => {
    router.post(route('logout'));
};

</script>

<script>
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
</script>

<template>
<h1>NBUYING LOL</h1>

<a  
    target="_blank"
    class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
    :href="`https://buy.stripe.com/test_eVa4gF9Ss56Y4RG7su?prefilled_email=${user.email}`"
>Réserver ce billet</a>
</template>
