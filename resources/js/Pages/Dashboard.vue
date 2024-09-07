<script>
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import { Head } from '@inertiajs/vue3';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Profile from './Profile/Profile.vue';
import { router } from '@inertiajs/vue3';
import MyTickets from './Profile/MyTickets.vue';

export default {
    name: 'Dashboard',

    components: {
        Header,
        Footer,
        Head,
        ResponsiveNavLink,
        Profile,
        MyTickets,
    },

    props: {
        tickets: {
            type: Array,
            default: [],
        },
        section: {
            type: String,
            default: null,
        },
    },

    data() {
        return {
            currentPage: 'profile',
        }
    },

    mounted() {
        if (this.section != null) this.currentPage = this.section;
    },

    methods: {
        logout() {
            router.post(route('logout'));
        },
    }
}
</script>

<template>

    <Head title="Dashboard"></Head>
    
    <main class="h-fit w-full overflow-hidden">

        <Header opacity="bg-opacity-100" position="initial"></Header>

        <section id="billets" class="flex justify-center h-fit w-full py-16 overflow-hidden">

            <div class="w-4/5 flex flex-col gap-2">

                <h1 class="text-4xl">Dashboard</h1>
                <div class="border-t-black border-t w-full"></div>

                <div class="flex flex-col md:flex-row w-full h-fit justify-between">

                    <div class="py-8 flex flex-col md:flex-row w-full md:justify-between md:w-1/6 h-full gap-10">

                        <ul class="flex flex-col gap-2 p-4 w-full h-fit border rounded-md border-black">
                            <li :class="currentPage == 'profile' ? 'underline underline-offset-8 cursor-pointer':'hover:underline underline-offset-8 cursor-pointer'" @click="currentPage='profile'">
                                <p>Compte</p>
                            </li>
                            <li :class="currentPage == 'tickets' ? 'underline underline-offset-8 cursor-pointer':'hover:underline underline-offset-8 cursor-pointer'" @click="currentPage='tickets'">
                                <p>Billets</p>
                            </li>
                            <li :class="currentPage == 'orders' ? 'underline underline-offset-8 cursor-pointer':'hover:underline underline-offset-8 cursor-pointer'" @click="currentPage='orders'">
                                <p>Factures</p>
                            </li>
                            <li class="hover:underline underline-offset-8 cursor-pointer" @click="logout()">
                                <p>Déconnexion</p>
                            </li>
                        </ul>              

                    </div>

                    <div class="flex justify-center w-full h-full py-8">

                        <div class="flex flex-col gap-2 items-center w-full h-full">
                            <Profile v-if="currentPage == 'profile'"/>
                            <MyTickets v-if="currentPage == 'tickets'" :tickets="tickets"/>
                        </div>

                    </div>

                </div>

            </div>
             
        </section>

        <Footer></Footer>

    </main>
  
</template>
