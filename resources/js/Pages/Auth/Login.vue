<script lang="ts" setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';
import {InputText} from "primevue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";


defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});


const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password');
        },
    });
};
const image = 'images/login.png';

const loginWithGoogle = () => {
    window.location.href = '/auth/redirect';
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in"/>
        <div
            class="min-h-screen w-full md:content-center px-4 py-10 bg-gradient-to-b from-slate-950 via-black to-slate-950">
            <div class="container mx-auto max-w-2xl">
                <div class="shadow-xl p-10 w-full bg-neutral-800 grid grid-cols-1 md:grid-cols-2 rounded-lg gap-6">

                    <div class="w-full h-full order-last md:order-first">
                        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                            {{ status }}
                        </div>
                        <form @submit.prevent="submit">
                            <div
                                class="w-full h-full flex flex-col justify-center items-stretch   ">

                                <h2 class="text-2xl text-center font-bold">
                                    INICIAR SESIÓN
                                </h2>
                                <div class="flex flex-col gap-2 mt-6">
                                    <label for="username">Email</label>
                                    <InputText v-model="form.email"
                                               autocomplete="username"
                                               autofocus
                                               name="username"
                                               required
                                               type="email"
                                    />
                                    <InputError :message="form.errors.email" class="mt-2"/>
                                </div>
                                <div class="flex flex-col gap-2 mt-4">
                                    <label for="password">Password</label>
                                    <InputText id="password"
                                               v-model="form.password"
                                               autocomplete="current-password"
                                               required
                                               type="password"
                                    />
                                    <InputError :message="form.errors.password" class="mt-2"/>
                                </div>
                                <div class="mt-6 flex flex-col gap-4">
                                    <PrimaryButton
                                        :class="{ 'opacity-25': form.processing }"
                                        :disabled="form.processing"
                                        class="w-full py-3 bg-gradient-to-r from-green-400 to-green-600 text-white font-semibold rounded-full shadow-md hover:scale-105 transition-transform duration-300 hover:shadow-lg"
                                    >
                                        Iniciar sesión
                                    </PrimaryButton>
                                    <button
                                        class="w-full py-3 bg-white text-gray-800 font-semibold rounded-full shadow-md flex items-center justify-center gap-2 hover:bg-gray-100 hover:scale-105 transition-transform duration-300 hover:shadow-lg"
                                        @click="loginWithGoogle">
                                        <i class="pi pi-google text-red-500"></i>
                                        <span>Inicia Sesión con Google</span>
                                    </button>
                                </div>

                                <!-- Enlace para "Olvidé mi contraseña" -->
                                <div class="mt-4 text-center">
                                    <Link
                                        :href="route('password.request')"
                                        class="text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                                    >
                                        ¿Olvidaste tu contraseña?
                                    </Link>
                                </div>

                                <!-- Enlace para redireccionar a la página de registro -->
                                <div class="mt-2 text-center">
                                    <Link
                                        :href="route('register')"
                                        class="text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                                    >
                                        ¿No tienes una cuenta? Regístrate
                                    </Link>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="w-full flex-col justify-center items-center ">
                        <div class="text-center w-full font-black text-3xl mb-4 text-gray-100">
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl uppercase tracking-wider gradient-text">
                                HELLO, FRIEND!
                            </h1>
                        </div>
                        <img :src="image" alt="Login" class="w-full h-auto object-cover hidden md:block"/>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
