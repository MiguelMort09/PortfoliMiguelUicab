<script lang="ts" setup>
import {onMounted, ref} from "vue";
import TitleSection from "@/Components/TitleSection.vue";

interface TypeTech {
    type: string;
    technologies: Technology[];
}

interface Technology {
    name: string;
    icon: string;
}

const typeTechs = ref<TypeTech[]>([]);
const technologies = ref<Technology[]>([]);

const indexSelected = ref<number>(0);

const setTechnology = (index: number) => {
    indexSelected.value = index;
    technologies.value = typeTechs.value[index].technologies;
}

onMounted(async () => {
    try {
        const response = await fetch(route("technologies.index"));
        typeTechs.value = await response.json();
        if (typeTechs.value.length) {
            technologies.value = typeTechs.value[0].technologies;
        }
    } catch (error) {
        console.error("Error al cargar los empleos:", error);
    }
});

</script>

<template>
    <section id="skills" class="py-20 bg-black text-white">
        <div class="container mx-auto px-2 md:px-4 section-fade-in">
            <TitleSection :title="'Skills'"/>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/3 md:pl-8 order-last md:order-first">

                    <ul
                        v-animateonscroll="{ enterClass: 'animate-zoomin' }"
                        class="w-full h-full mx-auto grid grid-cols-3 md:grid-cols-6 gap-4 justify-center items-center animate-duration-300"
                    >
                        <li
                            v-for="(skill, idx) in technologies"
                            :key="idx"
                            :class="`text-center w-12 md:w-24 group-${Math.floor(idx / 3)}`"
                        >
                            <div class="w-full flex flex-col justify-center items-center">
                                <img
                                    :alt="skill.name"
                                    :src="skill.icon"
                                    class="w-10 md:w-20 p-1 sm:p-2 lg:p-3 object-cover rounded-full shadow-lg border border-gray-600 bg-gradient-to-b from-slate-900 via-black to-slate-900 transition-transform transform hover:scale-110 duration-300"
                                />

                                <h4 class="mt-4 text-sm font-medium text-gray-300 transition-colors duration-300">
                                    {{ skill.name }}
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/3 mb-8 md:mb-0">
                    <button
                        v-for="(typeTech, index) in typeTechs"
                        v-animateonscroll="{  enterClass: 'animate-zoomin' }"
                        :class="{'w-full bg-gradient-to-r from-black via-slate-950 to-slate-900 ': indexSelected === index}"
                        class="w-full p-4 mb-2 text-lg uppercase transition-colors font-semibold hover:bg-gradient-to-r hover:from-black hover:via-slate-950 hover:to-slate-900"
                        v-on:click="setTechnology(index)">
                        {{ typeTech.type }}
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped></style>
