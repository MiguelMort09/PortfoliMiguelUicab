<script setup>
import Navigation from "@/Components/LandingPage/Navigation.vue";
import 'primeicons/primeicons.css';
</script>

<template>
    <div class="relative min-h-screen bg-black text-white">
        <Navigation/>
        <main>
            <slot/>
        </main>
    </div>
</template>
