<script lang="ts" setup>
import {Head} from "@inertiajs/vue3";
import Hero from "@/Pages/Welcome/Hero.vue";
import AboutMe from "@/Pages/Welcome/AboutMe.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
    <Head title="Welcome"/>
    <GuestLayout>
        <Hero/>
        <section class="py-20">

        </section>
        <section class="py-10">
            <AboutMe/>
        </section>
        <section class="py-10">
            clea
        </section>
    </GuestLayout>
</template>

<style scoped>
.container-landing-page {
    @apply w-full mt-6 lg:mt-12 px-4 mx-auto lg:max-w-6xl content-center;
}
</style>
