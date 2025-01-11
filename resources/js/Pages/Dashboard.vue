<script lang="ts" setup>
import {computed, ref} from 'vue';
import {Head, usePage} from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

// Obtener la lista completa de iconos desde la página de Inertia
const icons = usePage().props.fileList as Array<{
    name: string;
    path: string;
    files: string[];
}>;

// Variables para el control de paginación
const itemsPerPage = 40; // Número de iconos a mostrar por página
const currentPage = ref(1); // Página actual
const iconsToShow = computed(() => {
    const startIndex = (currentPage.value - 1) * itemsPerPage;
    const endIndex = currentPage.value * itemsPerPage;
    return icons.slice(startIndex, endIndex);
});

// Función para obtener la primera imagen de cada directorio
function getImage(files: string[]): string {
    return files.find(file => file.endsWith('.svg') || file.endsWith('.png') || file.endsWith('.jpg')) || '';
}

// Función para cargar más iconos
function loadMore() {
    currentPage.value++;
}
</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Dashboard
            </h2>
        </template>

        <!-- Contenedor para los iconos, usando un grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 p-6">
            <div v-for="(directory) in iconsToShow" :key="directory.name" class="directory">
                <div class="text-center">

                    <Suspense> <!-- Imagen del directorio -->
                        <div v-if="getImage(directory.files)">
                            <img :src="getImage(directory.files)" alt="icon"
                                 class="w-24 h-24 object-contain mx-auto"/>
                        </div>
                        <p v-else class="text-gray-500">No image found</p>
                        <template #fallback>
                            <div class="w-24 h-24 bg-gray-300 animate-pulse mx-auto"></div>
                        </template>
                    </Suspense>

                    <h3 class="font-semibold text-lg mt-2">{{ directory.name }}</h3>
                </div>
            </div>
        </div>

        <!-- Botón para cargar más iconos -->
        <div v-if="iconsToShow.length < icons.length" class="text-center mt-6">
            <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition" @click="loadMore">
                Load More
            </button>
        </div>
    </AuthenticatedLayout>
</template>
