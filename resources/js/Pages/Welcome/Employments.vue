<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";
import { onMounted, ref } from "vue";

// Definimos el estado reactivo para empleos
const employments = ref([]);

// Función para cargar los datos desde la API
const loadEmployments = async () => {
    try {
        const response = await axios.get("/employments");
        employments.value = response.data;
    } catch (error) {
        console.error("Error al cargar los empleos:", error);
    }
};

// Cargar los datos al montar el componente
onMounted(() => {
    loadEmployments();
});
</script>

<template>
    <section class="container-landing-page">
        <TitleSection>Work Experience</TitleSection>

        <div v-for="(item, index) in employments" :key="index">
            <div class="relative flex divide-x divide-orange-400">
                <div class="w-auto md:basis-1/3 text-right">
                    <div class="items-center relative">
                        <div class="pr-4 hidden md:block">
                            <p class="font-semibold text-gray-200">
                                {{ item.companyName }}
                            </p>
                            <p class="text-sm text-gray-400">
                                {{ item.dates }}
                            </p>
                        </div>
                        <div
                            class="w-4 h-4 rounded-full shadow-lg absolute -right-2 bg-red-500 shadow-amber-200"
                        ></div>
                    </div>
                </div>

                <div class="flex-1 md:basis-2/3 pl-4">
                    <p class="font-semibold text-gray-200 md:hidden">
                        {{ item.companyName }}
                    </p>
                    <h4 class="text-lg font-semibold text-white">
                        {{ item.jobTitle }}
                    </h4>
                    <p class="text-sm text-gray-400 md:hidden">
                        {{ item.dates }}
                    </p>
                    <p class="text-sm text-gray-300 mt-1 text-justify">
                        {{ item.description }}
                    </p>

                    <div class="mt-2">
                        <h5 class="font-semibold text-gray-200 text-sm">
                            Skills:
                        </h5>
                        <div class="flex flex-wrap gap-2 mt-1">
                            <span
                                v-for="(skill, skillIndex) in item.skills"
                                :key="skillIndex"
                                class="bg-blue-800 text-blue-200 px-2 py-1 rounded-full text-xs"
                            >
                                {{ skill }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h5 class="font-semibold text-gray-200 text-sm">
                            Technologies:
                        </h5>
                        <div class="flex flex-wrap gap-2 py-2">
                            <span
                                v-for="(tech, techIndex) in item.technologies"
                                :key="techIndex"
                                class="rounded-full text-xs"
                            >
                                <img
                                    :src="tech.icon"
                                    alt="tech.name"
                                    class="size-8 object-cover"
                                />
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
