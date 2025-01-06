<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";
import {onMounted, ref} from "vue";

const statusPage = true;

const projects = ref([]);

const loadProjects = async () => {
    try {
        const response = await fetch(route('projects.index'));
        projects.value = await response.json();
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
            El portfolio aun está en construcción pronto verá más proyectos en esta sección
        </div>
        <div v-show="projects.length > 0" class="grid grid-cols-2 gap-8">
            
        </div>
    </section>
</template>

<style scoped></style>
