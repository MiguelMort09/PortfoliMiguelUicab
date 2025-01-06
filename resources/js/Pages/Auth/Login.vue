<script lang="ts" setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';
import {InputText} from "primevue";
import InputError from "@/Components/InputError.vue";


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
</script>

<template>
    <GuestLayout>
        <Head title="Log in"/>
        <div class="min-h-screen w-full md:content-center bg-gradient-to-b from-slate-950 via-black to-slate-950">
            <div class="container mx-auto max-w-2xl">
                <div class="shadow-xl p-10 w-full bg-neutral-800 grid grid-cols-1 sm:grid-cols-2 rounded-lg gap-6">
                    <div class="w-full h-full">
                        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                            {{ status }}
                        </div>
                        <form @submit.prevent="submit">
                            <div class="w-full h-full flex flex-col justify-center items-stretch">

                                <h2 class="text-2xl text-center font-bold  "> INICIAR SESIÓN</h2>

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

                                <div class="mt-4">
                                    <button
                                        class="w-full py-2 bg-slate-950 shadow-lg rounded-lg hover:bg-slate-950/70 hover:scale-105 transition duration-200"
                                        type="submit">
                                        Iniciar Sesión
                                    </button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-6 w-full border border-neutral-200"/>
                        <div class="mt-4">
                            <a
                                href="/auth/redirect">
                                <button
                                    class="w-full text-center py-2 bg-blue-950 shadow-lg rounded-lg hover:bg-blue-950/70 hover:scale-105 transition duration-200 ">
                                    <i class="pi pi-google" style="color: white"></i>
                                    <span class="ml-2">Inicia Sesión con Google</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="w-full flex-col justify-center items-center">
                        <div class="text-center w-full font-black text-3xl mb-4">
                            <h2>HELLO, FRIEND!</h2>
                        </div>
                        <img :src="image" alt="Login" class="w-full h-auto object-cover"/>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
