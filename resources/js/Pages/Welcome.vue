<script lang="ts" setup>
import { Head } from "@inertiajs/vue3";
import Hero from "@/Pages/Welcome/Hero.vue";
import AboutMe from "@/Pages/Welcome/AboutMe.vue";
import Employments from "@/Pages/Welcome/Employments.vue";
import Projects from "@/Pages/Welcome/Projects.vue";
import Contact from "@/Pages/Welcome/Contact.vue";
import Skills from "@/Pages/Welcome/Skills.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
        <Hero />
        <AboutMe />
        <div class="container-landing-page md:flex gap-8">
            <Employments />
            <Skills />
        </div>
        <Projects />
        <Contact />
    </GuestLayout>
</template>

<style scoped>
.container-landing-page {
    @apply w-full mt-6 lg:mt-12 px-4 mx-auto lg:max-w-6xl content-center;
}
</style>
