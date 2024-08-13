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

    <main>

        <Header opacity="bg-opacity-100" position="initial"></Header>

        <section class="h-screen w-full flex justify-center pt-16">
            
            <div class="w-1/2 flex flex-col gap-10">
                
                <h1>Formulaire de contact</h1>

                <form id="app" @submit.prevent="sendForm">

                    <div>
                        <label for="lastname">Nom</label>
                        <input id="lastname" v-model="contactForm.lastname" type="text" name="name">
                    </div>

                    <div>
                        <label for="firstname">Prénom</label>
                        <input id="firstname" v-model="contactForm.firstname" type="text" name="name">
                    </div>

                    <div>
                        <label for="mail">Email</label>
                        <input id="mail" v-model="contactForm.mail" type="text" name="name">
                    </div>

                    <div>
                        <label for="title">Titre</label>
                        <input id="title" v-model="contactForm.title" type="text" name="name">
                    </div>

                    <div>
                        <label for="message">Message</label>
                        <input id="message" v-model="contactForm.message" type="textarea" name="name">
                    </div>
                   
                    <button  
                        class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
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