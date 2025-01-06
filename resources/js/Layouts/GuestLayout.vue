<script lang="ts" setup>
import Navigation from "@/Components/LandingPage/Navigation.vue";
</script>

<template>
    <div class="relative min-h-screen bg-black text-white">
        <main>
            <Navigation/>
            <slot/>
        </main>
    </div>
</template>
