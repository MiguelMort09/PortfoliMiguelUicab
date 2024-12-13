<script lang="ts" setup>
import {onMounted, ref} from "vue";
import TitleSection from "@/Components/TitleSection.vue";

const technologies = ref([]);
const selectedTech = ref(null);

const loadTechnologies = async () => {
    try {
        const response = await axios.get("/technologies");
        technologies.value = response.data;
        if (technologies.value.length > 0) {
            selectedTech.value = technologies.value[0];
        }
    } catch (error) {
        console.error("Error al cargar los empleos:", error);
    }
};

onMounted(() => {
    loadTechnologies();
});

</script>

<template>
    <section id="skills" class="w-full mt-6 lg:mt-12 px-4 mx-auto lg:max-w-6xl">
        <TitleSection>Capabilities & Tools</TitleSection>
        <div class="flex flex-wrap items-center justify-start gap-4">
            <div v-for="(typeTech, index) in technologies"
                 :key="index"
                 class="relative group"
            >
                <h3 :class="{'bg-slate-900': selectedTech === typeTech}"
                    class="text-xl font-semibold py-2 px-4 cursor-pointer rounded-lg  border border-gray-600 group-hover:text-white hover:bg-slate-900 transition-all duration-150"
                    v-on:click="selectedTech = typeTech">
                    {{ typeTech.type }}
                </h3>
            </div>
        </div>

        <div class="w-full mt-8  text-center p-6">
            <div v-if="selectedTech !== null">
                <ul class="w-full flex flex-wrap justify-center gap-6 transition-all ease-in-out duration-300 delay-300	">
                    <li v-for="(skill, idx) in selectedTech.technologies"
                        :key="idx"
                        class="text-center w-20"
                    >
                        <img
                            :alt="skill.name"
                            :src="skill.icon"
                            class="size-20 p-3 object-cover rounded-full shadow-lg border border-gray-600 bg-gradient-to-b from-slate-900 via-black to-slate-900 transition-transform transform hover:scale-110 duration-300"
                        />
                        <h4 class="mt-2 text-sm font-medium text-gray-300 transition-colors duration-300">
                            {{ skill.name }}
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>

<style scoped></style>
