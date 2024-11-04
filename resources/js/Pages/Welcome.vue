<script lang="ts" setup>
import { Head } from "@inertiajs/vue3";
import Navigation from "@/Components/LandingPage/Navigation.vue";
import Hero from "@/Pages/Welcome/Hero.vue";
import AboutMe from "@/Pages/Welcome/AboutMe.vue";
import Employments from "@/Pages/Welcome/Employments.vue";
import Testimonials from "@/Pages/Welcome/Testimonials.vue";
import Articles from "@/Pages/Welcome/Articles.vue";
import Projects from "@/Pages/Welcome/Projects.vue";
import Contact from "@/Pages/Welcome/Contact.vue";
import Skills from "@/Pages/Welcome/Skills.vue";
</script>

<template>
    <Head title="Welcome" />
    <div class="relative min-h-screen w-full bg-neutral-950 text-white pb-10">
        <Navigation />
        <Hero />
        <AboutMe />
        <Employments />
        <Projects />
        <Articles />
        <Skills />
        <Testimonials />
        <Contact />
    </div>
</template>

<style scoped>
.container-landing-page {
    @apply w-full mt-6 lg:mt-12 px-4 mx-auto lg:max-w-6xl content-center;
}
</style>
