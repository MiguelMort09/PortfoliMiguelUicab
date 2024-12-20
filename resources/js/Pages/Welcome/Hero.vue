<script lang="ts" setup>
import {onMounted, ref} from "vue";

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
    <div class="relative py-12 min-h-screen bg-gradient-to-b from-black via-slate-900 to-black">
        <!-- Background Image -->
        <img
            :src="backgroundPolygon"
            alt="Background"
            class="absolute inset-0 h-full w-full object-cover opacity-30"
        />

        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black"></div>

        <div class="relative z-20 min-h-screen w-full content-center">
            <div class="w-full flex justify-center mb-16">
                <img
                    alt="Profile Picture"
                    class="w-40 h-40 lg:w-48 lg:h-48 rounded-full border-4 border-gray-300 shadow-lg"
                    src="/assets/images/IMG_2921.jpg"
                />
            </div>
            <div class="sm:px-10 md:max-w-5xl mx-auto px-6 ">
                <!-- Name -->
                <h1 class="font-extrabold text-2xl sm:text-4xl lg:text-6xl text-white mb-4 tracking-wide">
                    MIGUEL UICAB
                </h1>

                <!-- Description -->
                <p class="font-medium sm:text-lg lg:text-xl text-gray-300 mb-6 leading-relaxed">
                    Desarrollador Full Stack con 4 años de experiencia. Ingeniero en Tecnologías de Software,
                    especializado
                    en el desarrollo de aplicaciones web con PHP y Laravel.
                </p>

                <!-- Quote -->
                <blockquote class="sm:text-lg lg:text-2xl text-gray-200 italic border-l-4 border-red-500 pl-4">
                    "Simplicity is key; true progress is not measured by effort, but by finding the most efficient way
                    to
                    achieve it."
                </blockquote>
            </div>
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
