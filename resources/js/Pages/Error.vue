<script>
import { Head } from '@inertiajs/vue3';

export default {
    name: 'Error',

    components: {
        Head,
    },

    props: {
        status: Number,
    },

    computed: {
        title() {
            return {
                503: '503: Service Unavailable',
                500: '500: Server Error',
                404: '404: Page Not Found',
                403: '403: Forbidden',
            }[this.status]
        },

        description() {
            return {
                503: 'Sorry, we are doing some maintenance. Please check back soon.',
                500: 'Whoops, something went wrong on our servers.',
                404: 'Sorry, the page you are looking for could not be found.',
                403: 'Sorry, you are forbidden from accessing this page.',
            }[this.status]
        },
    },
}
</script>

<template>
    <Head title="Error"></Head>

    <div class="h-fit w-full">

        <div class="h-screen relative">

            <img src="../../../public/assets/st-quentin.jpg" alt="Drapeau des jeux olympiques de Paris 2024" class="object-cover h-full w-full">

            <main class="absolute top-1/3 w-full flex justify-center">

                <div class="w-3/4 md:w-2/6 p-10 rounded-xl flex flex-col items-center gap-6 bg-white">

                    <h1 class="text-xl font-bold">{{ title }}</h1>

                    <p class="w-full">{{ description }}</p>

                    <a  
                        class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
                        :href="`/`"
                    >
                        Retour à l'accueil
                    </a>
                </div>   

            </main>

        </div>

    </div>

</template>