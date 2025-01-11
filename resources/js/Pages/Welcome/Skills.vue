<script lang="ts" setup>
import {onMounted, ref} from "vue";
import TitleSection from "@/Components/TitleSection.vue";
import Avatar from "primevue/avatar";

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
        const response = await fetch(route("api.skills.index"));
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
    <section id="skills" class="py-10 md:py-20 bg-black text-white">
        <div class="section-fade-in">
            <TitleSection :title="'Skills'"/>
            <div class="w-full flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 content-center px-2 mb-6 md:mb-0">
                    <button
                        v-for="(typeTech, index) in typeTechs"
                        v-animateonscroll="{  enterClass: 'animate-zoomin' }"
                        :class="{'w-full bg-gradient-to-r from-black via-slate-950 to-slate-900 ': indexSelected === index}"
                        class="w-full py-2 md:p-4 mb-2 text-lg uppercase transition-colors font-semibold hover:bg-gradient-to-r hover:from-black hover:via-slate-950 hover:to-slate-900"
                        v-on:click="setTechnology(index)">
                        {{ typeTech.type }}
                    </button>
                </div>
                <div class="w-full md:w-2/3 content-center px-2 md:order-first">
                    <ul
                        v-animateonscroll="{ enterClass: 'animate-zoomin' }"
                        class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-8 animate-duration-300 justify-self-center"
                    >
                        <li
                            v-for="(skill, index) in technologies"
                            :key="index"
                            class="text-center w-12 md:w-24"
                        >
                            <div class="w-full flex flex-col justify-center items-center">
                                <Avatar :alt="skill.name"
                                        :image="skill.icon"
                                        shape="circle"
                                        size="xlarge"/>

                                <h4 class="mt-4 text-sm font-medium text-gray-300 transition-colors duration-300">
                                    {{ skill.name }}
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>
