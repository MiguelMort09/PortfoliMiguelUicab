<script lang="ts" setup>
import {PrimeIcons} from '@primevue/core/api';
</script>

<template>
    <footer class="bg-black text-white py-8 ">
        <div class="container mx-auto px-4 md:flex justify-between h-full items-end">
            <div class="flex flex-col items-center md:items-start space-y-4">
                <h3 class="text-lg font-semibold">
                    Contact Info
                </h3>
                <div class="w-full columns-1 md:columns-2 space-y-2 justify-items-center md:justify-items-start">

                    <a class="flex items-center text-blue-400 hover:underline"
                       href="https://www.linkedin.com/in/miguel-ernesto-uicab-canabal-2b72601bb/"
                       target="_blank">
                        <i :class="PrimeIcons.LINKEDIN" style="color: white"></i>
                        <span class="ml-2">LinkedIn</span>
                    </a>
                    <a class="flex items-center text-blue-400 hover:underline"
                       href="https://www.linkedin.com/in/miguel-ernesto-uicab-canabal-2b72601bb/"
                       target="_blank">
                        <i :class="PrimeIcons.GITHUB" style="color: white"></i>
                        <span class="ml-2">GitHub</span>
                    </a>
                    <a class="flex items-center text-green-400 hover:underline" href="https://wa.me/529821029769"
                       target="_blank">
                        <i :class="PrimeIcons.WHATSAPP" style="color: white"></i>
                        <span class="ml-2">WhatsApp</span>
                    </a>

                    <div class="flex items-center">
                        <i :class="PrimeIcons.PHONE" style="color: white"></i>
                        <span class="ml-2">+52 982 102 9769</span>
                    </div>
                    <div class="flex items-center">
                        <i :class="PrimeIcons.ENVELOPE" style="color: white"></i>
                        <a class="ml-2 text-blue-400 hover:underline" href="mailto:devmigueluicab@gmail.com">
                            devmigueluicab@gmail.com
                        </a>
                    </div>
                </div>
            </div>
            <p class="mt-4 text-center md:text-right">&copy; {{ new Date().getFullYear() }} Miguel Mort. All rights
                reserved.</p>
        </div>
    </footer>
</template>

<style scoped>
.container-landing-page {
    @apply w-full px-4 mx-auto lg:max-w-6xl content-center;
}
</style>
