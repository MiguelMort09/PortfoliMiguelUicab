<script lang="ts" setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';
import {InputText} from "primevue";

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});
const image = 'images/register.png';

const loginWithGoogle = () => {
    window.location.href = '/auth/redirect';
};

const submit = () => {
    form.post(route('register'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation');
        },
    });
};
</script>

<template>

    <Head title="Register"/>
    <GuestLayout>
        <Head title="Log in"/>
        <div
            class="min-h-screen w-full md:content-center px-4 py-10 bg-gradient-to-b from-slate-950 via-black to-slate-950">
            <div class="container mx-auto max-w-2xl">
                <div class="shadow-xl p-10 w-full bg-neutral-800 grid grid-cols-1 md:grid-cols-2 rounded-lg gap-6">
                    <div class="h-full flex flex-col justify-center items-center">
                        <div class="text-center w-full font-black text-3xl mb-4 text-gray-100">
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl uppercase tracking-wider gradient-text">
                                HELLO, FRIEND!
                            </h1>
                        </div>
                        <img :src="image" alt="Login" class="w-full h-auto object-cover hidden md:block"/>
                    </div>
                    <div class="w-full h-full">
                        <h2 class="text-2xl font-extrabold text-gray-100 mb-2">
                            ¡Bienvenido/a a nuestra comunidad!
                        </h2>
                        <h3 class="text-lg font-medium text-gray-300 mb-6">
                            Empieza tu aventura con nosotros.
                        </h3>
                        <form @submit.prevent="submit">
                            <!-- Inputs del formulario -->
                            <div>
                                <InputLabel for="name" value="Name"/>

                                <InputText
                                    id="name"
                                    v-model="form.name"
                                    autocomplete="name"
                                    autofocus
                                    class="mt-1 block w-full"
                                    required
                                    type="text"
                                />

                                <InputError :message="form.errors.name" class="mt-2"/>
                            </div>

                            <div class="mt-4">
                                <InputLabel for="email" value="Email"/>

                                <InputText
                                    id="email"
                                    v-model="form.email"
                                    autocomplete="username"
                                    class="mt-1 block w-full"
                                    required
                                    type="email"
                                />

                                <InputError :message="form.errors.email" class="mt-2"/>
                            </div>

                            <div class="mt-4">
                                <InputLabel for="password" value="Password"/>

                                <InputText
                                    id="password"
                                    v-model="form.password"
                                    autocomplete="new-password"
                                    class="mt-1 block w-full"
                                    required
                                    type="password"
                                />

                                <InputError :message="form.errors.password" class="mt-2"/>
                            </div>

                            <div class="mt-4">
                                <InputLabel for="password_confirmation" value="Confirm Password"/>

                                <InputText
                                    id="password_confirmation"
                                    v-model="form.password_confirmation"
                                    autocomplete="new-password"
                                    class="mt-1 block w-full"
                                    required
                                    type="password"
                                />

                                <InputError :message="form.errors.password_confirmation" class="mt-2"/>
                            </div>

                            <!-- Botón Registrarse -->
                            <div class="mt-6 flex flex-col gap-4">
                                <PrimaryButton
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                    class="w-full py-3 bg-gradient-to-r from-green-400 to-green-600 text-white font-semibold rounded-full shadow-md hover:scale-105 transition-transform duration-300 hover:shadow-lg"
                                >
                                    Registrarse
                                </PrimaryButton>

                                <button
                                    class="w-full py-3 bg-white text-gray-800 font-semibold rounded-full shadow-md flex items-center justify-center gap-2 hover:bg-gray-100 hover:scale-105 transition-transform duration-300 hover:shadow-lg"
                                    @click="loginWithGoogle">
                                    <i class="pi pi-google text-red-500"></i>
                                    <span>Inicia Sesión con Google</span>
                                </button>
                            </div>
                        </form>
                        <div class="mt-4 text-center">
                            <Link
                                :href="route('login')"
                                class="text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                            >
                                ¿Ya tienes una cuenta? Inicia sesión
                            </Link>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </GuestLayout>
</template>
