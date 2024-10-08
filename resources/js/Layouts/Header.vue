<!-- <script setup>
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
const page = usePage();
const user = computed(() => page.props.auth.user);
</script> -->

<script>
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { router } from '@inertiajs/vue3';

export default {
    name: 'Header',
    
    components: {
        ResponsiveNavLink,
    },

    props: {
        opacity: {
            type: String,
            default: 'bg-opacity-20',
        },

        position: {
            type: String,
            default: 'absolute',
        },

        ticketsCount: {
            type: Number,
            default: 0,
        }
    },

    data() {
        return {
            hamburgerMenuIsOpen: false,
        }
    },

    computed: {
        user() {
            return this.$page.props.auth.user;
        },
    },

    methods: {
        logout() {
            //const page = usePage();
            router.post(route('logout'));
        },
    }
}
</script>

<template>

    <header :class="`flex h-120 w-full justify-between ${position} top-0 z-50 bg-black ${opacity}`">
        
        <!-- Authentication -->
        <!-- <form method="POST" @submit.prevent="logout">
            <ResponsiveNavLink as="button">
                Log Out
            </ResponsiveNavLink>
        </form> -->

        <!-- left nav basket and profile -->
        <div class="flex gap-4 ml-4 items-center grow basis-0">
            <ResponsiveNavLink v-if="user" :href="`/cart/${user.id}`">
                <img 
                    src="../../../public/assets/shopping-basket.svg" 
                    alt="panier d'achat" 
                    class="cursor-pointer bg-white rounded-full p-2 hover:bg-amber-200 transition ease-in-out duration-300 relative"
                >
                <span v-if="ticketsCount > 0" class="flex justify-center items-center rounded-full bg-orange-400 w-[20px] h-[20px] absolute bottom-8 left-14">{{ ticketsCount }}</span>
            </ResponsiveNavLink>

            <ResponsiveNavLink 
                v-if="user"
                href="/dashboard"
            >
                <img 
                    src="../../../public/assets/account-circle.svg" 
                    alt="avatar du profil" 
                    class="cursor-pointer bg-white rounded-full p-2 hover:bg-amber-200 transition ease-in-out duration-300"
                >
            </ResponsiveNavLink>

            <ResponsiveNavLink 
                v-else
                href="/login"
                class="text-sm xl:text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1"
            >
                Se connecter
            </ResponsiveNavLink>

            <!-- <ul class="hidden gap-6 md:flex">
                <li class="text-sm xl:text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1">
                    <ResponsiveNavLink href="/">Relais de la flamme</ResponsiveNavLink>
                </li>
                <li class="text-sm xl:text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1">
                    <ResponsiveNavLink href="/">Calendrier</ResponsiveNavLink>
                </li>
            </ul> -->
        </div>
        
        <!-- center logo -->
        <div class="h-120 flex justify-center">
            <ResponsiveNavLink href="/">
                <img 
                    src="../../../public/assets/logo-2.svg" 
                    alt="logo" 
                    class="h-120 w-auto cursor-pointer scale-90"
                >
            </ResponsiveNavLink>
        </div>

        <!-- right nav links -->
        <nav class="flex justify-end items-center grow basis-0">
            <img 
                v-if="hamburgerMenuIsOpen"
                src="../../../public/assets/close-menu.svg" 
                alt="menu de navigation"  
                class="h-45 w-45 cursor-pointer mr-4 md:hidden"
                @click="hamburgerMenuIsOpen = !hamburgerMenuIsOpen"
            >
            <img 
                v-else
                src="../../../public/assets/hamburger-menu.svg" 
                alt="menu de navigation"  
                class="h-45 w-45 cursor-pointer mr-4 md:hidden"
                @click="hamburgerMenuIsOpen = !hamburgerMenuIsOpen"
            >

            <ul class="hidden md:flex justify-between mr-8 gap-6">
                <li class="text-sm xl:text-xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1">
                    <ResponsiveNavLink href="/">Accueil</ResponsiveNavLink>
                </li>
                <li class="text-sm xl:text-xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1">
                    <ResponsiveNavLink href="/billets">Billets</ResponsiveNavLink>
                </li>
                <!-- <li class="text-sm xl:text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1">
                    <ResponsiveNavLink href="/">Boutique</ResponsiveNavLink>
                </li>
                <li class="text-sm xl:text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1">
                    <ResponsiveNavLink href="/">Hospitalité</ResponsiveNavLink>
                </li>
                <li class="text-sm xl:text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1">
                    <ResponsiveNavLink href="/">Langues</ResponsiveNavLink>
                </li> -->
            </ul>

        </nav>

    </header>

    <nav v-if="hamburgerMenuIsOpen == true" class="h-screen md:hidden absolute top-[120px] py-10 z-50 w-full bg-black bg-opacity-30">
        <ul class="flex flex-col md:flex-row gap-4 items-center w-full h-3/5">
            <!-- <li class="text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full">
                <ResponsiveNavLink href="/">Relais de la flamme</ResponsiveNavLink>
            </li>
            <li class="text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full">
                <ResponsiveNavLink href="/">Calendrier</ResponsiveNavLink>
            </li> -->
            <li class="text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full">
                <ResponsiveNavLink href="/">Accueil</ResponsiveNavLink>
            </li>
            <li class="text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full">
                <ResponsiveNavLink href="/billets">Billets</ResponsiveNavLink>
            </li>
            <!-- <li class="text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full">
                <ResponsiveNavLink href="/">Boutique</ResponsiveNavLink>
            </li>
            <li class="text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full">
                <ResponsiveNavLink href="/">Hospitalité</ResponsiveNavLink>
            </li>
            <li class="text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full">
                <ResponsiveNavLink href="/">Langues</ResponsiveNavLink>
            </li> -->
        </ul>
    </nav>
    
</template>
