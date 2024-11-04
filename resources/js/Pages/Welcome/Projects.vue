<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";
import { onMounted, ref } from "vue";

const statusPage = true;

const projects = ref([]);

const loadProjects = async () => {
    try {
        const response = await axios.get("/projects");
        projects.value = response.data;
    } catch (error) {
        console.error("Error al cargar los projectos:", error);
    }
};

onMounted(() => {
    loadProjects();
});
</script>

<template>
    <section id="projects" class="container-landing-page">
        <TitleSection>Projects</TitleSection>

        <div
            class="border border-red-600 text-red-600 text-center rounded-lg font-bold px-4 py-1"
        >
            El portfolio aun está en construcción pronto verá más proyectos en
            esta sección
        </div>
        <div v-show="projects.length > 0" class="grid grid-cols-2 gap-8">
            <div v-for="(item, index) in projects" :key="index">
                <div class="h-52 w-full group hover:bg-red-600 rounded-lg">
                    <div
                        class="contain-strict flex flex-col p-4 h-full w-full bg-neutral-950 group-hover:bg-neutral-900 border border-red-600 group-hover:-translate-y-2 transition-transform rounded-lg justify-between"
                    >
                        <div class="flex gap-4 items-center">
                            <div
                                class="p-2 rounded-md text-white font-bold text-lg group-hover:bg-red-600 transition-colors border border-red-600"
                            >
                                &lt;/&gt;
                            </div>
                            <div>
                                <h4
                                    class="group-hover:text-red-500 transition-colors text-lg font-bold"
                                >
                                    {{ item.name }}
                                </h4>
                                <div>
                                    <img
                                        :src="'/assets/icons/redis/redis-original.svg'"
                                        alt="image"
                                        class="object-cover size-6"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="py-2 text-sm text-gray-300">
                            <p class="line-clamp-4 text-justify">
                                Text description projectsText description
                                projects ext description projects Text
                                description projects Text description projects
                                Text description projects Text description
                                projects Text description projects Text
                                description projects Text description projects
                                Text description projects Text description
                                projects Text description projects
                            </p>
                        </div>
                        <div class="flex justify-end space-x-2">
                            <button
                                class="px-4 py-2 border border-red-600 hover:bg-red-600/90 text-xs rounded justify-items-center text-center"
                            >
                                <span>GitHub</span>
                            </button>
                            <button
                                class="px-4 py-2 bg-red-600 hover:bg-red-800/90 text-xs rounded text-center align-baseline"
                            >
                                <span>Demo</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped></style>
