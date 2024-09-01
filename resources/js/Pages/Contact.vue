<script>
import Footer from '@/Layouts/Footer.vue';
import Header from '@/Layouts/Header.vue';
import { Head } from '@inertiajs/vue3';
import axios from 'axios';
import { toaster } from '@/utilities';

export default {
    name: 'Contact',

    components: {
        Header,
        Footer,
        Head,
    },
    data() {
        return {
            contactForm: {},
        }
    },

    methods: {
        async sendForm() {
            try  {
                const response = await axios.post(`/contact`, this.contactForm );
                toaster("Message envoyé.", "success");
            } catch (e) {
                toaster("Erreur lors de l'envoi du message.", "error");
                console.error(e);
            }
        }
    }

}
</script>

<template>
    
    <Head title="Contact"></Head>

    <main class="w-full overflow-hidden">

        <Header opacity="bg-opacity-100" position="initial"></Header>

        <section class="h-screen w-full flex justify-center pt-16">
            
            <div class="w-4/5 md:w-1/2 flex flex-col gap-10">
                
                <h1 class="underline underline-offset-8 decoration-2">Formulaire de contact</h1>

                <form id="app" @submit.prevent="sendForm" class="flex flex-col gap-2 border border-black p-6 rounded-md">

                    <div class="flex flex-col gap-2 md:flex-row w-full justify-between">
                        <div class="flex flex-col md:w-1/2">
                            <label for="lastname">Nom</label>
                            <input id="lastname" v-model="contactForm.lastname" type="text" name="name">
                        </div>

                        <div class="flex flex-col md:w-1/2">
                            <label for="firstname">Prénom</label>
                            <input id="firstname" v-model="contactForm.firstname" type="text" name="name">
                        </div>
                    </div>

                    <div class="flex flex-col md:w-1/2">
                        <label for="mail">Email</label>
                        <input id="mail" v-model="contactForm.mail" type="text" name="name">
                    </div class="flex flex-col">

                    <div class="flex flex-col md:w-1/2">
                        <label for="title">Titre</label>
                        <input id="title" v-model="contactForm.title" type="text" name="name">
                    </div>

                    <div class="flex flex-col">
                        <label for="message">Message</label>
                        <input id="message" v-model="contactForm.message" type="textarea" name="name" class="border border-gray-500 h-20">
                    </div>
                   
                    <button  
                        class="bg-amber-200 p-4 mt-3 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
                        type="submit"
                    >
                        Envoyer     
                    </button>

                </form>
            </div>

        </section>

        <Footer></Footer>
        
    </main>

</template>