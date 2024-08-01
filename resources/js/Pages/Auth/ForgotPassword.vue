<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>

    <div>

        <Head title="Forgot Password" />

        <div class="h-screen w-full relative overflow-hidden">
            <Header></Header>
            <img src="../../../../public/assets/jo-2024.jpeg" alt="drapeau des jeux olympiques" class="object-cover w-full h-full">
        </div>

        <div class="absolute h-full w-full top-0 flex justify-center items-center">

            <AuthenticationCard>
                <template #logo>
                    <AuthenticationCardLogo />
                </template>

                <div class="mb-4 text-sm text-gray-600">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                </div>

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="email" value="Email" />
                        <TextInput
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="mt-1 block w-full"
                            required
                            autofocus
                            autocomplete="username"
                        />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Email Password Reset Link
                        </PrimaryButton>
                    </div>
                </form>

            </AuthenticationCard>

        </div>

        <div class="w-full">
            <Footer></Footer>
        </div>

    </div>
    
</template>
