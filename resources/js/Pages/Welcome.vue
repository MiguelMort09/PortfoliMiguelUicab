<script lang="ts" setup>
import Hero from "@/Pages/Welcome/Hero.vue";
import AboutMe from "@/Pages/Welcome/AboutMe.vue";
import Experiences from "@/Pages/Welcome/Experiences.vue";
import Skills from "@/Pages/Welcome/Skills.vue";
import Testimonials from "@/Pages/Welcome/Testimonials.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
    <GuestLayout>
        <Hero/>
        <AboutMe/>
        <Experiences/>
        <Skills/>
        <Testimonials/>
    </GuestLayout>
</template>

<style scoped>
.container-landing-page {
    @apply w-full mt-6 lg:mt-12 px-4 mx-auto lg:max-w-6xl content-center;
}
</style>
