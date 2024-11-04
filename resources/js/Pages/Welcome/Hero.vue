<script lang="ts" setup>
import { onMounted, ref } from "vue";

const roles = [
    "Software Developer",
    "Web Developer",
    "Full Stack Developer",
    "Data Science Enthusiast",
];

const backgroundPolygon = "assets/images/background-polygon.svg";

const currentRole = ref("");
let roleIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
    if (!isDeleting && charIndex <= roles[roleIndex].length) {
        currentRole.value = roles[roleIndex].substring(0, charIndex++);
    } else if (isDeleting && charIndex >= 0) {
        currentRole.value = roles[roleIndex].substring(0, charIndex--);
    } else {
        isDeleting = !isDeleting;
        if (!isDeleting) {
            roleIndex = (roleIndex + 1) % roles.length;
        }
    }
    setTimeout(typeEffect, isDeleting ? 50 : 100);
}

onMounted(() => typeEffect());
</script>

<template>
    <div class="relative h-screen bg-black flex justify-center items-center">
        <!-- Background Image -->
        <img
            :src="backgroundPolygon"
            alt="Background"
            class="absolute inset-0 h-full w-full object-cover opacity-20"
        />

        <!-- Hero Text -->
        <div class="relative z-20 text-center px-4">
            <!-- Metallic Gradient for Name -->
            <h1 class="font-extrabold text-6xl lg:text-8xl text-white mb-8">
                MIGUEL UICAB
            </h1>
            <!-- Typing Effect for Roles -->
            <h2
                class="font-semibold text-2xl lg:text-4xl text-red-600 tracking-wide mb-12"
            >
                {{ currentRole }}
                <span class="blinking-cursor">|</span>
            </h2>

            <blockquote class="md:text-xl text-white italic border-red-500">
                "Simplicity is key; true progress is not measured by effort, but
                by finding the most efficient way to achieve it."
            </blockquote>
        </div>
    </div>
</template>

<style scoped>
/* Blinking cursor for typing effect */
.blinking-cursor {
    display: inline-block;
    animation: blink 1s steps(1) infinite;
}

@keyframes blink {
    50% {
        opacity: 0;
    }
}
</style>
