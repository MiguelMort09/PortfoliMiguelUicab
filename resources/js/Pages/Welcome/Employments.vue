<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";
import {onMounted, ref} from "vue"; // Definimos el estado reactivo para empleos

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
    <section id="employments" class="w-full px-4 mx-auto lg:max-w-6xl content-center">
        <TitleSection>Experiencia Laboral</TitleSection>

        <div v-for="(item, index) in employments" :key="index">
            <div class="relative flex divide-x divide-orange-400">
                <div class="md:basis-1/3 text-right">
                    <div class="flex items-end relative p-2">
                        <div class="pr-4 hidden md:block md:w-full">
                            <h4 class="text-xl uppercase font-semibold text-red-700">
                                {{ item.jobTitle }}
                            </h4>
                            <p class="text-sm text-gray-400">
                                {{ item.companyName }}
                            </p>
                            <p class="text-sm text-gray-400">
                                {{ item.dates }}
                            </p>
                        </div>
                        <div class="w-4 h-4 rounded-full shadow-lg absolute -right-2 bg-red-500 shadow-amber-200">
                        </div>
                    </div>
                </div>

                <div class="flex-1 md:basis-2/3 pl-8 pb-8">
                    <h4 class="text-xl uppercase font-semibold text-white md:hidden">
                        {{ item.jobTitle }}
                    </h4>
                    <p class="text-sm text-gray-400 md:hidden">
                        {{ item.companyName }} | {{ item.dates }}
                    </p>
                    <p class="text-gray-300 mt-1 text-justify text-lg line-clamp-4">
                        {{ item.description }}
                    </p>
                    <div class="w-full text-right">
                        <a>
                            Ver más...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
