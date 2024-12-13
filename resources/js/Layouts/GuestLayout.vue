<script setup>
import Navigation from "@/Components/LandingPage/Navigation.vue";
import Footer from "@/Pages/Welcome/Footer.vue";
</script>

<template>
    <div class="relative min-h-screen w-full text-white bg-black">
        <Navigation/>
        <main>
            <slot/>
        </main>
        <Footer/>
    </div>
</template>
