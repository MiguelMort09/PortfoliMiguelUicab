<script lang="ts" setup>
const profileImageUrl = "assets/images/IMG_6430.PNG";
</script>

<template>
    <section id="about" v-animateonscroll="{ enterClass: 'animate-fadein', leaveClass: 'animate-fadeout' }"
             class="py-20 bg-gradient-to-b from-black to-slate-950 text-white transition ease-in-out delay-300 scale-100  duration-1000">
        <div class="container mx-auto px-4 section-fade-in">
            <h2 class="text-4xl font-bold mb-12 text-center">About Me</h2>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-12">
                <div
                    class=" md:w-1/3 ">
                    <img
                        v-animateonscroll="{ enterClass: 'animate-zoomin', leaveClass: 'animate-fadeout' }"
                        :src="profileImageUrl"
                        alt="Miguel Uicab"

                        class="rounded-full shadow-lg w-full shadow-lg justify-center items-center animate-duration-1000"
                    />
                </div>
                <div v-animateonscroll="{ enterClass: 'animate-fadein', leaveClass: 'animate-fadeout' }"
                     class="md:w-2/3 animate-duration-1000">
                    <div
                        class="mb-8"
                    >
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            Personal Info
                        </h3>
                        <p class="mb-4 text-xl text-justify">
                            ¡Hola! I'm Miguel Uicab, but everyone calls me Mort. At 24, I'm deeply passionate about
                            technology. I have philanthropic interests and aspirations in public service, with the
                            ultimate goal of becoming a successful entrepreneur.
                        </p>
                        <p class="mb-4 text-xl text-justify">
                            My extroverted nature has allowed me to connect with incredible people across various
                            spheres: work, travel, courses, meetings, and more.
                        </p>
                    </div>
                    <div
                    >
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
            <div
                class="mt-12 text-center"
            >
                <p class="text-xl lg:text-3xl italic">
                    "Success is best achieved as a team."
                </p>
            </div>
        </div>
    </section>
</template>
<style scoped>

</style>
