<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';

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
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Log in"/>
        <div class="min-h-screen w-full md:content-center">
            <div class="container mx-auto max-w-2xl">
                <div class="shadow-xl p-10 w-full bg-neutral-800 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="text-white">
                        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                            {{ status }}
                        </div>

                        <form @submit.prevent="submit">
                            <div>
                                <label class="text-base font-semibold text-white">Correo</label>

                                <TextInput
                                    id="email"
                                    v-model="form.email"
                                    autocomplete="username"
                                    autofocus
                                    class="mt-1 block w-full"
                                    required
                                    type="email"
                                />

                                <InputError :message="form.errors.email" class="mt-2"/>
                            </div>

                            <div class="mt-4">
                                <label class="text-base font-semibold text-white">Contraseña</label>

                                <TextInput
                                    id="password"
                                    v-model="form.password"
                                    autocomplete="current-password"
                                    class="mt-1 block w-full"
                                    required
                                    type="password"
                                />

                                <InputError :message="form.errors.password" class="mt-2"/>
                            </div>

                            <div class="mt-4 block">
                                <label class="flex items-center">
                                    <Checkbox v-model:checked="form.remember" name="remember"/>
                                    <span class="ms-2 text-sm "
                                    >Remember me</span
                                    >
                                </label>
                            </div>

                            <div class="mt-4 block">
                                <button class="w-full  font-bold text-center border border-white rounded-lg py-2 px-4">
                                    <span class="ml-4">INICIAR SESIÓN</span>
                                </button>
                            </div>
                            <div class="mt-4 block">
                                Or sign in with
                            </div>


                            <div class="mt-4 flex items-center justify-end">
                                <Link
                                    v-if="canResetPassword"
                                    :href="route('password.request')"
                                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                >
                                    Forgot your password?
                                </Link>


                            </div>
                        </form>

                        <div class="mt-4 block">
                            <a href="/auth/redirect-w">
                                <button
                                    class="w-full  font-bold text-center border border-white rounded-lg py-2 px-4">
                                    <span class="ml-4">GOOGLE</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </GuestLayout>
</template>
