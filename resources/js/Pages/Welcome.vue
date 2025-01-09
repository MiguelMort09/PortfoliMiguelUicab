<script lang="ts" setup>
import {Head} from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Hero from "@/Pages/Welcome/Hero.vue";
import AboutMe from "@/Pages/Welcome/AboutMe.vue";
import Experiences from "@/Pages/Welcome/Experiences.vue";
import Skills from "@/Pages/Welcome/Skills.vue";
import Footer from "@/Pages/Welcome/Footer.vue";
import Testimonials from "@/Pages/Welcome/Testimonials.vue";

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
}>();

</script>

<template>
    <GuestLayout>
        <Head title="Welcome"/>
        <Hero/>
        <AboutMe/>
        <Experiences/>
        <Skills/>
        <Testimonials/>
        <Footer/>
    </GuestLayout>

</template>
