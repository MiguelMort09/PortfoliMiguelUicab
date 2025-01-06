<script lang="ts" setup>
import {Head} from '@inertiajs/vue3';
import {ref} from 'vue';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Hero from "@/Pages/Welcome/Hero.vue";
import AboutMe from "@/Pages/Welcome/AboutMe.vue";
import Experiences from "@/Pages/Welcome/Experiences.vue";
import Skills from "@/Pages/Welcome/Skills.vue";
import Footer from "@/Pages/Welcome/Footer.vue";
import Testimonials from "@/Pages/Welcome/Testimonials.vue";


const value = ref(0);

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
}>();

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <GuestLayout>
        <Head title="Welcome"/>
        <Hero/>
        <AboutMe/>
        <div v-animateonscroll="{ enterClass: 'animate-fadeinright', leaveClass: 'animate-fadeoutright' }"
             class="transition ease-in-out delay-300 scale-100  duration-1000">

            <Experiences/>
        </div>
        <div v-animateonscroll="{ enterClass: 'animate-zoomin', leaveClass: 'animate-fadeout' }"
             class="transition ease-in-out delay-500 scale-100  duration-1000">
            <Skills/>
        </div>
        <div v-animateonscroll="{ enterClass: 'animate-fade-in-left', leaveClass: 'animate-fade-out-left' }"
             class="transition ease-in-out delay-500 scale-100  duration-1000">
            <Testimonials/>
        </div>
        <Footer/>
    </GuestLayout>

</template>
