<script>
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

export default {
    name: 'Header',

    components: {
        ResponsiveNavLink,
    },

    data() {
        return {
            hamburgerMenuIsOpen: false,
        }
    },
}
</script>

<template>

    <div class="bg-gradient-to-b from-light-blue to-heavy-blue flex h-120 justify-between">

        <!-- left nav basket and profile -->
        <div class="flex gap-4 ml-4 items-center grow basis-0">
            <img 
                src="../../assets/shopping-basket.svg" 
                alt="panier d'achat" 
                class="h-45 w-45 cursor-pointer"
            >

            <img 
                src="../../assets/account-circle.svg" 
                alt="avatar du profil" 
                class="h-45 w-45 cursor-pointer"
            >

            <ul class="hidden gap-6 md:flex">
                <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/">Relais de la flamme</ResponsiveNavLink>
                </li>
                <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/">Calendrier</ResponsiveNavLink>
                </li>
            </ul>
        </div>
        
        <!-- center logo -->
        <div class="h-120 flex justify-center">
            <img 
                src="../../assets/app-logo.png" 
                alt="logo" 
                class="h-full w-auto cursor-pointer"
            >
        </div>

        <!-- right nav links -->
        <div class="flex justify-end items-center grow basis-0">
            <img 
                v-if="hamburgerMenuIsOpen"
                src="../../assets/close-menu.svg" 
                alt="menu de navigation"  
                class="h-45 w-45 cursor-pointer mr-4 md:hidden"
                @click="hamburgerMenuIsOpen = !hamburgerMenuIsOpen"
            >
            <img 
                v-else
                src="../../assets/hamburger-menu.svg" 
                alt="menu de navigation"  
                class="h-45 w-45 cursor-pointer mr-4 md:hidden"
                @click="hamburgerMenuIsOpen = !hamburgerMenuIsOpen"
            >

            <ul class="hidden md:flex justify-between mr-8 gap-6">
                <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/">Accueil</ResponsiveNavLink>
                </li>
                <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/billets">Billets</ResponsiveNavLink>
                </li>
                <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/">Boutique</ResponsiveNavLink>
                </li>
                <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/">Hospitalité</ResponsiveNavLink>
                </li>
                <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/">Langues</ResponsiveNavLink>
                </li>
            </ul>

        </div>

    </div>

    <div v-if="hamburgerMenuIsOpen == true" class="bg-gradient-to-b from-heavy-blue to-light-blue h-screen md:hidden">
        <ul class="flex flex-col md:flex-row justify-evenly items-center h-full">
            <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                <ResponsiveNavLink href="/">Relais de la flamme</ResponsiveNavLink>
            </li>
            <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                <ResponsiveNavLink href="/">Calendrier</ResponsiveNavLink>
            </li>
            <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                <ResponsiveNavLink href="/">Accueil</ResponsiveNavLink>
            </li>
            <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                <ResponsiveNavLink href="/billets">Billets</ResponsiveNavLink>
            </li>
            <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                <ResponsiveNavLink href="/">Boutique</ResponsiveNavLink>
            </li>
            <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                <ResponsiveNavLink href="/">Hospitalité</ResponsiveNavLink>
            </li>
            <li class="text-white text-2xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                <ResponsiveNavLink href="/">Langues</ResponsiveNavLink>
            </li>
        </ul>
    </div>
    
</template>
