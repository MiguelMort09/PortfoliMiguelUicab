<script lang="ts" setup>
const backgroundPolygon = "assets/images/background-polygon.svg";
const profile = "assets/images/IMG_2921.jpg";
</script>

<template>
    <section
        class="relative min-h-screen flex flex-col items-center justify-center text-white overflow-hidden bg-gradient-to-b from-slate-950 via-slate-950 to-black  py-10">
        <!-- Background Image -->
        <img
            :src="backgroundPolygon"
            alt="Background"
            class="absolute inset-0 h-full w-full min-h-screen object-cover opacity-30 animate-zoomin animate-duration-300">

        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black"></div>

        <div class="relative size-full z-20 w-full py-10">
            <div class="w-full flex justify-center mb-16">
                <img
                    :src="profile"
                    alt="Profile Picture"
                    class="size-40 md:size-80 rounded-full border-4 border-gray-300 shadow-lg   animate-zoomin  animate-duration-300"/>
            </div>
            <div
                class="sm:px-10 md:max-w-5xl mx-auto px-6  animate-zoomin  animate-duration-300">
                <!-- Name -->
                <h1 class="font-extrabold text-2xl sm:text-4xl lg:text-6xl text-white mb-4 tracking-wide">
                    MIGUEL UICAB -
                    <span class="text-sky-500">
                        MORT
                    </span>
                </h1>

                <!-- Description -->
                <h2 class=" sm:text-lg lg:text-4xl font-bold text-sky-500 mb-6 leading-relaxed">
                    FULL STACK DEVELOPER
                </h2>
                <h3 class=" sm:text-lg lg:text-3xl font-bold text-sky-300 mb-6 leading-relaxed uppercase">
                    Beyond the lines of code, a vision of the future.
                </h3>

                <!-- Quote -->

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
