<script lang="ts" setup>
import NavLink from "@/Components/LandingPage/NavLink.vue";
</script>

<template>
    <div class="fixed top-0 left-0 right-0 p-4 hidden md:block z-50">
        <div class="max-w-4xl mx-auto px-6 py-2 bg-slate-800/60 rounded-full">
            <div class="space-x-2 flex items-center justify-around">
                <NavLink :active="route().current('welcome')" :href="route('welcome')">
                    Home
                </NavLink>
                <NavLink :active="false" href="#about">
                    About Me
                </NavLink>
                <NavLink :active="false" href="#experiences">
                    Experiences
                </NavLink>
                <NavLink :active="false" href="#skills">
                    Skills
                </NavLink>
                <NavLink :active="false" href="#testimonials">
                    Testimonials
                </NavLink>
            </div>
        </div>
    </div>
</template>
