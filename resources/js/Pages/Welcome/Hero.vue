<script lang="ts" setup>
const backgroundPolygon = "assets/images/background-polygon.svg";
const profile = "assets/images/IMG_2921.jpg";
</script>

<template>
    <section
        class="relative min-h-screen flex items-center justify-center text-white overflow-hidden bg-gradient-to-b from-slate-950 via-slate-950 to-black transition ease-in-out delay-300 scale-100 duration-1000 py-12">
        <!-- Background Image -->
        <img
            :src="backgroundPolygon"
            alt="Background"
            class="absolute inset-0 h-full w-full object-cover opacity-30 transition-transform">

        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black"></div>

        <div class="relative z-20 w-full md:min-h-screen md:content-center">
            <div class="w-full flex justify-center mb-16">
                <img
                    :src="profile"
                    alt="Profile Picture"
                    class="w-40 h-40 lg:w-48 lg:h-48 rounded-full border-4 border-gray-300 shadow-lg  transition-all duration-1000 opacity-0 translate-y-6 animate-fade-up"/>
            </div>
            <div
                class="sm:px-10 md:max-w-5xl mx-auto px-6 transition-all duration-1000 opacity-0 translate-y-6 animate-fade-up">
                <!-- Name -->
                <h1 class="font-extrabold text-2xl sm:text-4xl lg:text-6xl text-white mb-4 tracking-wide">
                    MIGUEL UICAB
                </h1>

                <!-- Description -->
                <p class="font-medium sm:text-lg lg:text-2xl text-gray-300 mb-6 leading-relaxed">
                    Full Stack Developer with 4 years of experience
                </p>

                <!-- Quote -->
                <blockquote class="sm:text-lg lg:text-2xl text-gray-200 italic border-l-4 border-red-500 pl-4">
                    "Simplicity is key; true progress is not measured by effort, but by finding the most efficient way
                    to achieve it."
                </blockquote>
            </div>
        </div>
    </section>
</template>

<style>
@keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(1rem);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-up {
    animation: fadeUp 1s ease-out forwards;
}
</style>
