<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";

const profileImageUrl = "assets/images/IMG_6430.PNG";
</script>

<template>
    <section id="about" class="py-20 bg-gradient-to-b from-black to-slate-950 text-white">
        <div class="container mx-auto px-4">
            <TitleSection :title="'About Me'"/>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-12">
                <div class=" md:w-1/3 ">
                    <img
                        v-animateonscroll="{  enterClass: 'animate-zoomin' }"
                        :src="profileImageUrl"
                        alt="Miguel Uicab"
                        class="rounded-full shadow-lg w-full shadow-lg justify-center items-center animate-duration-300"
                    />
                </div>
                <div v-animateonscroll="{  enterClass: 'animate-zoomin' }"
                     class="md:w-2/3  animate-duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            Personal Info
                        </h3>
                        <p class="mb-4 text-xl">
                            Hello! I'm Miguel Uicab, but my friends call me Mort. At 24, I have a great passion for
                            motorsports, especially F1, football, and boxing. My interests also include philanthropy and
                            public service, with the dream of becoming a successful entrepreneur. I love spending time
                            with my friends, and my extroverted nature has allowed me to connect with incredible people
                            in various spheres: work, travel, courses, meetings, and more.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            Interests & Hobbies
                        </h3>
                        <ul class="grid grid-cols-2 gap-4 text-lg">
                            <li class="flex items-center">
                                Reading
                            </li>
                            <li class="flex items-center">
                                Music
                            </li>
                            <li class="flex items-center">
                                F1 & Boxing
                            </li>
                            <li class="flex items-center">
                                Entrepreneurship
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div v-animateonscroll="{  enterClass: 'animate-zoomin' }" class="animate-duration-300">
                <blockquote
                    class="sm:text-lg lg:text-2xl text-sky-200 italic border-l-8 mt-16 border-sky-300 pl-4 bg-slate-400/30 py-4">
                    "Simplicity is key; true progress is not measured by effort, but by finding the most efficient way
                    to achieve it."
                </blockquote>
            </div>
        </div>
    </section>
</template>
