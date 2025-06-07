<script lang="ts" setup>
const backgroundPolygon = "assets/images/background-polygon.svg";
import Image from 'primevue/image';

const profile = "assets/images/IMG-1.jpg";
</script>

<template>
    <section
        class="relative min-h-screen flex flex-col items-center justify-center text-white overflow-hidden bg-gradient-to-b from-slate-950 via-slate-950 to-black  py-10">
        <!-- Background Image -->
        <Image
            :src="backgroundPolygon"
            alt="Background"
            image-class="absolute inset-0 min-h-screen w-auto object-cover opacity-30 animate-zoomin animate-duration-100"/>

        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black"></div>

        <div class="relative size-full z-20 w-full py-10">
            <div class="w-full md:max-w-6xl mx-auto container px-4 md:px-8 ">
                <div class="w-full flex flex-col lg:flex-row items-center gap-4">
                    <div class="md:w-1/3 mb-10 lg:mb-0 justify-center">
                        <Image
                            :src="profile"
                            alt="Profile Picture"
                            image-class="h-40 md:h-60 lg:h-80 object-cover rounded-full border-4 border-gray-300 shadow-lg animate-zoomin animate-duration-300"
                        />
                    </div>
                    <div
                        class="md:w-2/3  animate-zoomin  animate-duration-300 px-2">
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
            </div>

        </div>
    </section>
</template>

<style>
</style>
